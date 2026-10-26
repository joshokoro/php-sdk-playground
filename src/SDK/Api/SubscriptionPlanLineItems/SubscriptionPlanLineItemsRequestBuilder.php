<?php

namespace Salable\SDK\Api\SubscriptionPlanLineItems;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Salable\SDK\Api\SubscriptionPlanLineItems\Item\SubscriptionPlanLineItemsItemRequestBuilder;

/**
 * Builds and executes requests for operations under /api/subscription-plan-line-items
*/
class SubscriptionPlanLineItemsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Salable/SDK.api.subscriptionPlanLineItems.item collection
     * @param string $id Resource ID
     * @return SubscriptionPlanLineItemsItemRequestBuilder
    */
    public function byId(string $id): SubscriptionPlanLineItemsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new SubscriptionPlanLineItemsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubscriptionPlanLineItemsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/subscription-plan-line-items');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
