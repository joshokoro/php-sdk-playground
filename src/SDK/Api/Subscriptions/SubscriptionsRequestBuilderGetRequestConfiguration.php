<?php

namespace Salable\SDK\Api\Subscriptions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsRequestBuilderGetQueryParameters.
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
     * @return SubscriptionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?string $id = null, ?int $limit = null, ?string $owner = null, ?array $plans = null, ?string $priceId = null, ?array $products = null, ?string $search = null, ?string $sort = null, ?string $status = null, ?string $stripePriceId = null): SubscriptionsRequestBuilderGetQueryParameters {
        return new SubscriptionsRequestBuilderGetQueryParameters($after, $before, $expand, $id, $limit, $owner, $plans, $priceId, $products, $search, $sort, $status, $stripePriceId);
    }

}
