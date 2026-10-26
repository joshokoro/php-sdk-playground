<?php

namespace Salable\SDK\Api\UsageRecords;

use Microsoft\Kiota\Abstractions\Enum;

class GetStatusQueryParameterType extends Enum {
    public const RECORDED = "recorded";
    public const CURRENT = "current";
    public const FINAL = "final";
}
