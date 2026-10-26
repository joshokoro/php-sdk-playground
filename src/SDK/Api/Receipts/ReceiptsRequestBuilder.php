<?php

namespace Salable\SDK\Api\Receipts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Salable\SDK\Api\Receipts\Batch\BatchRequestBuilder;
use Salable\SDK\Api\Receipts\Item\ReceiptsItemRequestBuilder;
use Salable\SDK\Models\ErrorResponseBody;
use Salable\SDK\Models\GetReceiptListSchema;

/**
 * Builds and executes requests for operations under /api/receipts
*/
class ReceiptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The batch property
    */
    public function batch(): BatchRequestBuilder {
        return new BatchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Salable/SDK.api.receipts.item collection
     * @param string $id Resource ID
     * @return ReceiptsItemRequestBuilder
    */
    public function byId(string $id): ReceiptsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new ReceiptsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReceiptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/receipts{?after*,before*,expand,limit*,lineItems,owner,search*,sort*,subscriptionId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List Receipts
     * @param ReceiptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetReceiptListSchema|null>
     * @throws Exception
    */
    public function get(?ReceiptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
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
        return $this->requestAdapter->sendAsync($requestInfo, [GetReceiptListSchema::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List Receipts
     * @param ReceiptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReceiptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReceiptsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReceiptsRequestBuilder {
        return new ReceiptsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
