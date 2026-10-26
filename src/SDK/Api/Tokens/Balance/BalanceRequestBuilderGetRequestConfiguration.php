<?php

namespace Salable\SDK\Api\Tokens\Balance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BalanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BalanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BalanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BalanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BalanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BalanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BalanceRequestBuilderGetQueryParameters.
     * @param string|null $owner Owner value to retrieve the active token balances for.
     * @param string|null $source Receipt item or Subscription plan line item ID to retrieve the token balance for.
     * @param string|null $token Token slug to retrieve the balance for. If omitted all tokens will be returned for the specified owner.
     * @return BalanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $owner = null, ?string $source = null, ?string $token = null): BalanceRequestBuilderGetQueryParameters {
        return new BalanceRequestBuilderGetQueryParameters($owner, $source, $token);
    }

}
