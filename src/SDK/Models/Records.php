<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Records implements Parsable 
{
    /**
     * @var string|null $expiresAt The expiresAt property
    */
    private ?string $expiresAt = null;
    
    /**
     * @var string|null $recordId The recordId property
    */
    private ?string $recordId = null;
    
    /**
     * @var float|null $remaining The remaining property
    */
    private ?float $remaining = null;
    
    /**
     * @var RecordsSource|null $source The source property
    */
    private ?RecordsSource $source = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Records
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Records {
        return new Records();
    }

    /**
     * Gets the expiresAt property value. The expiresAt property
     * @return string|null
    */
    public function getExpiresAt(): ?string {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getStringValue()),
            'recordId' => fn(ParseNode $n) => $o->setRecordId($n->getStringValue()),
            'remaining' => fn(ParseNode $n) => $o->setRemaining($n->getFloatValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([RecordsSource::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the recordId property value. The recordId property
     * @return string|null
    */
    public function getRecordId(): ?string {
        return $this->recordId;
    }

    /**
     * Gets the remaining property value. The remaining property
     * @return float|null
    */
    public function getRemaining(): ?float {
        return $this->remaining;
    }

    /**
     * Gets the source property value. The source property
     * @return RecordsSource|null
    */
    public function getSource(): ?RecordsSource {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('recordId', $this->getRecordId());
        $writer->writeFloatValue('remaining', $this->getRemaining());
        $writer->writeObjectValue('source', $this->getSource());
    }

    /**
     * Sets the expiresAt property value. The expiresAt property
     * @param string|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?string $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the recordId property value. The recordId property
     * @param string|null $value Value to set for the recordId property.
    */
    public function setRecordId(?string $value): void {
        $this->recordId = $value;
    }

    /**
     * Sets the remaining property value. The remaining property
     * @param float|null $value Value to set for the remaining property.
    */
    public function setRemaining(?float $value): void {
        $this->remaining = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param RecordsSource|null $value Value to set for the source property.
    */
    public function setSource(?RecordsSource $value): void {
        $this->source = $value;
    }

}
