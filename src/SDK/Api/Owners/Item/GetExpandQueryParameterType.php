<?php

namespace Salable\SDK\Api\Owners\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const CARTS = "carts";
    public const SUBSCRIPTIONS = "subscriptions";
    public const GROUPS = "groups";
    public const RECEIPTS = "receipts";
}
