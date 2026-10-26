<?php

namespace Salable\SDK\Api\Owners;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OwnersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OwnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OwnersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OwnersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OwnersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OwnersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OwnersRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
     * @param string|null $stripeCustomerId 
     * @return OwnersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $search = null, ?string $stripeCustomerId = null): OwnersRequestBuilderGetQueryParameters {
        return new OwnersRequestBuilderGetQueryParameters($after, $before, $expand, $limit, $search, $stripeCustomerId);
    }

}
