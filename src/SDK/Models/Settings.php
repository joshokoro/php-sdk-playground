<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Settings implements Parsable 
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
     * @var bool|null $collectBillingAddress The collectBillingAddress property
    */
    private ?bool $collectBillingAddress = null;
    
    /**
     * @var bool|null $collectShippingAddress The collectShippingAddress property
    */
    private ?bool $collectShippingAddress = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var bool|null $pastDueEntitlements The pastDueEntitlements property
    */
    private ?bool $pastDueEntitlements = null;
    
    /**
     * @var string|null $productId The productId property
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $successUrl The successUrl property
    */
    private ?string $successUrl = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Settings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Settings {
        return new Settings();
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
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
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
            'collectBillingAddress' => fn(ParseNode $n) => $o->setCollectBillingAddress($n->getBooleanValue()),
            'collectShippingAddress' => fn(ParseNode $n) => $o->setCollectShippingAddress($n->getBooleanValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'pastDueEntitlements' => fn(ParseNode $n) => $o->setPastDueEntitlements($n->getBooleanValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'successUrl' => fn(ParseNode $n) => $o->setSuccessUrl($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the pastDueEntitlements property value. The pastDueEntitlements property
     * @return bool|null
    */
    public function getPastDueEntitlements(): ?bool {
        return $this->pastDueEntitlements;
    }

    /**
     * Gets the productId property value. The productId property
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the successUrl property value. The successUrl property
     * @return string|null
    */
    public function getSuccessUrl(): ?string {
        return $this->successUrl;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowPromoCodes', $this->getAllowPromoCodes());
        $writer->writeBooleanValue('automaticTax', $this->getAutomaticTax());
        $writer->writeStringValue('cancelUrl', $this->getCancelUrl());
        $writer->writeBooleanValue('collectBillingAddress', $this->getCollectBillingAddress());
        $writer->writeBooleanValue('collectShippingAddress', $this->getCollectShippingAddress());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeBooleanValue('pastDueEntitlements', $this->getPastDueEntitlements());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('successUrl', $this->getSuccessUrl());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
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
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the pastDueEntitlements property value. The pastDueEntitlements property
     * @param bool|null $value Value to set for the pastDueEntitlements property.
    */
    public function setPastDueEntitlements(?bool $value): void {
        $this->pastDueEntitlements = $value;
    }

    /**
     * Sets the productId property value. The productId property
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the successUrl property value. The successUrl property
     * @param string|null $value Value to set for the successUrl property.
    */
    public function setSuccessUrl(?string $value): void {
        $this->successUrl = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
