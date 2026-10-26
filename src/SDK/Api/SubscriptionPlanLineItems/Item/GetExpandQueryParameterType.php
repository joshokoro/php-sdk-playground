<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const LINE_ITEM = "lineItem";
    public const SUBSCRIPTION_PLAN = "subscriptionPlan";
}
