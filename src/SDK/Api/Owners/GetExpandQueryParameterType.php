<?php

namespace Salable\SDK\Api\Owners;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const SUBSCRIPTIONS = "subscriptions";
    public const RECEIPTS = "receipts";
}
