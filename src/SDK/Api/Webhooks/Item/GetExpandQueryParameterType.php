<?php

namespace Salable\SDK\Api\Webhooks\Item;

use Microsoft\Kiota\Abstractions\Enum;

class GetExpandQueryParameterType extends Enum {
    public const EVENT_TYPES = "eventTypes";
    public const DESTINATIONS = "destinations";
}
