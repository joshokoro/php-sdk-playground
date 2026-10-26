<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttemptsData implements Parsable 
{
    /**
     * @var int|null $attempt The attempt property
    */
    private ?int $attempt = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $destinationId The destinationId property
    */
    private ?string $destinationId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var int|null $responseCode The responseCode property
    */
    private ?int $responseCode = null;
    
    /**
     * @var bool|null $responseReceived The responseReceived property
    */
    private ?bool $responseReceived = null;
    
    /**
     * @var string|null $scheduledAt The scheduledAt property
    */
    private ?string $scheduledAt = null;
    
    /**
     * @var int|null $sentCount The sentCount property
    */
    private ?int $sentCount = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttemptsData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttemptsData {
        return new AttemptsData();
    }

    /**
     * Gets the attempt property value. The attempt property
     * @return int|null
    */
    public function getAttempt(): ?int {
        return $this->attempt;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the destinationId property value. The destinationId property
     * @return string|null
    */
    public function getDestinationId(): ?string {
        return $this->destinationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attempt' => fn(ParseNode $n) => $o->setAttempt($n->getIntegerValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'destinationId' => fn(ParseNode $n) => $o->setDestinationId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'responseCode' => fn(ParseNode $n) => $o->setResponseCode($n->getIntegerValue()),
            'responseReceived' => fn(ParseNode $n) => $o->setResponseReceived($n->getBooleanValue()),
            'scheduledAt' => fn(ParseNode $n) => $o->setScheduledAt($n->getStringValue()),
            'sentCount' => fn(ParseNode $n) => $o->setSentCount($n->getIntegerValue()),
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
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the responseCode property value. The responseCode property
     * @return int|null
    */
    public function getResponseCode(): ?int {
        return $this->responseCode;
    }

    /**
     * Gets the responseReceived property value. The responseReceived property
     * @return bool|null
    */
    public function getResponseReceived(): ?bool {
        return $this->responseReceived;
    }

    /**
     * Gets the scheduledAt property value. The scheduledAt property
     * @return string|null
    */
    public function getScheduledAt(): ?string {
        return $this->scheduledAt;
    }

    /**
     * Gets the sentCount property value. The sentCount property
     * @return int|null
    */
    public function getSentCount(): ?int {
        return $this->sentCount;
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
        $writer->writeIntegerValue('attempt', $this->getAttempt());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('destinationId', $this->getDestinationId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeIntegerValue('responseCode', $this->getResponseCode());
        $writer->writeBooleanValue('responseReceived', $this->getResponseReceived());
        $writer->writeStringValue('scheduledAt', $this->getScheduledAt());
        $writer->writeIntegerValue('sentCount', $this->getSentCount());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
    }

    /**
     * Sets the attempt property value. The attempt property
     * @param int|null $value Value to set for the attempt property.
    */
    public function setAttempt(?int $value): void {
        $this->attempt = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the destinationId property value. The destinationId property
     * @param string|null $value Value to set for the destinationId property.
    */
    public function setDestinationId(?string $value): void {
        $this->destinationId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the responseCode property value. The responseCode property
     * @param int|null $value Value to set for the responseCode property.
    */
    public function setResponseCode(?int $value): void {
        $this->responseCode = $value;
    }

    /**
     * Sets the responseReceived property value. The responseReceived property
     * @param bool|null $value Value to set for the responseReceived property.
    */
    public function setResponseReceived(?bool $value): void {
        $this->responseReceived = $value;
    }

    /**
     * Sets the scheduledAt property value. The scheduledAt property
     * @param string|null $value Value to set for the scheduledAt property.
    */
    public function setScheduledAt(?string $value): void {
        $this->scheduledAt = $value;
    }

    /**
     * Sets the sentCount property value. The sentCount property
     * @param int|null $value Value to set for the sentCount property.
    */
    public function setSentCount(?int $value): void {
        $this->sentCount = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
