<?php

namespace Salable\SDK\Api\Webhooks;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebhooksRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebhooksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebhooksRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebhooksRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebhooksRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebhooksRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebhooksRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return WebhooksRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): WebhooksRequestBuilderGetQueryParameters {
        return new WebhooksRequestBuilderGetQueryParameters($expand);
    }

}
