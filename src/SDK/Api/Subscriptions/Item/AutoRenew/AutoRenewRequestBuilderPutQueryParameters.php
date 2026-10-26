<?php

namespace Salable\SDK\Api\Subscriptions\Item\AutoRenew;

/**
 * Enables or disables auto-renew for a subscription. Disabling auto-renew will cancel the subscription at the end of the current billing period. Does not apply to perpetual subscriptions.
*/
class AutoRenewRequestBuilderPutQueryParameters 
{
    /**
     * @var PutStatusQueryParameterType|null $status Whether to enable or disable auto-renew. Use `enable` to resume renewal at period end, or `disable` to cancel at period end.
    */
    public ?PutStatusQueryParameterType $status = null;
    
    /**
     * Instantiates a new AutoRenewRequestBuilderPutQueryParameters and sets the default values.
     * @param PutStatusQueryParameterType|null $status Whether to enable or disable auto-renew. Use `enable` to resume renewal at period end, or `disable` to cancel at period end.
    */
    public function __construct(?PutStatusQueryParameterType $status = null) {
        $this->status = $status;
    }

}
