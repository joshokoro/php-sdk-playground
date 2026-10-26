<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataUsage implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DataUsage_inactiveAt|null $inactiveAt The inactiveAt property
    */
    private ?DataUsage_inactiveAt $inactiveAt = null;
    
    /**
     * @var string|null $meterSlug The meterSlug property
    */
    private ?string $meterSlug = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $ownerId The ownerId property
    */
    private ?string $ownerId = null;
    
    /**
     * @var RecordsList|null $records The records property
    */
    private ?RecordsList $records = null;
    
    /**
     * @var DataUsage_stripeSubscriptionItemId|null $stripeSubscriptionItemId The stripeSubscriptionItemId property
    */
    private ?DataUsage_stripeSubscriptionItemId $stripeSubscriptionItemId = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Instantiates a new DataUsage and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataUsage {
        return new DataUsage();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inactiveAt' => fn(ParseNode $n) => $o->setInactiveAt($n->getObjectValue([DataUsage_inactiveAt::class, 'createFromDiscriminatorValue'])),
            'meterSlug' => fn(ParseNode $n) => $o->setMeterSlug($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'records' => fn(ParseNode $n) => $o->setRecords($n->getObjectValue([RecordsList::class, 'createFromDiscriminatorValue'])),
            'stripeSubscriptionItemId' => fn(ParseNode $n) => $o->setStripeSubscriptionItemId($n->getObjectValue([DataUsage_stripeSubscriptionItemId::class, 'createFromDiscriminatorValue'])),
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
     * Gets the inactiveAt property value. The inactiveAt property
     * @return DataUsage_inactiveAt|null
    */
    public function getInactiveAt(): ?DataUsage_inactiveAt {
        return $this->inactiveAt;
    }

    /**
     * Gets the meterSlug property value. The meterSlug property
     * @return string|null
    */
    public function getMeterSlug(): ?string {
        return $this->meterSlug;
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
     * Gets the records property value. The records property
     * @return RecordsList|null
    */
    public function getRecords(): ?RecordsList {
        return $this->records;
    }

    /**
     * Gets the stripeSubscriptionItemId property value. The stripeSubscriptionItemId property
     * @return DataUsage_stripeSubscriptionItemId|null
    */
    public function getStripeSubscriptionItemId(): ?DataUsage_stripeSubscriptionItemId {
        return $this->stripeSubscriptionItemId;
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
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('inactiveAt', $this->getInactiveAt());
        $writer->writeStringValue('meterSlug', $this->getMeterSlug());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeObjectValue('records', $this->getRecords());
        $writer->writeObjectValue('stripeSubscriptionItemId', $this->getStripeSubscriptionItemId());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
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
     * Sets the inactiveAt property value. The inactiveAt property
     * @param DataUsage_inactiveAt|null $value Value to set for the inactiveAt property.
    */
    public function setInactiveAt(?DataUsage_inactiveAt $value): void {
        $this->inactiveAt = $value;
    }

    /**
     * Sets the meterSlug property value. The meterSlug property
     * @param string|null $value Value to set for the meterSlug property.
    */
    public function setMeterSlug(?string $value): void {
        $this->meterSlug = $value;
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
     * Sets the records property value. The records property
     * @param RecordsList|null $value Value to set for the records property.
    */
    public function setRecords(?RecordsList $value): void {
        $this->records = $value;
    }

    /**
     * Sets the stripeSubscriptionItemId property value. The stripeSubscriptionItemId property
     * @param DataUsage_stripeSubscriptionItemId|null $value Value to set for the stripeSubscriptionItemId property.
    */
    public function setStripeSubscriptionItemId(?DataUsage_stripeSubscriptionItemId $value): void {
        $this->stripeSubscriptionItemId = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
