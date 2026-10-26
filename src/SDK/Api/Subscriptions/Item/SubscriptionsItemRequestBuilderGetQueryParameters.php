<?php

namespace Salable\SDK\Api\Subscriptions\Item;

/**
 * Retrieves the details of a subscription.
*/
class SubscriptionsItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`, `subscriptionPlans`.
    */
    public array $expand;
    
    /**
     * Instantiates a new SubscriptionsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`, `subscriptionPlans`.
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
