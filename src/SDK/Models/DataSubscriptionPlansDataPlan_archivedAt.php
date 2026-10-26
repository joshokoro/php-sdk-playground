<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DataSubscriptionPlansDataPlan_archivedAtMember1, string
*/
class DataSubscriptionPlansDataPlan_archivedAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DataSubscriptionPlansDataPlan_archivedAtMember1|null $dataSubscriptionPlansDataPlan_archivedAtMember1 Composed type representation for type DataSubscriptionPlansDataPlan_archivedAtMember1
    */
    private ?DataSubscriptionPlansDataPlan_archivedAtMember1 $dataSubscriptionPlansDataPlan_archivedAtMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSubscriptionPlansDataPlan_archivedAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSubscriptionPlansDataPlan_archivedAt {
        $result = new DataSubscriptionPlansDataPlan_archivedAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setDataSubscriptionPlansDataPlanArchivedAtMember1(new DataSubscriptionPlansDataPlan_archivedAtMember1());
        }
        return $result;
    }

    /**
     * Gets the DataSubscriptionPlansDataPlan_archivedAtMember1 property value. Composed type representation for type DataSubscriptionPlansDataPlan_archivedAtMember1
     * @return DataSubscriptionPlansDataPlan_archivedAtMember1|null
    */
    public function getDataSubscriptionPlansDataPlanArchivedAtMember1(): ?DataSubscriptionPlansDataPlan_archivedAtMember1 {
        return $this->dataSubscriptionPlansDataPlan_archivedAtMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDataSubscriptionPlansDataPlanArchivedAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDataSubscriptionPlansDataPlanArchivedAtMember1());
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
            $writer->writeObjectValue(null, $this->getDataSubscriptionPlansDataPlanArchivedAtMember1());
        }
    }

    /**
     * Sets the DataSubscriptionPlansDataPlan_archivedAtMember1 property value. Composed type representation for type DataSubscriptionPlansDataPlan_archivedAtMember1
     * @param DataSubscriptionPlansDataPlan_archivedAtMember1|null $value Value to set for the DataSubscriptionPlansDataPlan_archivedAtMember1 property.
    */
    public function setDataSubscriptionPlansDataPlanArchivedAtMember1(?DataSubscriptionPlansDataPlan_archivedAtMember1 $value): void {
        $this->dataSubscriptionPlansDataPlan_archivedAtMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
