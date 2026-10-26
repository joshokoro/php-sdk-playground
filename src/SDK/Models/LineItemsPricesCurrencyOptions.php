<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LineItemsPricesCurrencyOptions implements Parsable 
{
    /**
     * @var LineItemsPricesCurrencyOptions_currency|null $currency The currency property
    */
    private ?LineItemsPricesCurrencyOptions_currency $currency = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var array<CurrencyOptionsTiers>|null $tiers The tiers property
    */
    private ?array $tiers = null;
    
    /**
     * @var float|null $unitAmount The unitAmount property
    */
    private ?float $unitAmount = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineItemsPricesCurrencyOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineItemsPricesCurrencyOptions {
        return new LineItemsPricesCurrencyOptions();
    }

    /**
     * Gets the currency property value. The currency property
     * @return LineItemsPricesCurrencyOptions_currency|null
    */
    public function getCurrency(): ?LineItemsPricesCurrencyOptions_currency {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(LineItemsPricesCurrencyOptions_currency::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'tiers' => fn(ParseNode $n) => $o->setTiers($n->getCollectionOfObjectValues([CurrencyOptionsTiers::class, 'createFromDiscriminatorValue'])),
            'unitAmount' => fn(ParseNode $n) => $o->setUnitAmount($n->getFloatValue()),
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
     * Gets the tiers property value. The tiers property
     * @return array<CurrencyOptionsTiers>|null
    */
    public function getTiers(): ?array {
        return $this->tiers;
    }

    /**
     * Gets the unitAmount property value. The unitAmount property
     * @return float|null
    */
    public function getUnitAmount(): ?float {
        return $this->unitAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('currency', $this->getCurrency());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('tiers', $this->getTiers());
        $writer->writeFloatValue('unitAmount', $this->getUnitAmount());
    }

    /**
     * Sets the currency property value. The currency property
     * @param LineItemsPricesCurrencyOptions_currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?LineItemsPricesCurrencyOptions_currency $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the tiers property value. The tiers property
     * @param array<CurrencyOptionsTiers>|null $value Value to set for the tiers property.
    */
    public function setTiers(?array $value): void {
        $this->tiers = $value;
    }

    /**
     * Sets the unitAmount property value. The unitAmount property
     * @param float|null $value Value to set for the unitAmount property.
    */
    public function setUnitAmount(?float $value): void {
        $this->unitAmount = $value;
    }

}
