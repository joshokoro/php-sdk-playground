<?php

namespace Salable\SDK\Api\Subscriptions\Item\AutoRenew;

use Microsoft\Kiota\Abstractions\Enum;

class PutStatusQueryParameterType extends Enum {
    public const ENABLE = "enable";
    public const DISABLE = "disable";
}
