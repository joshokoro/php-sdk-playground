<?php

namespace Salable\SDK\Api\SubscriptionPlans;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionPlansRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionPlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionPlansRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionPlansRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionPlansRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionPlansRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionPlansRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `subscriptionPlanLineItems`, `plan`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $owner Returns only subscription plans belonging to this owner.
     * @param array<string>|null $plans Accepts a comma-separated list of plan IDs. Returns subscription plans linked to any of the specified plan IDs.
     * @param GetStatusQueryParameterType|null $status Defaults to `active`.
     * @return SubscriptionPlansRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $owner = null, ?array $plans = null, ?GetStatusQueryParameterType $status = null): SubscriptionPlansRequestBuilderGetQueryParameters {
        return new SubscriptionPlansRequestBuilderGetQueryParameters($after, $before, $expand, $limit, $owner, $plans, $status);
    }

}
