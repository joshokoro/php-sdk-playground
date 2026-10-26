<?php

declare(strict_types=1);

namespace Salable;

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;

/**
 * Sends the API key as a bearer token when the request host is allowed.
 */
final class ApiKeyAccessTokenProvider implements AccessTokenProvider
{
    private readonly AllowedHostsValidator $allowedHostsValidator;

    /**
     * @param list<string> $allowedHosts
     */
    public function __construct(
        private readonly string $apiKey,
        array $allowedHosts,
    ) {
        $this->allowedHostsValidator = new AllowedHostsValidator($allowedHosts);
    }

    /**
     * @param array<string, mixed> $additionalAuthenticationContext
     */
    public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
    {
        if (!$this->allowedHostsValidator->isUrlHostValid($url)) {
            return new FulfilledPromise(null);
        }

        return new FulfilledPromise($this->apiKey);
    }

    public function getAllowedHostsValidator(): AllowedHostsValidator
    {
        return $this->allowedHostsValidator;
    }
}
