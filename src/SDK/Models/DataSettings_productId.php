<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DataSettings_productIdMember1, string
*/
class DataSettings_productId implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DataSettings_productIdMember1|null $dataSettings_productIdMember1 Composed type representation for type DataSettings_productIdMember1
    */
    private ?DataSettings_productIdMember1 $dataSettings_productIdMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSettings_productId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSettings_productId {
        $result = new DataSettings_productId();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setDataSettingsProductIdMember1(new DataSettings_productIdMember1());
        }
        return $result;
    }

    /**
     * Gets the DataSettings_productIdMember1 property value. Composed type representation for type DataSettings_productIdMember1
     * @return DataSettings_productIdMember1|null
    */
    public function getDataSettingsProductIdMember1(): ?DataSettings_productIdMember1 {
        return $this->dataSettings_productIdMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDataSettingsProductIdMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDataSettingsProductIdMember1());
        }
        return [];
    }

    /**
     * Gets the string property value. Composed type representation for type string
     * @return string|null
    */
    public function getString(): ?string {
        return $this->string;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getDataSettingsProductIdMember1());
        }
    }

    /**
     * Sets the DataSettings_productIdMember1 property value. Composed type representation for type DataSettings_productIdMember1
     * @param DataSettings_productIdMember1|null $value Value to set for the DataSettings_productIdMember1 property.
    */
    public function setDataSettingsProductIdMember1(?DataSettings_productIdMember1 $value): void {
        $this->dataSettings_productIdMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
