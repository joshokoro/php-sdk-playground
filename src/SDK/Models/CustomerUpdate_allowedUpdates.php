<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomerUpdate_allowedUpdates extends Enum {
    public const NAME = "name";
    public const EMAIL = "email";
    public const ADDRESS = "address";
    public const PHONE = "phone";
    public const SHIPPING = "shipping";
}
