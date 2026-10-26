<?php

declare(strict_types=1);

namespace Salable;

use Composer\InstalledVersions;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware as GuzzleMiddleware;
use GuzzleHttp\Utils;
use InvalidArgumentException;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Microsoft\Kiota\Http\Middleware\HeadersInspectionHandler;
use Microsoft\Kiota\Http\Middleware\KiotaMiddleware;
use Microsoft\Kiota\Http\Middleware\ParametersNameDecodingHandler;
use Microsoft\Kiota\Http\Middleware\RetryHandler;
use Microsoft\Kiota\Http\Middleware\UserAgentHandler;
use Microsoft\Kiota\Http\Middleware\Options\UserAgentHandlerOption;
use OutOfBoundsException;
use Salable\SDK\Api\ApiRequestBuilder;
use Salable\SDK\Salable as SalableClient;

/**
 * Official PHP client for the Salable API.
 *
 * Resource calls use the Kiota request builders on {@see $api}. Those methods
 * return promises; call wait() on the promise to get the result.
 */
final class Salable
{
    public const DEFAULT_BASE_URL = 'https://salable.app';

    public const DEFAULT_TIMEOUT = 30.0;

    private const PRODUCT_NAME = 'salable-php';

    public readonly ApiRequestBuilder $api;

    private readonly ClientInterface $httpClient;

    /**
     * @param ClientInterface|null $httpClient Replaces the default timeout, retry handler, and User-Agent.
     * @param callable|null        $handler    Transfer handler under the default middleware. Internal tests use this. Do not combine it with $httpClient.
     *
     * @internal The $handler argument is for tests.
     */
    public function __construct(
        string $apiKey,
        ?string $baseUrl = null,
        ?ClientInterface $httpClient = null,
        ?callable $handler = null,
    ) {
        if (trim($apiKey) === '') {
            throw new InvalidArgumentException('salable: api key is required');
        }
        if ($httpClient !== null && $handler !== null) {
            throw new InvalidArgumentException('salable: pass either an HTTP client or a handler, not both');
        }

        $origin = self::validateBaseUrl($baseUrl ?? self::DEFAULT_BASE_URL);
        $this->httpClient = $httpClient ?? self::defaultHttpClient($handler);

        $tokenProvider = new ApiKeyAccessTokenProvider($apiKey, self::allowedHosts($origin));
        $authProvider = new BaseBearerTokenAuthenticationProvider($tokenProvider);
        $adapter = new GuzzleRequestAdapter($authProvider, null, null, $this->httpClient);
        $adapter->setBaseUrl($origin);

        $client = new SalableClient($adapter);
        $this->api = $client->api();
    }

    /**
     * Package version when installed by Composer, or 0.0.0 for a local checkout.
     */
    public static function version(): string
    {
        if (!class_exists(InstalledVersions::class)) {
            return '0.0.0';
        }

        try {
            $version = InstalledVersions::getPrettyVersion('salable/sdk');
        } catch (OutOfBoundsException) {
            return '0.0.0';
        }

        if (!is_string($version) || $version === '' || str_starts_with($version, 'dev-')) {
            return '0.0.0';
        }

        return ltrim($version, 'v');
    }

    private static function validateBaseUrl(string $baseUrl): string
    {
        $parts = parse_url($baseUrl);
        $scheme = is_array($parts) ? ($parts['scheme'] ?? '') : '';
        $host = is_array($parts) ? ($parts['host'] ?? '') : '';
        if ($host === '' || ($scheme !== 'https' && $scheme !== 'http')) {
            throw new InvalidArgumentException(sprintf('salable: invalid base URL "%s"', $baseUrl));
        }

        return rtrim($baseUrl, '/');
    }

    /**
     * @return list<string>
     */
    private static function allowedHosts(string $baseUrl): array
    {
        $host = parse_url($baseUrl, PHP_URL_HOST);
        $hosts = ['salable.app'];
        if (is_string($host) && $host !== '' && !in_array($host, $hosts, true)) {
            $hosts[] = $host;
        }

        return $hosts;
    }

    private static function defaultHttpClient(?callable $handler): Client
    {
        $userAgent = new UserAgentHandlerOption();
        $userAgent->setProductName(self::PRODUCT_NAME);
        $userAgent->setProductVersion(self::version());

        $stack = new HandlerStack($handler ?? Utils::chooseHandler());
        $stack->push(KiotaMiddleware::parameterNamesDecoding(), ParametersNameDecodingHandler::HANDLER_NAME);
        $stack->push(GuzzleMiddleware::redirect(), 'kiotaRedirectHandler');
        $stack->push(KiotaMiddleware::userAgent($userAgent), UserAgentHandler::HANDLER_NAME);
        $stack->push(KiotaMiddleware::retry(), RetryHandler::HANDLER_NAME);
        $stack->push(KiotaMiddleware::headersInspection(), HeadersInspectionHandler::HANDLER_NAME);

        return new Client([
            'handler' => $stack,
            'timeout' => self::DEFAULT_TIMEOUT,
        ]);
    }
}
