<?php

namespace Salable\SDK\Api\Memberships;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MembershipsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MembershipsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MembershipsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MembershipsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MembershipsRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return MembershipsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): MembershipsRequestBuilderGetQueryParameters {
        return new MembershipsRequestBuilderGetQueryParameters($expand);
    }

}
