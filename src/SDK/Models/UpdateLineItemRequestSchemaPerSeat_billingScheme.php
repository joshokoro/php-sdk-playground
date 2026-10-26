<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UpdateLineItemRequestSchemaPerSeat_billingScheme extends Enum {
    public const FIXED = "fixed";
    public const PER_UNIT = "per_unit";
    public const TIERED = "tiered";
    public const FLAT_RATE = "flat_rate";
}
