<?php

namespace Salable\SDK\Api\Grantees;

/**
 * List Grantees
*/
class GranteesRequestBuilderGetQueryParameters 
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
     * @var string|null $groupId Returns only grantees belonging to this group ID.
    */
    public ?string $groupId = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new GranteesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $groupId Returns only grantees belonging to this group ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
    */
    public function __construct(?string $after = null, ?string $before = null, ?string $groupId = null, ?int $limit = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->groupId = $groupId;
        $this->limit = $limit;
        $this->search = $search;
    }

}
