<?php

namespace Salable\SDK\Api\Owners;

/**
 * List Owners
*/
class OwnersRequestBuilderGetQueryParameters 
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
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * @var string|null $stripeCustomerId 
    */
    public ?string $stripeCustomerId = null;
    
    /**
     * Instantiates a new OwnersRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
     * @param string|null $stripeCustomerId 
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $search = null, ?string $stripeCustomerId = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->search = $search;
        $this->stripeCustomerId = $stripeCustomerId;
    }

}
