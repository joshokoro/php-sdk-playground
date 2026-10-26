<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UpdateSubscriptionPlanLineItemSchema_proration extends Enum {
    public const ALWAYS_INVOICE = "always_invoice";
    public const CREATE_PRORATIONS = "create_prorations";
    public const NONE = "none";
}
