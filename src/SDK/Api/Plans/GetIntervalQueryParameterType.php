<?php

namespace Salable\SDK\Api\Plans;

use Microsoft\Kiota\Abstractions\Enum;

class GetIntervalQueryParameterType extends Enum {
    public const DAY = "day";
    public const WEEK = "week";
    public const MONTH = "month";
    public const YEAR = "year";
    public const ONE_OFF = "one_off";
}
