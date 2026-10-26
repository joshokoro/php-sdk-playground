<?php

namespace Salable\SDK\Api\Subscriptions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SubscriptionsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SubscriptionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SubscriptionsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SubscriptionsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SubscriptionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SubscriptionsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SubscriptionsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`, `subscriptionPlans`.
     * @return SubscriptionsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): SubscriptionsItemRequestBuilderGetQueryParameters {
        return new SubscriptionsItemRequestBuilderGetQueryParameters($expand);
    }

}
