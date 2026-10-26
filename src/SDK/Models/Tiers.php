<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Tiers implements Parsable 
{
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $currencyOptionId The currencyOptionId property
    */
    private ?string $currencyOptionId = null;
    
    /**
     * @var float|null $flatAmount The flatAmount property
    */
    private ?float $flatAmount = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var float|null $unitAmount The unitAmount property
    */
    private ?float $unitAmount = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * @var string|null $upTo The upTo property
    */
    private ?string $upTo = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tiers
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Tiers {
        return new Tiers();
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the currencyOptionId property value. The currencyOptionId property
     * @return string|null
    */
    public function getCurrencyOptionId(): ?string {
        return $this->currencyOptionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'currencyOptionId' => fn(ParseNode $n) => $o->setCurrencyOptionId($n->getStringValue()),
            'flatAmount' => fn(ParseNode $n) => $o->setFlatAmount($n->getFloatValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'unitAmount' => fn(ParseNode $n) => $o->setUnitAmount($n->getFloatValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
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
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the unitAmount property value. The unitAmount property
     * @return float|null
    */
    public function getUnitAmount(): ?float {
        return $this->unitAmount;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
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
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('currencyOptionId', $this->getCurrencyOptionId());
        $writer->writeFloatValue('flatAmount', $this->getFlatAmount());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeFloatValue('unitAmount', $this->getUnitAmount());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('upTo', $this->getUpTo());
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currencyOptionId property value. The currencyOptionId property
     * @param string|null $value Value to set for the currencyOptionId property.
    */
    public function setCurrencyOptionId(?string $value): void {
        $this->currencyOptionId = $value;
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
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the unitAmount property value. The unitAmount property
     * @param float|null $value Value to set for the unitAmount property.
    */
    public function setUnitAmount(?float $value): void {
        $this->unitAmount = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the upTo property value. The upTo property
     * @param string|null $value Value to set for the upTo property.
    */
    public function setUpTo(?string $value): void {
        $this->upTo = $value;
    }

}
