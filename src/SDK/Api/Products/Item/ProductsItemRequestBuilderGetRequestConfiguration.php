<?php

namespace Salable\SDK\Api\Products\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProductsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProductsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProductsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProductsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProductsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProductsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProductsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `settings`, `plans`.
     * @return ProductsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): ProductsItemRequestBuilderGetQueryParameters {
        return new ProductsItemRequestBuilderGetQueryParameters($expand);
    }

}
