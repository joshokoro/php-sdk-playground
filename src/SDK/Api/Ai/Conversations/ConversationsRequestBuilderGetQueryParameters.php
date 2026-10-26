<?php

namespace Salable\SDK\Api\Ai\Conversations;

/**
 * List AI Conversations
*/
class ConversationsRequestBuilderGetQueryParameters 
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
     * Instantiates a new ConversationsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
    }

}
