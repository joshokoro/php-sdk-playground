<?php

namespace Salable\SDK\Api\Entitlements;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EntitlementsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EntitlementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EntitlementsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EntitlementsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EntitlementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EntitlementsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EntitlementsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $planId Returns only entitlements linked to this plan ID.
     * @param string|null $search 
     * @return EntitlementsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $planId = null, ?string $search = null): EntitlementsRequestBuilderGetQueryParameters {
        return new EntitlementsRequestBuilderGetQueryParameters($after, $before, $limit, $planId, $search);
    }

}
