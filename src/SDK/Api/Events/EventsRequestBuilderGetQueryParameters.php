<?php

namespace Salable\SDK\Api\Events;

/**
 * Response is sorted by createdAt in descending order.
*/
class EventsRequestBuilderGetQueryParameters 
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
     * @var array<GetTypesQueryParameterType> $types 
    */
    public array $types;
    
    /**
     * Instantiates a new EventsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<GetTypesQueryParameterType>|null $types 
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?array $types = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->types = $types?? [];
    }

}
