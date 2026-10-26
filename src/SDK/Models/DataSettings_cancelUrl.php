<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DataSettings_cancelUrlMember1, string
*/
class DataSettings_cancelUrl implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DataSettings_cancelUrlMember1|null $dataSettings_cancelUrlMember1 Composed type representation for type DataSettings_cancelUrlMember1
    */
    private ?DataSettings_cancelUrlMember1 $dataSettings_cancelUrlMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSettings_cancelUrl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSettings_cancelUrl {
        $result = new DataSettings_cancelUrl();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setDataSettingsCancelUrlMember1(new DataSettings_cancelUrlMember1());
        }
        return $result;
    }

    /**
     * Gets the DataSettings_cancelUrlMember1 property value. Composed type representation for type DataSettings_cancelUrlMember1
     * @return DataSettings_cancelUrlMember1|null
    */
    public function getDataSettingsCancelUrlMember1(): ?DataSettings_cancelUrlMember1 {
        return $this->dataSettings_cancelUrlMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDataSettingsCancelUrlMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDataSettingsCancelUrlMember1());
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
            $writer->writeObjectValue(null, $this->getDataSettingsCancelUrlMember1());
        }
    }

    /**
     * Sets the DataSettings_cancelUrlMember1 property value. Composed type representation for type DataSettings_cancelUrlMember1
     * @param DataSettings_cancelUrlMember1|null $value Value to set for the DataSettings_cancelUrlMember1 property.
    */
    public function setDataSettingsCancelUrlMember1(?DataSettings_cancelUrlMember1 $value): void {
        $this->dataSettings_cancelUrlMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
