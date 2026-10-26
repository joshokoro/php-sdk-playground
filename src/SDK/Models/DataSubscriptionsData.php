<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSubscriptionsData implements Parsable 
{
    /**
     * @var bool|null $cancelAtPeriodEnd The cancelAtPeriodEnd property
    */
    private ?bool $cancelAtPeriodEnd = null;
    
    /**
     * @var string|null $cancelledAt The cancelledAt property
    */
    private ?string $cancelledAt = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $currencyShortCode The currencyShortCode property
    */
    private ?string $currencyShortCode = null;
    
    /**
     * @var string|null $customerId The customerId property
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var int|null $intervalCount The intervalCount property
    */
    private ?int $intervalCount = null;
    
    /**
     * @var bool|null $isPerpetual The isPerpetual property
    */
    private ?bool $isPerpetual = null;
    
    /**
     * @var bool|null $isSalableOnly The isSalableOnly property
    */
    private ?bool $isSalableOnly = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $ownerId The ownerId property
    */
    private ?string $ownerId = null;
    
    /**
     * @var string|null $startDate The startDate property
    */
    private ?string $startDate = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $stripeSubscriptionId The stripeSubscriptionId property
    */
    private ?string $stripeSubscriptionId = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSubscriptionsData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSubscriptionsData {
        return new DataSubscriptionsData();
    }

    /**
     * Gets the cancelAtPeriodEnd property value. The cancelAtPeriodEnd property
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * Gets the cancelledAt property value. The cancelledAt property
     * @return string|null
    */
    public function getCancelledAt(): ?string {
        return $this->cancelledAt;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the currencyShortCode property value. The currencyShortCode property
     * @return string|null
    */
    public function getCurrencyShortCode(): ?string {
        return $this->currencyShortCode;
    }

    /**
     * Gets the customerId property value. The customerId property
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelAtPeriodEnd' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'cancelledAt' => fn(ParseNode $n) => $o->setCancelledAt($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'currencyShortCode' => fn(ParseNode $n) => $o->setCurrencyShortCode($n->getStringValue()),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'isPerpetual' => fn(ParseNode $n) => $o->setIsPerpetual($n->getBooleanValue()),
            'isSalableOnly' => fn(ParseNode $n) => $o->setIsSalableOnly($n->getBooleanValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'stripeSubscriptionId' => fn(ParseNode $n) => $o->setStripeSubscriptionId($n->getStringValue()),
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
     * Gets the intervalCount property value. The intervalCount property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->intervalCount;
    }

    /**
     * Gets the isPerpetual property value. The isPerpetual property
     * @return bool|null
    */
    public function getIsPerpetual(): ?bool {
        return $this->isPerpetual;
    }

    /**
     * Gets the isSalableOnly property value. The isSalableOnly property
     * @return bool|null
    */
    public function getIsSalableOnly(): ?bool {
        return $this->isSalableOnly;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the ownerId property value. The ownerId property
     * @return string|null
    */
    public function getOwnerId(): ?string {
        return $this->ownerId;
    }

    /**
     * Gets the startDate property value. The startDate property
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the stripeSubscriptionId property value. The stripeSubscriptionId property
     * @return string|null
    */
    public function getStripeSubscriptionId(): ?string {
        return $this->stripeSubscriptionId;
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
        $writer->writeBooleanValue('cancelAtPeriodEnd', $this->getCancelAtPeriodEnd());
        $writer->writeStringValue('cancelledAt', $this->getCancelledAt());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('currencyShortCode', $this->getCurrencyShortCode());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('intervalCount', $this->getIntervalCount());
        $writer->writeBooleanValue('isPerpetual', $this->getIsPerpetual());
        $writer->writeBooleanValue('isSalableOnly', $this->getIsSalableOnly());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeStringValue('startDate', $this->getStartDate());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('stripeSubscriptionId', $this->getStripeSubscriptionId());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
    }

    /**
     * Sets the cancelAtPeriodEnd property value. The cancelAtPeriodEnd property
     * @param bool|null $value Value to set for the cancelAtPeriodEnd property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancelAtPeriodEnd = $value;
    }

    /**
     * Sets the cancelledAt property value. The cancelledAt property
     * @param string|null $value Value to set for the cancelledAt property.
    */
    public function setCancelledAt(?string $value): void {
        $this->cancelledAt = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currencyShortCode property value. The currencyShortCode property
     * @param string|null $value Value to set for the currencyShortCode property.
    */
    public function setCurrencyShortCode(?string $value): void {
        $this->currencyShortCode = $value;
    }

    /**
     * Sets the customerId property value. The customerId property
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the intervalCount property value. The intervalCount property
     * @param int|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?int $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the isPerpetual property value. The isPerpetual property
     * @param bool|null $value Value to set for the isPerpetual property.
    */
    public function setIsPerpetual(?bool $value): void {
        $this->isPerpetual = $value;
    }

    /**
     * Sets the isSalableOnly property value. The isSalableOnly property
     * @param bool|null $value Value to set for the isSalableOnly property.
    */
    public function setIsSalableOnly(?bool $value): void {
        $this->isSalableOnly = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the ownerId property value. The ownerId property
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->ownerId = $value;
    }

    /**
     * Sets the startDate property value. The startDate property
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the stripeSubscriptionId property value. The stripeSubscriptionId property
     * @param string|null $value Value to set for the stripeSubscriptionId property.
    */
    public function setStripeSubscriptionId(?string $value): void {
        $this->stripeSubscriptionId = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
