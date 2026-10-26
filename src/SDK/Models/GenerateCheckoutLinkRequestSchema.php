<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GenerateCheckoutLinkRequestSchema implements Parsable 
{
    /**
     * @var bool|null $allowPromoCodes The allowPromoCodes property
    */
    private ?bool $allowPromoCodes = null;
    
    /**
     * @var bool|null $automaticTax The automaticTax property
    */
    private ?bool $automaticTax = null;
    
    /**
     * @var string|null $cancelUrl The cancelUrl property
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var GenerateCheckoutLinkRequestSchema_cardPrefillPreference|null $cardPrefillPreference The cardPrefillPreference property
    */
    private ?GenerateCheckoutLinkRequestSchema_cardPrefillPreference $cardPrefillPreference = null;
    
    /**
     * @var bool|null $collectBillingAddress The collectBillingAddress property
    */
    private ?bool $collectBillingAddress = null;
    
    /**
     * @var bool|null $collectShippingAddress The collectShippingAddress property
    */
    private ?bool $collectShippingAddress = null;
    
    /**
     * @var array<Discounts>|null $discounts A single Stripe coupon or promotion code to apply to the checkout session.
    */
    private ?array $discounts = null;
    
    /**
     * @var string|null $email The email property
    */
    private ?string $email = null;
    
    /**
     * @var GenerateCheckoutLinkRequestSchema_paymentMethodCollection|null $paymentMethodCollection Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
    */
    private ?GenerateCheckoutLinkRequestSchema_paymentMethodCollection $paymentMethodCollection = null;
    
    /**
     * @var string|null $successUrl The successUrl property
    */
    private ?string $successUrl = null;
    
    /**
     * @var float|null $trialPeriodDays The trialPeriodDays property
    */
    private ?float $trialPeriodDays = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenerateCheckoutLinkRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenerateCheckoutLinkRequestSchema {
        return new GenerateCheckoutLinkRequestSchema();
    }

    /**
     * Gets the allowPromoCodes property value. The allowPromoCodes property
     * @return bool|null
    */
    public function getAllowPromoCodes(): ?bool {
        return $this->allowPromoCodes;
    }

    /**
     * Gets the automaticTax property value. The automaticTax property
     * @return bool|null
    */
    public function getAutomaticTax(): ?bool {
        return $this->automaticTax;
    }

    /**
     * Gets the cancelUrl property value. The cancelUrl property
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * Gets the cardPrefillPreference property value. The cardPrefillPreference property
     * @return GenerateCheckoutLinkRequestSchema_cardPrefillPreference|null
    */
    public function getCardPrefillPreference(): ?GenerateCheckoutLinkRequestSchema_cardPrefillPreference {
        return $this->cardPrefillPreference;
    }

    /**
     * Gets the collectBillingAddress property value. The collectBillingAddress property
     * @return bool|null
    */
    public function getCollectBillingAddress(): ?bool {
        return $this->collectBillingAddress;
    }

    /**
     * Gets the collectShippingAddress property value. The collectShippingAddress property
     * @return bool|null
    */
    public function getCollectShippingAddress(): ?bool {
        return $this->collectShippingAddress;
    }

    /**
     * Gets the discounts property value. A single Stripe coupon or promotion code to apply to the checkout session.
     * @return array<Discounts>|null
    */
    public function getDiscounts(): ?array {
        return $this->discounts;
    }

    /**
     * Gets the email property value. The email property
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
            'cardPrefillPreference' => fn(ParseNode $n) => $o->setCardPrefillPreference($n->getEnumValue(GenerateCheckoutLinkRequestSchema_cardPrefillPreference::class)),
            'collectBillingAddress' => fn(ParseNode $n) => $o->setCollectBillingAddress($n->getBooleanValue()),
            'collectShippingAddress' => fn(ParseNode $n) => $o->setCollectShippingAddress($n->getBooleanValue()),
            'discounts' => fn(ParseNode $n) => $o->setDiscounts($n->getCollectionOfObjectValues([Discounts::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'paymentMethodCollection' => fn(ParseNode $n) => $o->setPaymentMethodCollection($n->getEnumValue(GenerateCheckoutLinkRequestSchema_paymentMethodCollection::class)),
            'successUrl' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
            'trialPeriodDays' => fn(ParseNode $n) => $o->setTrialPeriodDays($n->getFloatValue()),
        ];
    }

    /**
     * Gets the paymentMethodCollection property value. Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
     * @return GenerateCheckoutLinkRequestSchema_paymentMethodCollection|null
    */
    public function getPaymentMethodCollection(): ?GenerateCheckoutLinkRequestSchema_paymentMethodCollection {
        return $this->paymentMethodCollection;
    }

    /**
     * Gets the successUrl property value. The successUrl property
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->successUrl;
    }

    /**
     * Gets the trialPeriodDays property value. The trialPeriodDays property
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
        $writer->writeCollectionOfObjectValues('discounts', $this->getDiscounts());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeEnumValue('paymentMethodCollection', $this->getPaymentMethodCollection());
        $writer->writeStringValue('successUrl', $this->getSuccessUrl());
        $writer->writeFloatValue('trialPeriodDays', $this->getTrialPeriodDays());
    }

    /**
     * Sets the allowPromoCodes property value. The allowPromoCodes property
     * @param bool|null $value Value to set for the allowPromoCodes property.
    */
    public function setAllowPromoCodes(?bool $value): void {
        $this->allowPromoCodes = $value;
    }

    /**
     * Sets the automaticTax property value. The automaticTax property
     * @param bool|null $value Value to set for the automaticTax property.
    */
    public function setAutomaticTax(?bool $value): void {
        $this->automaticTax = $value;
    }

    /**
     * Sets the cancelUrl property value. The cancelUrl property
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the cardPrefillPreference property value. The cardPrefillPreference property
     * @param GenerateCheckoutLinkRequestSchema_cardPrefillPreference|null $value Value to set for the cardPrefillPreference property.
    */
    public function setCardPrefillPreference(?GenerateCheckoutLinkRequestSchema_cardPrefillPreference $value): void {
        $this->cardPrefillPreference = $value;
    }

    /**
     * Sets the collectBillingAddress property value. The collectBillingAddress property
     * @param bool|null $value Value to set for the collectBillingAddress property.
    */
    public function setCollectBillingAddress(?bool $value): void {
        $this->collectBillingAddress = $value;
    }

    /**
     * Sets the collectShippingAddress property value. The collectShippingAddress property
     * @param bool|null $value Value to set for the collectShippingAddress property.
    */
    public function setCollectShippingAddress(?bool $value): void {
        $this->collectShippingAddress = $value;
    }

    /**
     * Sets the discounts property value. A single Stripe coupon or promotion code to apply to the checkout session.
     * @param array<Discounts>|null $value Value to set for the discounts property.
    */
    public function setDiscounts(?array $value): void {
        $this->discounts = $value;
    }

    /**
     * Sets the email property value. The email property
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the paymentMethodCollection property value. Controls whether Stripe always collects a payment method for subscription Checkout or only collects one when payment is due. If any plans contain one-off line items, the payment method collection will fallback to `always`. Defaults to `always`.
     * @param GenerateCheckoutLinkRequestSchema_paymentMethodCollection|null $value Value to set for the paymentMethodCollection property.
    */
    public function setPaymentMethodCollection(?GenerateCheckoutLinkRequestSchema_paymentMethodCollection $value): void {
        $this->paymentMethodCollection = $value;
    }

    /**
     * Sets the successUrl property value. The successUrl property
     * @param string|null $value Value to set for the successUrl property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->successUrl = $value;
    }

    /**
     * Sets the trialPeriodDays property value. The trialPeriodDays property
     * @param float|null $value Value to set for the trialPeriodDays property.
    */
    public function setTrialPeriodDays(?float $value): void {
        $this->trialPeriodDays = $value;
    }

}
