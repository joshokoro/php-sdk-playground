<?php

namespace Salable\SDK\Api\Subscriptions\Item\Portal;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Models\CreateSubscriptionPortalRequestSchema;
use Salable\SDK\Models\CreateSubscriptionPortalResponseSchema;
use Salable\SDK\Models\ErrorResponseBody;

/**
 * Builds and executes requests for operations under /api/subscriptions/{id}/portal
*/
class PortalRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PortalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/subscriptions/{id}/portal');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * **Deprecated — use [POST /api/owners/{id}/portal](#tag/owners/POST/api/owners/{id}/portal) instead.**Creates a Stripe billing portal session for the specified subscription, returning a URL to redirect the customer to. The portal features available are configured per request.
     * @param CreateSubscriptionPortalRequestSchema $body The request body
     * @param PortalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateSubscriptionPortalResponseSchema|null>
     * @throws Exception
    */
    public function post(CreateSubscriptionPortalRequestSchema $body, ?PortalRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '401' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '405' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '429' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateSubscriptionPortalResponseSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * **Deprecated — use [POST /api/owners/{id}/portal](#tag/owners/POST/api/owners/{id}/portal) instead.**Creates a Stripe billing portal session for the specified subscription, returning a URL to redirect the customer to. The portal features available are configured per request.
     * @param CreateSubscriptionPortalRequestSchema $body The request body
     * @param PortalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateSubscriptionPortalRequestSchema $body, ?PortalRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PortalRequestBuilder
    */
    public function withUrl(string $rawUrl): PortalRequestBuilder {
        return new PortalRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
