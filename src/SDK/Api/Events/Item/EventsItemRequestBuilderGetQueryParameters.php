<?php

namespace Salable\SDK\Api\Events\Item;

/**
 * Retrieve Event
*/
class EventsItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * Instantiates a new EventsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
