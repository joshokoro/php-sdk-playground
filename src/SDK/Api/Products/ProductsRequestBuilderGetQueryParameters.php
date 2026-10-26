<?php

namespace Salable\SDK\Api\Products;

/**
 * Returns a list of your products. The products are returned sorted by `createdAt`, with the most recently created products appearing first.
*/
class ProductsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
    */
    public ?string $before = null;
    
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `plans`, `settings`.
    */
    public array $expand;
    
    /**
     * @var bool|null $includeArchived When set to `true`, includes archived products in the results. Defaults to `false`.
    */
    public ?bool $includeArchived = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $search Filter products by name.
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new ProductsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `plans`, `settings`.
     * @param bool|null $includeArchived When set to `true`, includes archived products in the results. Defaults to `false`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search Filter products by name.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?bool $includeArchived = null, ?int $limit = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->includeArchived = $includeArchived;
        $this->limit = $limit;
        $this->search = $search;
    }

}
