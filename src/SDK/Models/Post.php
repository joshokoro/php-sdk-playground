<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Post implements Parsable 
{
    /**
     * @var bool|null $allowPromoCodes Whether to allow customers to enter promotional codes during checkout. Defaults to product setting if not specified.
    */
    private ?bool $allowPromoCodes = null;
    
    /**
     * @var bool|null $automaticTax Whether to enable automatic tax calculation based on customer location. Defaults to product setting if not specified.
    */
    private ?bool $automaticTax = null;
    
    /**
     * @var string|null $cancelUrl The URL to redirect the customer to if they cancel the checkout. If not provided, falls back to the product default setting, then the Salable-hosted cancel page.
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var Post_cardPrefillPreference|null $cardPrefillPreference Controls how saved payment methods are handled. Options: "always" (always save), "choice" (customer chooses), "none" (never save). Defaults to product setting if not specified.
    */
    private ?Post_cardPrefillPreference $cardPrefillPreference = null;
    
    /**
     * @var bool|null $collectBillingAddress Whether to collect the customer billing address during checkout. Defaults to product setting if not specified.
    */
    private ?bool $collectBillingAddress = null;
    
    /**
     * @var bool|null $collectShippingAddress Whether to collect the customer shipping address during checkout. Defaults to product setting if not specified.
    */
    private ?bool $collectShippingAddress = null;
    
    /**
     * @var Post_currency|null $currency The case-insensitive three-letter ISO 4217 currency code (e.g., USD, GBP, EUR). Input is normalized to canonical uppercase. If not provided the checkout will use geolocation. For geolocation to work all line item prices on the plan must have the same default currency.
    */
    private ?Post_currency $currency = null;
    
    /**
     * @var array<PostDiscounts>|null $discounts A single Stripe coupon or promotion code to apply to the checkout session.
    */
    private ?array $discounts = null;
    
    /**
     * @var string|null $email The email address of the customer. If the owner already exists in the system and does not have a Stripe email it will be used to either create or update the Stripe customer record.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $grantee The unique identifier for the grantee who will receive access. Can be an individual grantee ID or a group ID (starting with grp_). If not provided, a new group will be created for the owner.
    */
    private ?string $grantee = null;
    
    /**
     * @var Post_interval|null $interval The billing interval for recurring charges (e.g., month, year). Required for subscription mode. Set to null for one-time payments.
    */
    private ?Post_interval $interval = null;
    
    /**
     * @var float|null $intervalCount The number of intervals between billings. For example, intervalCount of 3 with interval of month represents billing every 3 months.
    */
    private ?float $intervalCount = null;
    
    /**
     * @var ApiCheckoutPostMetadata|null $metadata Optionally set config for each line item by using the line item slug as the key in the object.
    */
    private ?ApiCheckoutPostMetadata $metadata = null;
    
    /**
     * @var string|null $owner The unique identifier for the owner who will purchase the subscription
    */
    private ?string $owner = null;
    
    /**
     * @var Post_paymentMethodCollection|null $paymentMethodCollection Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
    */
    private ?Post_paymentMethodCollection $paymentMethodCollection = null;
    
    /**
     * @var string|null $planId The unique identifier of the plan to checkout
    */
    private ?string $planId = null;
    
    /**
     * @var string|null $successUrl The URL to redirect the customer to after successful payment. If not provided, falls back to the product default setting, then the Salable-hosted success page.
    */
    private ?string $successUrl = null;
    
    /**
     * @var float|null $trialPeriodDays The number of days for the trial period on subscription. If not provided, falls back to the plan default trial period.
    */
    private ?float $trialPeriodDays = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Post {
        return new Post();
    }

    /**
     * Gets the allowPromoCodes property value. Whether to allow customers to enter promotional codes during checkout. Defaults to product setting if not specified.
     * @return bool|null
    */
    public function getAllowPromoCodes(): ?bool {
        return $this->allowPromoCodes;
    }

    /**
     * Gets the automaticTax property value. Whether to enable automatic tax calculation based on customer location. Defaults to product setting if not specified.
     * @return bool|null
    */
    public function getAutomaticTax(): ?bool {
        return $this->automaticTax;
    }

    /**
     * Gets the cancelUrl property value. The URL to redirect the customer to if they cancel the checkout. If not provided, falls back to the product default setting, then the Salable-hosted cancel page.
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * Gets the cardPrefillPreference property value. Controls how saved payment methods are handled. Options: "always" (always save), "choice" (customer chooses), "none" (never save). Defaults to product setting if not specified.
     * @return Post_cardPrefillPreference|null
    */
    public function getCardPrefillPreference(): ?Post_cardPrefillPreference {
        return $this->cardPrefillPreference;
    }

    /**
     * Gets the collectBillingAddress property value. Whether to collect the customer billing address during checkout. Defaults to product setting if not specified.
     * @return bool|null
    */
    public function getCollectBillingAddress(): ?bool {
        return $this->collectBillingAddress;
    }

    /**
     * Gets the collectShippingAddress property value. Whether to collect the customer shipping address during checkout. Defaults to product setting if not specified.
     * @return bool|null
    */
    public function getCollectShippingAddress(): ?bool {
        return $this->collectShippingAddress;
    }

    /**
     * Gets the currency property value. The case-insensitive three-letter ISO 4217 currency code (e.g., USD, GBP, EUR). Input is normalized to canonical uppercase. If not provided the checkout will use geolocation. For geolocation to work all line item prices on the plan must have the same default currency.
     * @return Post_currency|null
    */
    public function getCurrency(): ?Post_currency {
        return $this->currency;
    }

    /**
     * Gets the discounts property value. A single Stripe coupon or promotion code to apply to the checkout session.
     * @return array<PostDiscounts>|null
    */
    public function getDiscounts(): ?array {
        return $this->discounts;
    }

    /**
     * Gets the email property value. The email address of the customer. If the owner already exists in the system and does not have a Stripe email it will be used to either create or update the Stripe customer record.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowPromoCodes' => fn(ParseNode $n) => $o->setAllowPromoCodes($n->getBooleanValue()),
            'automaticTax' => fn(ParseNode $n) => $o->setAutomaticTax($n->getBooleanValue()),
            'cancelUrl' => fn(ParseNode $n) => $o->setCancelUrl($n->getStringValue()),
            'cardPrefillPreference' => fn(ParseNode $n) => $o->setCardPrefillPreference($n->getEnumValue(Post_cardPrefillPreference::class)),
            'collectBillingAddress' => fn(ParseNode $n) => $o->setCollectBillingAddress($n->getBooleanValue()),
            'collectShippingAddress' => fn(ParseNode $n) => $o->setCollectShippingAddress($n->getBooleanValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(Post_currency::class)),
            'discounts' => fn(ParseNode $n) => $o->setDiscounts($n->getCollectionOfObjectValues([PostDiscounts::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'grantee' => fn(ParseNode $n) => $o->setGrantee($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getEnumValue(Post_interval::class)),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getFloatValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([ApiCheckoutPostMetadata::class, 'createFromDiscriminatorValue'])),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'paymentMethodCollection' => fn(ParseNode $n) => $o->setPaymentMethodCollection($n->getEnumValue(Post_paymentMethodCollection::class)),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'successUrl' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
            'trialPeriodDays' => fn(ParseNode $n) => $o->setTrialPeriodDays($n->getFloatValue()),
        ];
    }

    /**
     * Gets the grantee property value. The unique identifier for the grantee who will receive access. Can be an individual grantee ID or a group ID (starting with grp_). If not provided, a new group will be created for the owner.
     * @return string|null
    */
    public function getGrantee(): ?string {
        return $this->grantee;
    }

    /**
     * Gets the interval property value. The billing interval for recurring charges (e.g., month, year). Required for subscription mode. Set to null for one-time payments.
     * @return Post_interval|null
    */
    public function getInterval(): ?Post_interval {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The number of intervals between billings. For example, intervalCount of 3 with interval of month represents billing every 3 months.
     * @return float|null
    */
    public function getIntervalCount(): ?float {
        return $this->intervalCount;
    }

    /**
     * Gets the metadata property value. Optionally set config for each line item by using the line item slug as the key in the object.
     * @return ApiCheckoutPostMetadata|null
    */
    public function getMetadata(): ?ApiCheckoutPostMetadata {
        return $this->metadata;
    }

    /**
     * Gets the owner property value. The unique identifier for the owner who will purchase the subscription
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the paymentMethodCollection property value. Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
     * @return Post_paymentMethodCollection|null
    */
    public function getPaymentMethodCollection(): ?Post_paymentMethodCollection {
        return $this->paymentMethodCollection;
    }

    /**
     * Gets the planId property value. The unique identifier of the plan to checkout
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the successUrl property value. The URL to redirect the customer to after successful payment. If not provided, falls back to the product default setting, then the Salable-hosted success page.
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->successUrl;
    }

    /**
     * Gets the trialPeriodDays property value. The number of days for the trial period on subscription. If not provided, falls back to the plan default trial period.
     * @return float|null
    */
    public function getTrialPeriodDays(): ?float {
        return $this->trialPeriodDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowPromoCodes', $this->getAllowPromoCodes());
        $writer->writeBooleanValue('automaticTax', $this->getAutomaticTax());
        $writer->writeStringValue('cancelUrl', $this->getCancelUrl());
        $writer->writeEnumValue('cardPrefillPreference', $this->getCardPrefillPreference());
        $writer->writeBooleanValue('collectBillingAddress', $this->getCollectBillingAddress());
        $writer->writeBooleanValue('collectShippingAddress', $this->getCollectShippingAddress());
        $writer->writeEnumValue('currency', $this->getCurrency());
        $writer->writeCollectionOfObjectValues('discounts', $this->getDiscounts());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('grantee', $this->getGrantee());
        $writer->writeEnumValue('interval', $this->getInterval());
        $writer->writeFloatValue('intervalCount', $this->getIntervalCount());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeEnumValue('paymentMethodCollection', $this->getPaymentMethodCollection());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeStringValue('successUrl', $this->getSuccessUrl());
        $writer->writeFloatValue('trialPeriodDays', $this->getTrialPeriodDays());
    }

    /**
     * Sets the allowPromoCodes property value. Whether to allow customers to enter promotional codes during checkout. Defaults to product setting if not specified.
     * @param bool|null $value Value to set for the allowPromoCodes property.
    */
    public function setAllowPromoCodes(?bool $value): void {
        $this->allowPromoCodes = $value;
    }

    /**
     * Sets the automaticTax property value. Whether to enable automatic tax calculation based on customer location. Defaults to product setting if not specified.
     * @param bool|null $value Value to set for the automaticTax property.
    */
    public function setAutomaticTax(?bool $value): void {
        $this->automaticTax = $value;
    }

    /**
     * Sets the cancelUrl property value. The URL to redirect the customer to if they cancel the checkout. If not provided, falls back to the product default setting, then the Salable-hosted cancel page.
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the cardPrefillPreference property value. Controls how saved payment methods are handled. Options: "always" (always save), "choice" (customer chooses), "none" (never save). Defaults to product setting if not specified.
     * @param Post_cardPrefillPreference|null $value Value to set for the cardPrefillPreference property.
    */
    public function setCardPrefillPreference(?Post_cardPrefillPreference $value): void {
        $this->cardPrefillPreference = $value;
    }

    /**
     * Sets the collectBillingAddress property value. Whether to collect the customer billing address during checkout. Defaults to product setting if not specified.
     * @param bool|null $value Value to set for the collectBillingAddress property.
    */
    public function setCollectBillingAddress(?bool $value): void {
        $this->collectBillingAddress = $value;
    }

    /**
     * Sets the collectShippingAddress property value. Whether to collect the customer shipping address during checkout. Defaults to product setting if not specified.
     * @param bool|null $value Value to set for the collectShippingAddress property.
    */
    public function setCollectShippingAddress(?bool $value): void {
        $this->collectShippingAddress = $value;
    }

    /**
     * Sets the currency property value. The case-insensitive three-letter ISO 4217 currency code (e.g., USD, GBP, EUR). Input is normalized to canonical uppercase. If not provided the checkout will use geolocation. For geolocation to work all line item prices on the plan must have the same default currency.
     * @param Post_currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?Post_currency $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the discounts property value. A single Stripe coupon or promotion code to apply to the checkout session.
     * @param array<PostDiscounts>|null $value Value to set for the discounts property.
    */
    public function setDiscounts(?array $value): void {
        $this->discounts = $value;
    }

    /**
     * Sets the email property value. The email address of the customer. If the owner already exists in the system and does not have a Stripe email it will be used to either create or update the Stripe customer record.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the grantee property value. The unique identifier for the grantee who will receive access. Can be an individual grantee ID or a group ID (starting with grp_). If not provided, a new group will be created for the owner.
     * @param string|null $value Value to set for the grantee property.
    */
    public function setGrantee(?string $value): void {
        $this->grantee = $value;
    }

    /**
     * Sets the interval property value. The billing interval for recurring charges (e.g., month, year). Required for subscription mode. Set to null for one-time payments.
     * @param Post_interval|null $value Value to set for the interval property.
    */
    public function setInterval(?Post_interval $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The number of intervals between billings. For example, intervalCount of 3 with interval of month represents billing every 3 months.
     * @param float|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?float $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the metadata property value. Optionally set config for each line item by using the line item slug as the key in the object.
     * @param ApiCheckoutPostMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?ApiCheckoutPostMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the owner property value. The unique identifier for the owner who will purchase the subscription
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the paymentMethodCollection property value. Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
     * @param Post_paymentMethodCollection|null $value Value to set for the paymentMethodCollection property.
    */
    public function setPaymentMethodCollection(?Post_paymentMethodCollection $value): void {
        $this->paymentMethodCollection = $value;
    }

    /**
     * Sets the planId property value. The unique identifier of the plan to checkout
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

    /**
     * Sets the successUrl property value. The URL to redirect the customer to after successful payment. If not provided, falls back to the product default setting, then the Salable-hosted success page.
     * @param string|null $value Value to set for the successUrl property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->successUrl = $value;
    }

    /**
     * Sets the trialPeriodDays property value. The number of days for the trial period on subscription. If not provided, falls back to the plan default trial period.
     * @param float|null $value Value to set for the trialPeriodDays property.
    */
    public function setTrialPeriodDays(?float $value): void {
        $this->trialPeriodDays = $value;
    }

}
