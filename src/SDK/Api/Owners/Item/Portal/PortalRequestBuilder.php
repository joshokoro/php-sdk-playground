<?php

namespace Salable\SDK\Api\Owners\Item\Portal;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Models\CreateOwnerPortalRequestSchema;
use Salable\SDK\Models\CreateOwnerPortalResponseSchema;
use Salable\SDK\Models\ErrorResponseBody;

/**
 * Builds and executes requests for operations under /api/owners/{id}/portal
*/
class PortalRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PortalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/owners/{id}/portal');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a Stripe billing portal session for the specified owner, returning a URL to redirect the customer to. The portal is scoped to the owner and shows all subscriptions belonging to that customer. The portal features available are configured per request.
     * @param CreateOwnerPortalRequestSchema $body The request body
     * @param PortalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateOwnerPortalResponseSchema|null>
     * @throws Exception
    */
    public function post(CreateOwnerPortalRequestSchema $body, ?PortalRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [CreateOwnerPortalResponseSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a Stripe billing portal session for the specified owner, returning a URL to redirect the customer to. The portal is scoped to the owner and shows all subscriptions belonging to that customer. The portal features available are configured per request.
     * @param CreateOwnerPortalRequestSchema $body The request body
     * @param PortalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateOwnerPortalRequestSchema $body, ?PortalRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
