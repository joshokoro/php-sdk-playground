<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems\Item;

/**
 * Retrieves the details of a subscription plan line item.
*/
class SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `lineItem`, `subscriptionPlan`.
    */
    public array $expand;
    
    /**
     * Instantiates a new SubscriptionPlanLineItemsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `lineItem`, `subscriptionPlan`.
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
