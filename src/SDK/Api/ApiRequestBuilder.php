<?php

namespace Salable\SDK\Api;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Salable\SDK\Api\Ai\AiRequestBuilder;
use Salable\SDK\Api\ApiKeys\ApiKeysRequestBuilder;
use Salable\SDK\Api\CartItems\CartItemsRequestBuilder;
use Salable\SDK\Api\Carts\CartsRequestBuilder;
use Salable\SDK\Api\Checkout\CheckoutRequestBuilder;
use Salable\SDK\Api\CurrencyOptions\CurrencyOptionsRequestBuilder;
use Salable\SDK\Api\Destinations\DestinationsRequestBuilder;
use Salable\SDK\Api\Entitlements\EntitlementsRequestBuilder;
use Salable\SDK\Api\EventAttempts\EventAttemptsRequestBuilder;
use Salable\SDK\Api\Events\EventsRequestBuilder;
use Salable\SDK\Api\Grantees\GranteesRequestBuilder;
use Salable\SDK\Api\Groups\GroupsRequestBuilder;
use Salable\SDK\Api\LineItems\LineItemsRequestBuilder;
use Salable\SDK\Api\Memberships\MembershipsRequestBuilder;
use Salable\SDK\Api\Meters\MetersRequestBuilder;
use Salable\SDK\Api\Owners\OwnersRequestBuilder;
use Salable\SDK\Api\PaymentIntegrations\PaymentIntegrationsRequestBuilder;
use Salable\SDK\Api\Plans\PlansRequestBuilder;
use Salable\SDK\Api\Prices\PricesRequestBuilder;
use Salable\SDK\Api\Products\ProductsRequestBuilder;
use Salable\SDK\Api\Receipts\ReceiptsRequestBuilder;
use Salable\SDK\Api\SigningKeys\SigningKeysRequestBuilder;
use Salable\SDK\Api\Stripe\StripeRequestBuilder;
use Salable\SDK\Api\SubscriptionPlanLineItems\SubscriptionPlanLineItemsRequestBuilder;
use Salable\SDK\Api\SubscriptionPlans\SubscriptionPlansRequestBuilder;
use Salable\SDK\Api\Subscriptions\SubscriptionsRequestBuilder;
use Salable\SDK\Api\Tiers\TiersRequestBuilder;
use Salable\SDK\Api\TierTags\TierTagsRequestBuilder;
use Salable\SDK\Api\Tokens\TokensRequestBuilder;
use Salable\SDK\Api\Usage\UsageRequestBuilder;
use Salable\SDK\Api\UsageRecords\UsageRecordsRequestBuilder;
use Salable\SDK\Api\Webhooks\WebhooksRequestBuilder;

/**
 * Builds and executes requests for operations under /api
*/
class ApiRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The ai property
    */
    public function ai(): AiRequestBuilder {
        return new AiRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The apiKeys property
    */
    public function apiKeys(): ApiKeysRequestBuilder {
        return new ApiKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cartItems property
    */
    public function cartItems(): CartItemsRequestBuilder {
        return new CartItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The carts property
    */
    public function carts(): CartsRequestBuilder {
        return new CartsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkout property
    */
    public function checkout(): CheckoutRequestBuilder {
        return new CheckoutRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The currencyOptions property
    */
    public function currencyOptions(): CurrencyOptionsRequestBuilder {
        return new CurrencyOptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The destinations property
    */
    public function destinations(): DestinationsRequestBuilder {
        return new DestinationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The entitlements property
    */
    public function entitlements(): EntitlementsRequestBuilder {
        return new EntitlementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The eventAttempts property
    */
    public function eventAttempts(): EventAttemptsRequestBuilder {
        return new EventAttemptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The grantees property
    */
    public function grantees(): GranteesRequestBuilder {
        return new GranteesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The groups property
    */
    public function groups(): GroupsRequestBuilder {
        return new GroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lineItems property
    */
    public function lineItems(): LineItemsRequestBuilder {
        return new LineItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberships property
    */
    public function memberships(): MembershipsRequestBuilder {
        return new MembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The meters property
    */
    public function meters(): MetersRequestBuilder {
        return new MetersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentIntegrations property
    */
    public function paymentIntegrations(): PaymentIntegrationsRequestBuilder {
        return new PaymentIntegrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The plans property
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The prices property
    */
    public function prices(): PricesRequestBuilder {
        return new PricesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The products property
    */
    public function products(): ProductsRequestBuilder {
        return new ProductsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The receipts property
    */
    public function receipts(): ReceiptsRequestBuilder {
        return new ReceiptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The signingKeys property
    */
    public function signingKeys(): SigningKeysRequestBuilder {
        return new SigningKeysRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The stripe property
    */
    public function stripe(): StripeRequestBuilder {
        return new StripeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriptionPlanLineItems property
    */
    public function subscriptionPlanLineItems(): SubscriptionPlanLineItemsRequestBuilder {
        return new SubscriptionPlanLineItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriptionPlans property
    */
    public function subscriptionPlans(): SubscriptionPlansRequestBuilder {
        return new SubscriptionPlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The subscriptions property
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tiers property
    */
    public function tiers(): TiersRequestBuilder {
        return new TiersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tierTags property
    */
    public function tierTags(): TierTagsRequestBuilder {
        return new TierTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokens property
    */
    public function tokens(): TokensRequestBuilder {
        return new TokensRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The usage property
    */
    public function usage(): UsageRequestBuilder {
        return new UsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The usageRecords property
    */
    public function usageRecords(): UsageRecordsRequestBuilder {
        return new UsageRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The webhooks property
    */
    public function webhooks(): WebhooksRequestBuilder {
        return new WebhooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ApiRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/api');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
