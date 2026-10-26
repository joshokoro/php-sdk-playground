<?php

namespace Salable\SDK\Api\TierTags;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Models\CreateTierTagRequestSchema;
use Salable\SDK\Models\CreateTierTagSchema;
use Salable\SDK\Models\ErrorResponseBody;
use Salable\SDK\Models\GetTierTagsListSchema;

/**
 * Builds and executes requests for operations under /api/tier-tags
*/
class TierTagsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TierTagsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/tier-tags{?after*,before*,limit*,search*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List Tier Tags
     * @param TierTagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetTierTagsListSchema|null>
     * @throws Exception
    */
    public function get(?TierTagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '401' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '405' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '429' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponseBody::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetTierTagsListSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new tier tag
     * @param CreateTierTagRequestSchema $body The request body
     * @param TierTagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateTierTagSchema|null>
     * @throws Exception
    */
    public function post(CreateTierTagRequestSchema $body, ?TierTagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [CreateTierTagSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List Tier Tags
     * @param TierTagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TierTagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new tier tag
     * @param CreateTierTagRequestSchema $body The request body
     * @param TierTagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateTierTagRequestSchema $body, ?TierTagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TierTagsRequestBuilder
    */
    public function withUrl(string $rawUrl): TierTagsRequestBuilder {
        return new TierTagsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
