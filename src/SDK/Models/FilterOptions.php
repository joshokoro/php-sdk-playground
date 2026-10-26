<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FilterOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $currencies The currencies property
    */
    private ?array $currencies = null;
    
    /**
     * @var array<Intervals>|null $intervals The intervals property
    */
    private ?array $intervals = null;
    
    /**
     * Instantiates a new FilterOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilterOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilterOptions {
        return new FilterOptions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currencies property value. The currencies property
     * @return array<string>|null
    */
    public function getCurrencies(): ?array {
        return $this->currencies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currencies' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCurrencies($val);
            },
            'intervals' => fn(ParseNode $n) => $o->setIntervals($n->getCollectionOfObjectValues([Intervals::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the intervals property value. The intervals property
     * @return array<Intervals>|null
    */
    public function getIntervals(): ?array {
        return $this->intervals;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('currencies', $this->getCurrencies());
        $writer->writeCollectionOfObjectValues('intervals', $this->getIntervals());
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
     * Sets the currencies property value. The currencies property
     * @param array<string>|null $value Value to set for the currencies property.
    */
    public function setCurrencies(?array $value): void {
        $this->currencies = $value;
    }

    /**
     * Sets the intervals property value. The intervals property
     * @param array<Intervals>|null $value Value to set for the intervals property.
    */
    public function setIntervals(?array $value): void {
        $this->intervals = $value;
    }

}
