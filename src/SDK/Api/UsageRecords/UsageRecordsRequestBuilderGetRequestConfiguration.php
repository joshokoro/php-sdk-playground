<?php

namespace Salable\SDK\Api\UsageRecords;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UsageRecordsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UsageRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UsageRecordsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UsageRecordsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UsageRecordsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UsageRecordsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UsageRecordsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $meterSlug 
     * @param string|null $owner 
     * @param GetSortQueryParameterType|null $sort 
     * @param array<GetStatusQueryParameterType>|null $status 
     * @return UsageRecordsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $meterSlug = null, ?string $owner = null, ?GetSortQueryParameterType $sort = null, ?array $status = null): UsageRecordsRequestBuilderGetQueryParameters {
        return new UsageRecordsRequestBuilderGetQueryParameters($after, $before, $limit, $meterSlug, $owner, $sort, $status);
    }

}
