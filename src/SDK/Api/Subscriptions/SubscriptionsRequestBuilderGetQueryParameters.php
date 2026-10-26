<?php

namespace Salable\SDK\Api\Subscriptions;

/**
 * Returns a list of your subscriptions. The subscriptions are returned sorted by creation date, with the most recently created subscriptions appearing first.
*/
class SubscriptionsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
    */
    public ?string $after = null;
    
    /**
     * @var string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
    */
    public ?string $before = null;
    
    /**
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`, `subscriptionPlans`.
    */
    public array $expand;
    
    /**
     * @var string|null $id Returns only the subscription with this exact ID.
    */
    public ?string $id = null;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $owner Returns only subscriptions belonging to this owner.
    */
    public ?string $owner = null;
    
    /**
     * @var array<string>|null $plans Accepts a comma-separated list of plan IDs. Returns subscriptions that include any of the specified plan IDs.
    */
    public ?array $plans = null;
    
    /**
     * @var string|null $priceId Returns subscriptions that include a subscription plan line item linked to this price ID.
    */
    public ?string $priceId = null;
    
    /**
     * @var array<string>|null $products Accepts a comma-separated list of product IDs. Returns subscriptions that include a plan belonging to any of the specified product IDs.
    */
    public ?array $products = null;
    
    /**
     * @var string|null $search Search across subscription IDs, Stripe subscription IDs, owner values, plan IDs, plan names, product IDs, product names, price IDs, and Stripe price IDs.
    */
    public ?string $search = null;
    
    /**
     * @var string|null $sort Sort results by a field and direction. Format: `field:direction` (eg `createdAt:asc`).
    */
    public ?string $sort = null;
    
    /**
     * @var string|null $status Accepts a comma-separated list of statuses (eg `active,canceled`).
    */
    public ?string $status = null;
    
    /**
     * @var string|null $stripePriceId Returns subscriptions that include a subscription plan line item with this Stripe price ID.
    */
    public ?string $stripePriceId = null;
    
    /**
     * Instantiates a new SubscriptionsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`, `subscriptionPlans`.
     * @param string|null $id Returns only the subscription with this exact ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $owner Returns only subscriptions belonging to this owner.
     * @param array<string>|null $plans Accepts a comma-separated list of plan IDs. Returns subscriptions that include any of the specified plan IDs.
     * @param string|null $priceId Returns subscriptions that include a subscription plan line item linked to this price ID.
     * @param array<string>|null $products Accepts a comma-separated list of product IDs. Returns subscriptions that include a plan belonging to any of the specified product IDs.
     * @param string|null $search Search across subscription IDs, Stripe subscription IDs, owner values, plan IDs, plan names, product IDs, product names, price IDs, and Stripe price IDs.
     * @param string|null $sort Sort results by a field and direction. Format: `field:direction` (eg `createdAt:asc`).
     * @param string|null $status Accepts a comma-separated list of statuses (eg `active,canceled`).
     * @param string|null $stripePriceId Returns subscriptions that include a subscription plan line item with this Stripe price ID.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?string $id = null, ?int $limit = null, ?string $owner = null, ?array $plans = null, ?string $priceId = null, ?array $products = null, ?string $search = null, ?string $sort = null, ?string $status = null, ?string $stripePriceId = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->id = $id;
        $this->limit = $limit;
        $this->owner = $owner;
        $this->plans = $plans;
        $this->priceId = $priceId;
        $this->products = $products;
        $this->search = $search;
        $this->sort = $sort;
        $this->status = $status;
        $this->stripePriceId = $stripePriceId;
    }

}
