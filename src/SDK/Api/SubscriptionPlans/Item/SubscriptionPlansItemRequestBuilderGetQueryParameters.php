<?php

namespace Salable\SDK\Api\SubscriptionPlans\Item;

/**
 * Retrieves the details of an existing subscription plan.
*/
class SubscriptionPlansItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `plan`, `subscription`, `subscriptionPlanLineItems`, `owner`, `group`.
    */
    public array $expand;
    
    /**
     * Instantiates a new SubscriptionPlansItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `plan`, `subscription`, `subscriptionPlanLineItems`, `owner`, `group`.
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
