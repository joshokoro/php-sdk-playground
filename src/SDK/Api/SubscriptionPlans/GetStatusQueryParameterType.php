<?php

namespace Salable\SDK\Api\SubscriptionPlans;

use Microsoft\Kiota\Abstractions\Enum;

class GetStatusQueryParameterType extends Enum {
    public const ACTIVE = "active";
    public const INACTIVE = "inactive";
}
