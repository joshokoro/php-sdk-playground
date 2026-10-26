<?php

namespace Salable\SDK\Api\LineItems;

/**
 * List Line Items
*/
class LineItemsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after 
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before 
    */
    public ?string $before = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $planId Returns only line items linked to this plan ID.
    */
    public ?string $planId = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new LineItemsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $planId Returns only line items linked to this plan ID.
     * @param string|null $search 
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $planId = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->planId = $planId;
        $this->search = $search;
    }

}
