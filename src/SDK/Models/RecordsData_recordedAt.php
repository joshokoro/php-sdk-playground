<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes RecordsData_recordedAtMember1, string
*/
class RecordsData_recordedAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var RecordsData_recordedAtMember1|null $recordsData_recordedAtMember1 Composed type representation for type RecordsData_recordedAtMember1
    */
    private ?RecordsData_recordedAtMember1 $recordsData_recordedAtMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecordsData_recordedAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecordsData_recordedAt {
        $result = new RecordsData_recordedAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setRecordsDataRecordedAtMember1(new RecordsData_recordedAtMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getRecordsDataRecordedAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getRecordsDataRecordedAtMember1());
        }
        return [];
    }

    /**
     * Gets the RecordsData_recordedAtMember1 property value. Composed type representation for type RecordsData_recordedAtMember1
     * @return RecordsData_recordedAtMember1|null
    */
    public function getRecordsDataRecordedAtMember1(): ?RecordsData_recordedAtMember1 {
        return $this->recordsData_recordedAtMember1;
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
            $writer->writeObjectValue(null, $this->getRecordsDataRecordedAtMember1());
        }
    }

    /**
     * Sets the RecordsData_recordedAtMember1 property value. Composed type representation for type RecordsData_recordedAtMember1
     * @param RecordsData_recordedAtMember1|null $value Value to set for the RecordsData_recordedAtMember1 property.
    */
    public function setRecordsDataRecordedAtMember1(?RecordsData_recordedAtMember1 $value): void {
        $this->recordsData_recordedAtMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
