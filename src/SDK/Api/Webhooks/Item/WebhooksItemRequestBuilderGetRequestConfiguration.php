<?php

namespace Salable\SDK\Api\Webhooks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebhooksItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WebhooksItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebhooksItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WebhooksItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WebhooksItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WebhooksItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WebhooksItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return WebhooksItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): WebhooksItemRequestBuilderGetQueryParameters {
        return new WebhooksItemRequestBuilderGetQueryParameters($expand);
    }

}
