<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CurrencyOptionsTiers implements Parsable 
{
    /**
     * @var float|null $flatAmount The flatAmount property
    */
    private ?float $flatAmount = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var float|null $unitAmount The unitAmount property
    */
    private ?float $unitAmount = null;
    
    /**
     * @var string|null $upTo The upTo property
    */
    private ?string $upTo = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CurrencyOptionsTiers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CurrencyOptionsTiers {
        return new CurrencyOptionsTiers();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'flatAmount' => fn(ParseNode $n) => $o->setFlatAmount($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'unitAmount' => fn(ParseNode $n) => $o->setUnitAmount($n->getFloatValue()),
            'upTo' => fn(ParseNode $n) => $o->setUpTo($n->getStringValue()),
        ];
    }

    /**
     * Gets the flatAmount property value. The flatAmount property
     * @return float|null
    */
    public function getFlatAmount(): ?float {
        return $this->flatAmount;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the unitAmount property value. The unitAmount property
     * @return float|null
    */
    public function getUnitAmount(): ?float {
        return $this->unitAmount;
    }

    /**
     * Gets the upTo property value. The upTo property
     * @return string|null
    */
    public function getUpTo(): ?string {
        return $this->upTo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('flatAmount', $this->getFlatAmount());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeFloatValue('unitAmount', $this->getUnitAmount());
        $writer->writeStringValue('upTo', $this->getUpTo());
    }

    /**
     * Sets the flatAmount property value. The flatAmount property
     * @param float|null $value Value to set for the flatAmount property.
    */
    public function setFlatAmount(?float $value): void {
        $this->flatAmount = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the unitAmount property value. The unitAmount property
     * @param float|null $value Value to set for the unitAmount property.
    */
    public function setUnitAmount(?float $value): void {
        $this->unitAmount = $value;
    }

    /**
     * Sets the upTo property value. The upTo property
     * @param string|null $value Value to set for the upTo property.
    */
    public function setUpTo(?string $value): void {
        $this->upTo = $value;
    }

}
