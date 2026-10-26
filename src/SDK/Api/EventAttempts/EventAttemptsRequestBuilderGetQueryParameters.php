<?php

namespace Salable\SDK\Api\EventAttempts;

/**
 * List Event Attempts
*/
class EventAttemptsRequestBuilderGetQueryParameters 
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
     * @var string|null $destinationId 
    */
    public ?string $destinationId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new EventAttemptsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $destinationId 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public function __construct(?string $after = null, ?string $before = null, ?string $destinationId = null, ?int $limit = null) {
        $this->after = $after;
        $this->before = $before;
        $this->destinationId = $destinationId;
        $this->limit = $limit;
    }

}
