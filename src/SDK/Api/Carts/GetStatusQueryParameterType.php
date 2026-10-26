<?php

namespace Salable\SDK\Api\Carts;

use Microsoft\Kiota\Abstractions\Enum;

class GetStatusQueryParameterType extends Enum {
    public const ACTIVE = "active";
    public const ABANDONED = "abandoned";
    public const COMPLETE = "complete";
}
