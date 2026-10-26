<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataEventTypesData implements Parsable 
{
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $deletedAt The deletedAt property
    */
    private ?string $deletedAt = null;
    
    /**
     * @var DataEventTypesData_event|null $event The event property
    */
    private ?DataEventTypesData_event $event = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * @var string|null $webhookId The webhookId property
    */
    private ?string $webhookId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataEventTypesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataEventTypesData {
        return new DataEventTypesData();
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the deletedAt property value. The deletedAt property
     * @return string|null
    */
    public function getDeletedAt(): ?string {
        return $this->deletedAt;
    }

    /**
     * Gets the event property value. The event property
     * @return DataEventTypesData_event|null
    */
    public function getEvent(): ?DataEventTypesData_event {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'deletedAt' => fn(ParseNode $n) => $o->setDeletedAt($n->getStringValue()),
            'event' => fn(ParseNode $n) => $o->setEvent($n->getObjectValue([DataEventTypesData_event::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
            'webhookId' => fn(ParseNode $n) => $o->setWebhookId($n->getStringValue()),
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
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Gets the webhookId property value. The webhookId property
     * @return string|null
    */
    public function getWebhookId(): ?string {
        return $this->webhookId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('deletedAt', $this->getDeletedAt());
        $writer->writeObjectValue('event', $this->getEvent());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('webhookId', $this->getWebhookId());
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the deletedAt property value. The deletedAt property
     * @param string|null $value Value to set for the deletedAt property.
    */
    public function setDeletedAt(?string $value): void {
        $this->deletedAt = $value;
    }

    /**
     * Sets the event property value. The event property
     * @param DataEventTypesData_event|null $value Value to set for the event property.
    */
    public function setEvent(?DataEventTypesData_event $value): void {
        $this->event = $value;
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
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the webhookId property value. The webhookId property
     * @param string|null $value Value to set for the webhookId property.
    */
    public function setWebhookId(?string $value): void {
        $this->webhookId = $value;
    }

}
