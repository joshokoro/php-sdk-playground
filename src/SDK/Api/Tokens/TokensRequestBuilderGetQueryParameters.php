<?php

namespace Salable\SDK\Api\Tokens;

/**
 * Returns a list of your tokens. The tokens are returned sorted by `createdAt`, with the most recently created tokens appearing first.
*/
class TokensRequestBuilderGetQueryParameters 
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
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $search Filter tokens by slug.
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new TokensRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search Filter tokens by slug.
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->search = $search;
    }

}
