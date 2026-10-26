<?php

declare(strict_types=1);

namespace Salable\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;
use Salable\ApiKeyAccessTokenProvider;
use Salable\Salable;
use Salable\SDK\Api\Products\ProductsRequestBuilderGetQueryParameters;
use Salable\SDK\Api\Products\ProductsRequestBuilderGetRequestConfiguration;
use Salable\SDK\Models\ErrorResponseBody;
use Salable\SDK\Models\GetProductListSchema;

final class SalableTest extends TestCase
{
    public function testRejectsEmptyApiKey(): void
    {
        foreach (['', '   '] as $apiKey) {
            try {
                new Salable($apiKey);
                self::fail('expected an invalid API key to be rejected');
            } catch (InvalidArgumentException $exception) {
                self::assertStringContainsString('api key is required', $exception->getMessage());
            }
        }
    }

    public function testRejectsInvalidBaseUrl(): void
    {
        foreach (['not a url', 'ftp://example.com'] as $baseUrl) {
            try {
                new Salable('key', baseUrl: $baseUrl);
                self::fail('expected an invalid base URL to be rejected');
            } catch (InvalidArgumentException $exception) {
                self::assertStringContainsString('invalid base URL', $exception->getMessage());
            }
        }
    }

    public function testRejectsHandlerAndHttpClientTogether(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Salable('key', httpClient: new Client(), handler: static function (): void {
        });
    }

    public function testDefaultClientHasTimeout(): void
    {
        $salable = new Salable('key');
        $client = $this->httpClient($salable);

        self::assertInstanceOf(Client::class, $client);
        self::assertSame(Salable::DEFAULT_TIMEOUT, $client->getConfig('timeout'));
    }

    public function testCustomHttpClientReplacesDefaultStack(): void
    {
        $custom = new Client(['timeout' => 5]);
        $salable = new Salable('key', httpClient: $custom);

        self::assertSame($custom, $this->httpClient($salable));
    }

    public function testVersionFallsBackForDevCheckout(): void
    {
        self::assertSame('0.0.0', Salable::version());
    }

    public function testTokenProviderAllowsDefaultAndCustomHosts(): void
    {
        $provider = new ApiKeyAccessTokenProvider('secret-key', ['salable.app', 'staging.example.com']);
        $hosts = $provider->getAllowedHostsValidator()->getAllowedHosts();

        self::assertContains('salable.app', $hosts);
        self::assertContains('staging.example.com', $hosts);
        self::assertSame('secret-key', $provider->getAuthorizationTokenAsync('https://salable.app/api')->wait());
        self::assertSame('secret-key', $provider->getAuthorizationTokenAsync('https://staging.example.com/api')->wait());
        self::assertNull($provider->getAuthorizationTokenAsync('https://evil.example/api')->wait());
    }

    public function testProductsListSendsBearerTokenUserAgentAndQuery(): void
    {
        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], '{"data":[],"hasMore":false,"nextCursor":"cursor-1","previousCursor":null}'),
        ]);
        $salable = new Salable('secret-key', handler: $mock);

        $products = $salable->api->products()->get(new ProductsRequestBuilderGetRequestConfiguration(
            queryParameters: new ProductsRequestBuilderGetQueryParameters(
                after: 'cursor-from-previous-page',
                limit: 20,
            ),
        ))->wait();

        self::assertInstanceOf(GetProductListSchema::class, $products);
        self::assertSame('cursor-1', $products->getNextCursor());

        $request = $mock->getLastRequest();
        self::assertNotNull($request);
        self::assertSame('Bearer secret-key', $request->getHeaderLine('Authorization'));
        self::assertStringContainsString('salable-php/', $request->getHeaderLine('User-Agent'));
        self::assertSame('https://salable.app/api/products', $request->getUri()->withQuery('')->__toString());
        $query = $request->getUri()->getQuery();
        self::assertStringContainsString('limit=20', $query);
        self::assertStringContainsString('after=cursor-from-previous-page', $query);
    }

    public function testCustomBaseUrlReceivesBearerToken(): void
    {
        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], '{"data":[],"hasMore":false}'),
        ]);
        $salable = new Salable('secret-key', baseUrl: 'https://staging.example.com/', handler: $mock);

        $salable->api->products()->get()->wait();

        $request = $mock->getLastRequest();
        self::assertNotNull($request);
        self::assertSame('Bearer secret-key', $request->getHeaderLine('Authorization'));
        self::assertSame('https://staging.example.com/api/products', $request->getUri()->withQuery('')->__toString());
    }

    public function testApiErrorIsErrorResponseBody(): void
    {
        $mock = new MockHandler([
            new Response(404, ['Content-Type' => 'application/json'], '{"title":"Not found","detail":"missing product"}'),
        ]);
        $salable = new Salable('secret-key', handler: $mock);

        try {
            $salable->api->products()->byId('missing')->get()->wait();
            self::fail('expected ErrorResponseBody');
        } catch (ErrorResponseBody $error) {
            self::assertSame(404, $error->getResponseStatusCode());
            self::assertSame('Not found', $error->getTitle());
            self::assertSame('missing product', $error->getDetail());
        }
    }

    private function httpClient(Salable $salable): mixed
    {
        $property = new ReflectionProperty(Salable::class, 'httpClient');

        return $property->getValue($salable);
    }
}
