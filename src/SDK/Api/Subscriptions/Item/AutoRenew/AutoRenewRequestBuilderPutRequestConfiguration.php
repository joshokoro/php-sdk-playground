<?php

namespace Salable\SDK\Api\Subscriptions\Item\AutoRenew;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AutoRenewRequestBuilderPutRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AutoRenewRequestBuilderPutQueryParameters|null $queryParameters Request query parameters
    */
    public ?AutoRenewRequestBuilderPutQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AutoRenewRequestBuilderPutRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AutoRenewRequestBuilderPutQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AutoRenewRequestBuilderPutQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AutoRenewRequestBuilderPutQueryParameters.
     * @param PutStatusQueryParameterType|null $status Whether to enable or disable auto-renew. Use `enable` to resume renewal at period end, or `disable` to cancel at period end.
     * @return AutoRenewRequestBuilderPutQueryParameters
    */
    public static function createQueryParameters(?PutStatusQueryParameterType $status = null): AutoRenewRequestBuilderPutQueryParameters {
        return new AutoRenewRequestBuilderPutQueryParameters($status);
    }

}
