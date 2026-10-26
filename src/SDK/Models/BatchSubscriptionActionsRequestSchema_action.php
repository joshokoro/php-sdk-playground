<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BatchSubscriptionActionsRequestSchema_action extends Enum {
    public const CANCEL = "cancel";
    public const ENABLE_AUTO_RENEW = "enable-auto-renew";
    public const DISABLE_AUTO_RENEW = "disable-auto-renew";
    public const DELETE = "delete";
}
