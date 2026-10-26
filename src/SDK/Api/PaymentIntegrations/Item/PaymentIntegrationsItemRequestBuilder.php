<?php

namespace Salable\SDK\Api\PaymentIntegrations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Salable\SDK\Api\PaymentIntegrations\Item\Onboarding\OnboardingRequestBuilder;

/**
 * Builds and executes requests for operations under /api/payment-integrations/{id}
*/
class PaymentIntegrationsItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The onboarding property
    */
    public function onboarding(): OnboardingRequestBuilder {
        return new OnboardingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PaymentIntegrationsItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api/payment-integrations/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
