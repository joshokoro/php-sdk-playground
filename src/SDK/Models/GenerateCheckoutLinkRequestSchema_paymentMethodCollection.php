<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GenerateCheckoutLinkRequestSchema_paymentMethodCollection extends Enum {
    public const ALWAYS = "always";
    public const IF_REQUIRED = "if_required";
}
