<?php

namespace Salable\SDK\Api\Grantees\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GranteesItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GranteesItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GranteesItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GranteesItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranteesItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranteesItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranteesItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return GranteesItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): GranteesItemRequestBuilderGetQueryParameters {
        return new GranteesItemRequestBuilderGetQueryParameters($expand);
    }

}
