<?php

namespace Salable\SDK\Api\Owners\Item;

/**
 * Retrieve Owner
*/
class OwnersItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * Instantiates a new OwnersItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
