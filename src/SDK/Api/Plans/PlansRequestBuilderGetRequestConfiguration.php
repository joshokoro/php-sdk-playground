<?php

namespace Salable\SDK\Api\Plans;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlansRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlansRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlansRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlansRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlansRequestBuilderGetQueryParameters.
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
     * @return PlansRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?GetCurrencyQueryParameterType $currency = null, ?array $expand = null, ?bool $includeArchived = null, ?GetIncludeFilterOptionsQueryParameterType $includeFilterOptions = null, ?GetIntervalQueryParameterType $interval = null, ?string $intervalCount = null, ?string $isActive = null, ?int $limit = null, ?array $productId = null, ?string $search = null): PlansRequestBuilderGetQueryParameters {
        return new PlansRequestBuilderGetQueryParameters($after, $before, $currency, $expand, $includeArchived, $includeFilterOptions, $interval, $intervalCount, $isActive, $limit, $productId, $search);
    }

}
