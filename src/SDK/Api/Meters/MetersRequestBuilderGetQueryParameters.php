<?php

namespace Salable\SDK\Api\Meters;

/**
 * List Meters
*/
class MetersRequestBuilderGetQueryParameters 
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
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new MetersRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->search = $search;
    }

}
