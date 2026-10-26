<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Post_interval extends Enum {
    public const DAY = "day";
    public const WEEK = "week";
    public const MONTH = "month";
    public const YEAR = "year";
}
