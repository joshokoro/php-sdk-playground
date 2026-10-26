<?php

namespace Salable\SDK\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SavePlanRequestSchemaLineItems_prices implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $archivedAt The archivedAt property
    */
    private ?DateTime $archivedAt = null;
    
    /**
     * @var array<LineItemsPricesCurrencyOptions>|null $currencyOptions The currencyOptions property
    */
    private ?array $currencyOptions = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_prices_defaultCurrency|null $defaultCurrency The defaultCurrency property
    */
    private ?SavePlanRequestSchemaLineItems_prices_defaultCurrency $defaultCurrency = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_prices_interval|null $interval The interval property
    */
    private ?SavePlanRequestSchemaLineItems_prices_interval $interval = null;
    
    /**
     * @var float|null $intervalCount The intervalCount property
    */
    private ?float $intervalCount = null;
    
    /**
     * Instantiates a new SavePlanRequestSchemaLineItems_prices and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SavePlanRequestSchemaLineItems_prices
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SavePlanRequestSchemaLineItems_prices {
        return new SavePlanRequestSchemaLineItems_prices();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the archivedAt property value. The archivedAt property
     * @return DateTime|null
    */
    public function getArchivedAt(): ?DateTime {
        return $this->archivedAt;
    }

    /**
     * Gets the currencyOptions property value. The currencyOptions property
     * @return array<LineItemsPricesCurrencyOptions>|null
    */
    public function getCurrencyOptions(): ?array {
        return $this->currencyOptions;
    }

    /**
     * Gets the defaultCurrency property value. The defaultCurrency property
     * @return SavePlanRequestSchemaLineItems_prices_defaultCurrency|null
    */
    public function getDefaultCurrency(): ?SavePlanRequestSchemaLineItems_prices_defaultCurrency {
        return $this->defaultCurrency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'currencyOptions' => fn(ParseNode $n) => $o->setCurrencyOptions($n->getCollectionOfObjectValues([LineItemsPricesCurrencyOptions::class, 'createFromDiscriminatorValue'])),
            'defaultCurrency' => fn(ParseNode $n) => $o->setDefaultCurrency($n->getEnumValue(SavePlanRequestSchemaLineItems_prices_defaultCurrency::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getEnumValue(SavePlanRequestSchemaLineItems_prices_interval::class)),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getFloatValue()),
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
     * Gets the interval property value. The interval property
     * @return SavePlanRequestSchemaLineItems_prices_interval|null
    */
    public function getInterval(): ?SavePlanRequestSchemaLineItems_prices_interval {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The intervalCount property
     * @return float|null
    */
    public function getIntervalCount(): ?float {
        return $this->intervalCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeCollectionOfObjectValues('currencyOptions', $this->getCurrencyOptions());
        $writer->writeEnumValue('defaultCurrency', $this->getDefaultCurrency());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('interval', $this->getInterval());
        $writer->writeFloatValue('intervalCount', $this->getIntervalCount());
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
     * Sets the archivedAt property value. The archivedAt property
     * @param DateTime|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?DateTime $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the currencyOptions property value. The currencyOptions property
     * @param array<LineItemsPricesCurrencyOptions>|null $value Value to set for the currencyOptions property.
    */
    public function setCurrencyOptions(?array $value): void {
        $this->currencyOptions = $value;
    }

    /**
     * Sets the defaultCurrency property value. The defaultCurrency property
     * @param SavePlanRequestSchemaLineItems_prices_defaultCurrency|null $value Value to set for the defaultCurrency property.
    */
    public function setDefaultCurrency(?SavePlanRequestSchemaLineItems_prices_defaultCurrency $value): void {
        $this->defaultCurrency = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the interval property value. The interval property
     * @param SavePlanRequestSchemaLineItems_prices_interval|null $value Value to set for the interval property.
    */
    public function setInterval(?SavePlanRequestSchemaLineItems_prices_interval $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The intervalCount property
     * @param float|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?float $value): void {
        $this->intervalCount = $value;
    }

}
