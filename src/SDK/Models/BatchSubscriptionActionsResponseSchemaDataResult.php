<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchSubscriptionActionsResponseSchemaDataResult implements Parsable 
{
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var BatchSubscriptionActionsResponseSchemaDataResult_status|null $status The status property
    */
    private ?BatchSubscriptionActionsResponseSchemaDataResult_status $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchSubscriptionActionsResponseSchemaDataResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchSubscriptionActionsResponseSchemaDataResult {
        return new BatchSubscriptionActionsResponseSchemaDataResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([BatchSubscriptionActionsResponseSchemaDataResult_status::class, 'createFromDiscriminatorValue'])),
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
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the status property value. The status property
     * @return BatchSubscriptionActionsResponseSchemaDataResult_status|null
    */
    public function getStatus(): ?BatchSubscriptionActionsResponseSchemaDataResult_status {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeObjectValue('status', $this->getStatus());
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param BatchSubscriptionActionsResponseSchemaDataResult_status|null $value Value to set for the status property.
    */
    public function setStatus(?BatchSubscriptionActionsResponseSchemaDataResult_status $value): void {
        $this->status = $value;
    }

}
