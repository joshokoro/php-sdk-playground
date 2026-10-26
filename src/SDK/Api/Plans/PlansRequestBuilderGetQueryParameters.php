<?php

namespace Salable\SDK\Api\Plans;

/**
 * List Plans
*/
class PlansRequestBuilderGetQueryParameters 
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
     * @var GetCurrencyQueryParameterType|null $currency 
    */
    public ?GetCurrencyQueryParameterType $currency = null;
    
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * @var bool|null $includeArchived 
    */
    public ?bool $includeArchived = null;
    
    /**
     * @var GetIncludeFilterOptionsQueryParameterType|null $includeFilterOptions 
    */
    public ?GetIncludeFilterOptionsQueryParameterType $includeFilterOptions = null;
    
    /**
     * @var GetIntervalQueryParameterType|null $interval 
    */
    public ?GetIntervalQueryParameterType $interval = null;
    
    /**
     * @var string|null $intervalCount 
    */
    public ?string $intervalCount = null;
    
    /**
     * @var string|null $isActive 
    */
    public ?string $isActive = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var array<string>|null $productId Accepts a comma-separated list of product IDs. Returns plans belonging to any of the specified product IDs.
    */
    public ?array $productId = null;
    
    /**
     * @var string|null $search 
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new PlansRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param GetCurrencyQueryParameterType|null $currency 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param bool|null $includeArchived 
     * @param GetIncludeFilterOptionsQueryParameterType|null $includeFilterOptions 
     * @param GetIntervalQueryParameterType|null $interval 
     * @param string|null $intervalCount 
     * @param string|null $isActive 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $productId Accepts a comma-separated list of product IDs. Returns plans belonging to any of the specified product IDs.
     * @param string|null $search 
    */
    public function __construct(?string $after = null, ?string $before = null, ?GetCurrencyQueryParameterType $currency = null, ?array $expand = null, ?bool $includeArchived = null, ?GetIncludeFilterOptionsQueryParameterType $includeFilterOptions = null, ?GetIntervalQueryParameterType $interval = null, ?string $intervalCount = null, ?string $isActive = null, ?int $limit = null, ?array $productId = null, ?string $search = null) {
        $this->after = $after;
        $this->before = $before;
        $this->currency = $currency;
        $this->expand = $expand?? [];
        $this->includeArchived = $includeArchived;
        $this->includeFilterOptions = $includeFilterOptions;
        $this->interval = $interval;
        $this->intervalCount = $intervalCount;
        $this->isActive = $isActive;
        $this->limit = $limit;
        $this->productId = $productId;
        $this->search = $search;
    }

}
