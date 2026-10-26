<?php

namespace Salable\SDK\Api\Groups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GroupsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GroupsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GroupsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GroupsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GroupsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GroupsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GroupsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return GroupsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): GroupsItemRequestBuilderGetQueryParameters {
        return new GroupsItemRequestBuilderGetQueryParameters($expand);
    }

}
