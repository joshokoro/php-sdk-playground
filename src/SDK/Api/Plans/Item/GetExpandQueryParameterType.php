<?php

namespace Salable\SDK\Api\Plans\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const ENTITLEMENTS = "entitlements";
    public const LINE_ITEMS = "lineItems";
    public const PRODUCT = "product";
    public const SUBSCRIPTION_PLANS = "subscriptionPlans";
    public const TIER_TAG = "tierTag";
}
