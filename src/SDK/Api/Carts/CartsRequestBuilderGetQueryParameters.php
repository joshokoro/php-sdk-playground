<?php

namespace Salable\SDK\Api\Carts;

/**
 * Returns a list of active carts in reverse chronological order by creation date.
*/
class CartsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
    */
    public ?string $before = null;
    
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`.
    */
    public array $expand;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var array<string>|null $ownerId Filter by owner ID. Accepts a comma-separated list of owner IDs.
    */
    public ?array $ownerId = null;
    
    /**
     * @var string|null $search Search carts by ID.
    */
    public ?string $search = null;
    
    /**
     * @var array<GetStatusQueryParameterType> $status Filter by cart status. Accepts a comma-separated list. One of `active`, `abandoned`, `complete`.
    */
    public array $status;
    
    /**
     * Instantiates a new CartsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $ownerId Filter by owner ID. Accepts a comma-separated list of owner IDs.
     * @param string|null $search Search carts by ID.
     * @param array<GetStatusQueryParameterType>|null $status Filter by cart status. Accepts a comma-separated list. One of `active`, `abandoned`, `complete`.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?array $ownerId = null, ?string $search = null, ?array $status = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->ownerId = $ownerId;
        $this->search = $search;
        $this->status = $status?? [];
    }

}
