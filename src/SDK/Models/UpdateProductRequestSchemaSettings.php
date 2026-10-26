<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Product settings to update.
*/
class UpdateProductRequestSchemaSettings implements Parsable 
{
    /**
     * @var bool|null $allowPromoCodes Whether to allow customers to enter promotional codes during checkout.
    */
    private ?bool $allowPromoCodes = null;
    
    /**
     * @var bool|null $automaticTax Whether to enable automatic tax calculation based on customer location.
    */
    private ?bool $automaticTax = null;
    
    /**
     * @var string|null $cancelUrl URL to redirect customers to if they abandon checkout.
    */
    private ?string $cancelUrl = null;
    
    /**
     * @var UpdateProductRequestSchemaSettings_cardPrefillPreference|null $cardPrefillPreference Controls whether to prefill the customer's saved card details at checkout. One of `none`, `always`, `choice`.
    */
    private ?UpdateProductRequestSchemaSettings_cardPrefillPreference $cardPrefillPreference = null;
    
    /**
     * @var bool|null $collectBillingAddress Whether to collect the customer's billing address during checkout.
    */
    private ?bool $collectBillingAddress = null;
    
    /**
     * @var bool|null $collectShippingAddress Whether to collect the customer's shipping address during checkout.
    */
    private ?bool $collectShippingAddress = null;
    
    /**
     * @var bool|null $pastDueEntitlements Whether customers with past due subscriptions retain their entitlements.
    */
    private ?bool $pastDueEntitlements = null;
    
    /**
     * @var string|null $successUrl URL to redirect customers to after a successful checkout.
    */
    private ?string $successUrl = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateProductRequestSchemaSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateProductRequestSchemaSettings {
        return new UpdateProductRequestSchemaSettings();
    }

    /**
     * Gets the allowPromoCodes property value. Whether to allow customers to enter promotional codes during checkout.
     * @return bool|null
    */
    public function getAllowPromoCodes(): ?bool {
        return $this->allowPromoCodes;
    }

    /**
     * Gets the automaticTax property value. Whether to enable automatic tax calculation based on customer location.
     * @return bool|null
    */
    public function getAutomaticTax(): ?bool {
        return $this->automaticTax;
    }

    /**
     * Gets the cancelUrl property value. URL to redirect customers to if they abandon checkout.
     * @return string|null
    */
    public function getCancelUrl(): ?string {
        return $this->cancelUrl;
    }

    /**
     * Gets the cardPrefillPreference property value. Controls whether to prefill the customer's saved card details at checkout. One of `none`, `always`, `choice`.
     * @return UpdateProductRequestSchemaSettings_cardPrefillPreference|null
    */
    public function getCardPrefillPreference(): ?UpdateProductRequestSchemaSettings_cardPrefillPreference {
        return $this->cardPrefillPreference;
    }

    /**
     * Gets the collectBillingAddress property value. Whether to collect the customer's billing address during checkout.
     * @return bool|null
    */
    public function getCollectBillingAddress(): ?bool {
        return $this->collectBillingAddress;
    }

    /**
     * Gets the collectShippingAddress property value. Whether to collect the customer's shipping address during checkout.
     * @return bool|null
    */
    public function getCollectShippingAddress(): ?bool {
        return $this->collectShippingAddress;
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
            'cardPrefillPreference' => fn(ParseNode $n) => $o->setCardPrefillPreference($n->getEnumValue(UpdateProductRequestSchemaSettings_cardPrefillPreference::class)),
            'collectBillingAddress' => fn(ParseNode $n) => $o->setCollectBillingAddress($n->getBooleanValue()),
            'collectShippingAddress' => fn(ParseNode $n) => $o->setCollectShippingAddress($n->getBooleanValue()),
            'pastDueEntitlements' => fn(ParseNode $n) => $o->setPastDueEntitlements($n->getBooleanValue()),
            'successUrl' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the pastDueEntitlements property value. Whether customers with past due subscriptions retain their entitlements.
     * @return bool|null
    */
    public function getPastDueEntitlements(): ?bool {
        return $this->pastDueEntitlements;
    }

    /**
     * Gets the successUrl property value. URL to redirect customers to after a successful checkout.
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->successUrl;
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
        $writer->writeBooleanValue('pastDueEntitlements', $this->getPastDueEntitlements());
        $writer->writeStringValue('successUrl', $this->getSuccessUrl());
    }

    /**
     * Sets the allowPromoCodes property value. Whether to allow customers to enter promotional codes during checkout.
     * @param bool|null $value Value to set for the allowPromoCodes property.
    */
    public function setAllowPromoCodes(?bool $value): void {
        $this->allowPromoCodes = $value;
    }

    /**
     * Sets the automaticTax property value. Whether to enable automatic tax calculation based on customer location.
     * @param bool|null $value Value to set for the automaticTax property.
    */
    public function setAutomaticTax(?bool $value): void {
        $this->automaticTax = $value;
    }

    /**
     * Sets the cancelUrl property value. URL to redirect customers to if they abandon checkout.
     * @param string|null $value Value to set for the cancelUrl property.
    */
    public function setCancelUrl(?string $value): void {
        $this->cancelUrl = $value;
    }

    /**
     * Sets the cardPrefillPreference property value. Controls whether to prefill the customer's saved card details at checkout. One of `none`, `always`, `choice`.
     * @param UpdateProductRequestSchemaSettings_cardPrefillPreference|null $value Value to set for the cardPrefillPreference property.
    */
    public function setCardPrefillPreference(?UpdateProductRequestSchemaSettings_cardPrefillPreference $value): void {
        $this->cardPrefillPreference = $value;
    }

    /**
     * Sets the collectBillingAddress property value. Whether to collect the customer's billing address during checkout.
     * @param bool|null $value Value to set for the collectBillingAddress property.
    */
    public function setCollectBillingAddress(?bool $value): void {
        $this->collectBillingAddress = $value;
    }

    /**
     * Sets the collectShippingAddress property value. Whether to collect the customer's shipping address during checkout.
     * @param bool|null $value Value to set for the collectShippingAddress property.
    */
    public function setCollectShippingAddress(?bool $value): void {
        $this->collectShippingAddress = $value;
    }

    /**
     * Sets the pastDueEntitlements property value. Whether customers with past due subscriptions retain their entitlements.
     * @param bool|null $value Value to set for the pastDueEntitlements property.
    */
    public function setPastDueEntitlements(?bool $value): void {
        $this->pastDueEntitlements = $value;
    }

    /**
     * Sets the successUrl property value. URL to redirect customers to after a successful checkout.
     * @param string|null $value Value to set for the successUrl property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->successUrl = $value;
    }

}
