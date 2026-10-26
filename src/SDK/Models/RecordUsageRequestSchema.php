<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecordUsageRequestSchema implements Parsable 
{
    /**
     * @var int|null $increment The increment property
    */
    private ?int $increment = null;
    
    /**
     * @var string|null $meterSlug The meterSlug property
    */
    private ?string $meterSlug = null;
    
    /**
     * @var string|null $owner The owner property
    */
    private ?string $owner = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordUsageRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecordUsageRequestSchema {
        return new RecordUsageRequestSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'increment' => fn(ParseNode $n) => $o->setIncrement($n->getIntegerValue()),
            'meterSlug' => fn(ParseNode $n) => $o->setMeterSlug($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
        ];
    }

    /**
     * Gets the increment property value. The increment property
     * @return int|null
    */
    public function getIncrement(): ?int {
        return $this->increment;
    }

    /**
     * Gets the meterSlug property value. The meterSlug property
     * @return string|null
    */
    public function getMeterSlug(): ?string {
        return $this->meterSlug;
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('increment', $this->getIncrement());
        $writer->writeStringValue('meterSlug', $this->getMeterSlug());
        $writer->writeStringValue('owner', $this->getOwner());
    }

    /**
     * Sets the increment property value. The increment property
     * @param int|null $value Value to set for the increment property.
    */
    public function setIncrement(?int $value): void {
        $this->increment = $value;
    }

    /**
     * Sets the meterSlug property value. The meterSlug property
     * @param string|null $value Value to set for the meterSlug property.
    */
    public function setMeterSlug(?string $value): void {
        $this->meterSlug = $value;
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

}
