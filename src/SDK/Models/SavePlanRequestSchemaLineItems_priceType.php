<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SavePlanRequestSchemaLineItems_priceType extends Enum {
    public const FLAT_RATE = "flat_rate";
    public const PER_SEAT = "per_seat";
    public const METERED = "metered";
}
