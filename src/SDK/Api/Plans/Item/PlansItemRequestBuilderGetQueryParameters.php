<?php

namespace Salable\SDK\Api\Plans\Item;

/**
 * Retrieve Plan
*/
class PlansItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * @var bool|null $includeArchived 
    */
    public ?bool $includeArchived = null;
    
    /**
     * Instantiates a new PlansItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param bool|null $includeArchived 
    */
    public function __construct(?array $expand = null, ?bool $includeArchived = null) {
        $this->expand = $expand?? [];
        $this->includeArchived = $includeArchived;
    }

}
