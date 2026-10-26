<?php

namespace Salable\SDK\Api\Destinations\Item;

/**
 * Retrieve Destination
*/
class DestinationsItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * Instantiates a new DestinationsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
