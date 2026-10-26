<?php

namespace Salable\SDK\Api\SubscriptionPlans;

/**
 * Returns a list of subscription plans. Each subscription plan represents a plan that a subscription is currently enrolled in. Subscription plans are returned sorted by creation date, with the most recently created appearing first.
*/
class SubscriptionPlansRequestBuilderGetQueryParameters 
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
     * @var array<GetExpandQueryParameterType> $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `subscriptionPlanLineItems`, `plan`.
    */
    public array $expand;
    
    /**
     * @var int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
    */
    public ?int $limit = null;
    
    /**
     * @var string|null $owner Returns only subscription plans belonging to this owner.
    */
    public ?string $owner = null;
    
    /**
     * @var array<string>|null $plans Accepts a comma-separated list of plan IDs. Returns subscription plans linked to any of the specified plan IDs.
    */
    public ?array $plans = null;
    
    /**
     * @var GetStatusQueryParameterType|null $status Defaults to `active`.
    */
    public ?GetStatusQueryParameterType $status = null;
    
    /**
     * Instantiates a new SubscriptionPlansRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `subscriptionPlanLineItems`, `plan`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $owner Returns only subscription plans belonging to this owner.
     * @param array<string>|null $plans Accepts a comma-separated list of plan IDs. Returns subscription plans linked to any of the specified plan IDs.
     * @param GetStatusQueryParameterType|null $status Defaults to `active`.
    */
    public function __construct(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $owner = null, ?array $plans = null, ?GetStatusQueryParameterType $status = null) {
        $this->after = $after;
        $this->before = $before;
        $this->expand = $expand?? [];
        $this->limit = $limit;
        $this->owner = $owner;
        $this->plans = $plans;
        $this->status = $status;
    }

}
