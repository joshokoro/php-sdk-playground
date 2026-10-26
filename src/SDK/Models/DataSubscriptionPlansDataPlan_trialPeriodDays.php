<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes DataSubscriptionPlansDataPlan_trialPeriodDaysMember1, int
*/
class DataSubscriptionPlansDataPlan_trialPeriodDays implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var DataSubscriptionPlansDataPlan_trialPeriodDaysMember1|null $dataSubscriptionPlansDataPlan_trialPeriodDaysMember1 Composed type representation for type DataSubscriptionPlansDataPlan_trialPeriodDaysMember1
    */
    private ?DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 $dataSubscriptionPlansDataPlan_trialPeriodDaysMember1 = null;
    
    /**
     * @var int|null $integer Composed type representation for type int
    */
    private ?int $integer = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSubscriptionPlansDataPlan_trialPeriodDays
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSubscriptionPlansDataPlan_trialPeriodDays {
        $result = new DataSubscriptionPlansDataPlan_trialPeriodDays();
        if ($parseNode->getIntegerValue() !== null) {
            $result->setInteger($parseNode->getIntegerValue());
        } else {
            $result->setDataSubscriptionPlansDataPlanTrialPeriodDaysMember1(new DataSubscriptionPlansDataPlan_trialPeriodDaysMember1());
        }
        return $result;
    }

    /**
     * Gets the DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type DataSubscriptionPlansDataPlan_trialPeriodDaysMember1
     * @return DataSubscriptionPlansDataPlan_trialPeriodDaysMember1|null
    */
    public function getDataSubscriptionPlansDataPlanTrialPeriodDaysMember1(): ?DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 {
        return $this->dataSubscriptionPlansDataPlan_trialPeriodDaysMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getDataSubscriptionPlansDataPlanTrialPeriodDaysMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getDataSubscriptionPlansDataPlanTrialPeriodDaysMember1());
        }
        return [];
    }

    /**
     * Gets the integer property value. Composed type representation for type int
     * @return int|null
    */
    public function getInteger(): ?int {
        return $this->integer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getInteger() !== null) {
            $writer->writeIntegerValue(null, $this->getInteger());
        } else {
            $writer->writeObjectValue(null, $this->getDataSubscriptionPlansDataPlanTrialPeriodDaysMember1());
        }
    }

    /**
     * Sets the DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type DataSubscriptionPlansDataPlan_trialPeriodDaysMember1
     * @param DataSubscriptionPlansDataPlan_trialPeriodDaysMember1|null $value Value to set for the DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 property.
    */
    public function setDataSubscriptionPlansDataPlanTrialPeriodDaysMember1(?DataSubscriptionPlansDataPlan_trialPeriodDaysMember1 $value): void {
        $this->dataSubscriptionPlansDataPlan_trialPeriodDaysMember1 = $value;
    }

    /**
     * Sets the integer property value. Composed type representation for type int
     * @param int|null $value Value to set for the integer property.
    */
    public function setInteger(?int $value): void {
        $this->integer = $value;
    }

}
