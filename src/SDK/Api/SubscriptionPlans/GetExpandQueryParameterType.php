<?php

namespace Salable\SDK\Api\SubscriptionPlans;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const SUBSCRIPTION_PLAN_LINE_ITEMS = "subscriptionPlanLineItems";
    public const PLAN = "plan";
}
