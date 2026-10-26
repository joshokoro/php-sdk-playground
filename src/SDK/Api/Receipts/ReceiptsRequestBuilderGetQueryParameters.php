<?php

namespace Salable\SDK\Api\Receipts;

/**
 * List Receipts
*/
class ReceiptsRequestBuilderGetQueryParameters 
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
     * @var array<string>|null $lineItems 
    */
    public ?array $lineItems = null;
    
    /**
     * @var array<string>|null $owner 
    */
    public ?array $owner = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * @var string|null $sort 
    */
    public ?string $sort = null;
    
    /**
     * @var string|null $subscriptionId Returns only receipts linked to this subscription ID.
    */
    public ?string $subscriptionId = null;
    
    /**
     * Instantiates a new ReceiptsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $lineItems 
     * @param array<string>|null $owner 
     * @param string|null $search 
     * @param string|null $sort 
     * @param string|null $subscriptionId Returns only receipts linked to this subscription ID.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?array $lineItems = null, ?array $owner = null, ?string $search = null, ?string $sort = null, ?string $subscriptionId = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->lineItems = $lineItems;
        $this->owner = $owner;
        $this->search = $search;
        $this->sort = $sort;
        $this->subscriptionId = $subscriptionId;
    }

}
