<?php

namespace Salable\SDK\Api\Stripe;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Salable\SDK\Api\Stripe\AccountSession\AccountSessionRequestBuilder;

/**
 * Builds and executes requests for operations under /api/stripe
*/
class StripeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The accountSession property
    */
    public function accountSession(): AccountSessionRequestBuilder {
        return new AccountSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new StripeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/stripe');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
