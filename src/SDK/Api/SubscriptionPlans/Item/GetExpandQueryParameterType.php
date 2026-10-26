<?php

namespace Salable\SDK\Api\SubscriptionPlans\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const PLAN = "plan";
    public const SUBSCRIPTION = "subscription";
    public const SUBSCRIPTION_PLAN_LINE_ITEMS = "subscriptionPlanLineItems";
    public const OWNER = "owner";
    public const GROUP = "group";
}
