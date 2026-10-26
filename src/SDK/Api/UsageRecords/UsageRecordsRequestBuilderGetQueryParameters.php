<?php

namespace Salable\SDK\Api\UsageRecords;

/**
 * Response is sorted by createdAt in ascending order. The pagination is cursor based.
*/
class UsageRecordsRequestBuilderGetQueryParameters 
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
     * @var string|null $meterSlug 
    */
    public ?string $meterSlug = null;
    
    /**
     * @var string|null $owner 
    */
    public ?string $owner = null;
    
    /**
     * @var GetSortQueryParameterType|null $sort 
    */
    public ?GetSortQueryParameterType $sort = null;
    
    /**
     * @var array<GetStatusQueryParameterType> $status 
    */
    public array $status;
    
    /**
     * Instantiates a new UsageRecordsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $meterSlug 
     * @param string|null $owner 
     * @param GetSortQueryParameterType|null $sort 
     * @param array<GetStatusQueryParameterType>|null $status 
    */
    public function __construct(?string $after = null, ?string $before = null, ?int $limit = null, ?string $meterSlug = null, ?string $owner = null, ?GetSortQueryParameterType $sort = null, ?array $status = null) {
        $this->after = $after;
        $this->before = $before;
        $this->limit = $limit;
        $this->meterSlug = $meterSlug;
        $this->owner = $owner;
        $this->sort = $sort;
        $this->status = $status?? [];
    }

}
