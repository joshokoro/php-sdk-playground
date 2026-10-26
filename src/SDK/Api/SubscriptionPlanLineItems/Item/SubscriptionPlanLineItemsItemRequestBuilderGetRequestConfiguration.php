<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionPlanLineItemsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionPlanLineItemsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `lineItem`, `subscriptionPlan`.
     * @return SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters {
        return new SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters($expand);
    }

}
