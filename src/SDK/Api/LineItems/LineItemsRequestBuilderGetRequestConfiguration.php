<?php

namespace Salable\SDK\Api\LineItems;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LineItemsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LineItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LineItemsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LineItemsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LineItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LineItemsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LineItemsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $planId Returns only line items linked to this plan ID.
     * @param string|null $search 
     * @return LineItemsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $planId = null, ?string $search = null): LineItemsRequestBuilderGetQueryParameters {
        return new LineItemsRequestBuilderGetQueryParameters($after, $before, $limit, $planId, $search);
    }

}
