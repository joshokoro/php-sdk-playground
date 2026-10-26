<?php

namespace Salable\SDK\Api\Products\Item;

/**
 * Retrieves the details of an existing product.
*/
class ProductsItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `settings`, `plans`.
    */
    public array $expand;
    
    /**
     * Instantiates a new ProductsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `settings`, `plans`.
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
