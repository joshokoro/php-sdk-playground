<?php

namespace Salable\SDK\Api\Ai\Messages;

/**
 * List AI Messages
*/
class MessagesRequestBuilderGetQueryParameters 
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
     * @var string|null $conversationId Returns only messages belonging to this conversation ID.
    */
    public ?string $conversationId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * Instantiates a new MessagesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $conversationId Returns only messages belonging to this conversation ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public function __construct(?string $after = null, ?string $before = null, ?string $conversationId = null, ?int $limit = null) {
        $this->after = $after;
        $this->before = $before;
        $this->conversationId = $conversationId;
        $this->limit = $limit;
    }

}
