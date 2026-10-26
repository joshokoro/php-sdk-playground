<?php

namespace Salable\SDK\Api\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const OWNER = "owner";
    public const SUBSCRIPTION_PLANS = "subscriptionPlans";
}
