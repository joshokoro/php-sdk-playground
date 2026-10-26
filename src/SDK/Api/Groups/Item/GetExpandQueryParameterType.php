<?php

namespace Salable\SDK\Api\Groups\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const OWNER = "owner";
    public const MEMBERSHIPS = "memberships";
    public const SUBSCRIPTION_PLANS = "subscriptionPlans";
}
