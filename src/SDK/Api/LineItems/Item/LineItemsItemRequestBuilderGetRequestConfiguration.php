<?php

namespace Salable\SDK\Api\LineItems\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LineItemsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LineItemsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LineItemsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LineItemsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LineItemsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LineItemsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LineItemsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return LineItemsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): LineItemsItemRequestBuilderGetQueryParameters {
        return new LineItemsItemRequestBuilderGetQueryParameters($expand);
    }

}
