<?php

namespace Salable\SDK\Api\Receipts\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const OWNER = "owner";
    public const RECEIPT_ITEMS = "receiptItems";
}
