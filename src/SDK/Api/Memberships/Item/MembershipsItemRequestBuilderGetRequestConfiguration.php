<?php

namespace Salable\SDK\Api\Memberships\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembershipsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembershipsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembershipsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembershipsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembershipsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembershipsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembershipsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return MembershipsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): MembershipsItemRequestBuilderGetQueryParameters {
        return new MembershipsItemRequestBuilderGetQueryParameters($expand);
    }

}
