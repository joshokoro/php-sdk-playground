<?php

namespace Salable\SDK\Api\Events;

use Microsoft\Kiota\Abstractions\Enum;

class GetTypesQueryParameterType extends Enum {
    public const SUBSCRIPTION_CREATED = "subscription_created";
    public const SUBSCRIPTION_UPDATED = "subscription_updated";
    public const SUBSCRIPTION_CANCELLED = "subscription_cancelled";
    public const USAGE_FINALISED = "usage_finalised";
    public const USAGE_RECORDED = "usage_recorded";
    public const RECEIPT_CREATED = "receipt_created";
    public const OWNER_UPDATED = "owner_updated";
    public const PING = "ping";
}
