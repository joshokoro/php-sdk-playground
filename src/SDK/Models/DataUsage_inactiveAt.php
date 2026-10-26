<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DataUsage_inactiveAtMember1, string
*/
class DataUsage_inactiveAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DataUsage_inactiveAtMember1|null $dataUsage_inactiveAtMember1 Composed type representation for type DataUsage_inactiveAtMember1
    */
    private ?DataUsage_inactiveAtMember1 $dataUsage_inactiveAtMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataUsage_inactiveAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataUsage_inactiveAt {
        $result = new DataUsage_inactiveAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setDataUsageInactiveAtMember1(new DataUsage_inactiveAtMember1());
        }
        return $result;
    }

    /**
     * Gets the DataUsage_inactiveAtMember1 property value. Composed type representation for type DataUsage_inactiveAtMember1
     * @return DataUsage_inactiveAtMember1|null
    */
    public function getDataUsageInactiveAtMember1(): ?DataUsage_inactiveAtMember1 {
        return $this->dataUsage_inactiveAtMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDataUsageInactiveAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDataUsageInactiveAtMember1());
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
            $writer->writeObjectValue(null, $this->getDataUsageInactiveAtMember1());
        }
    }

    /**
     * Sets the DataUsage_inactiveAtMember1 property value. Composed type representation for type DataUsage_inactiveAtMember1
     * @param DataUsage_inactiveAtMember1|null $value Value to set for the DataUsage_inactiveAtMember1 property.
    */
    public function setDataUsageInactiveAtMember1(?DataUsage_inactiveAtMember1 $value): void {
        $this->dataUsage_inactiveAtMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
