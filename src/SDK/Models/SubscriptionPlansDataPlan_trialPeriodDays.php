<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes int, SubscriptionPlansDataPlan_trialPeriodDaysMember1
*/
class SubscriptionPlansDataPlan_trialPeriodDays implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var int|null $integer Composed type representation for type int
    */
    private ?int $integer = null;
    
    /**
     * @var SubscriptionPlansDataPlan_trialPeriodDaysMember1|null $subscriptionPlansDataPlan_trialPeriodDaysMember1 Composed type representation for type SubscriptionPlansDataPlan_trialPeriodDaysMember1
    */
    private ?SubscriptionPlansDataPlan_trialPeriodDaysMember1 $subscriptionPlansDataPlan_trialPeriodDaysMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlansDataPlan_trialPeriodDays
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlansDataPlan_trialPeriodDays {
        $result = new SubscriptionPlansDataPlan_trialPeriodDays();
        if ($parseNode->getIntegerValue() !== null) {
            $result->setInteger($parseNode->getIntegerValue());
        } else {
            $result->setSubscriptionPlansDataPlanTrialPeriodDaysMember1(new SubscriptionPlansDataPlan_trialPeriodDaysMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getSubscriptionPlansDataPlanTrialPeriodDaysMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getSubscriptionPlansDataPlanTrialPeriodDaysMember1());
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
     * Gets the SubscriptionPlansDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_trialPeriodDaysMember1
     * @return SubscriptionPlansDataPlan_trialPeriodDaysMember1|null
    */
    public function getSubscriptionPlansDataPlanTrialPeriodDaysMember1(): ?SubscriptionPlansDataPlan_trialPeriodDaysMember1 {
        return $this->subscriptionPlansDataPlan_trialPeriodDaysMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getInteger() !== null) {
            $writer->writeIntegerValue(null, $this->getInteger());
        } else {
            $writer->writeObjectValue(null, $this->getSubscriptionPlansDataPlanTrialPeriodDaysMember1());
        }
    }

    /**
     * Sets the integer property value. Composed type representation for type int
     * @param int|null $value Value to set for the integer property.
    */
    public function setInteger(?int $value): void {
        $this->integer = $value;
    }

    /**
     * Sets the SubscriptionPlansDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_trialPeriodDaysMember1
     * @param SubscriptionPlansDataPlan_trialPeriodDaysMember1|null $value Value to set for the SubscriptionPlansDataPlan_trialPeriodDaysMember1 property.
    */
    public function setSubscriptionPlansDataPlanTrialPeriodDaysMember1(?SubscriptionPlansDataPlan_trialPeriodDaysMember1 $value): void {
        $this->subscriptionPlansDataPlan_trialPeriodDaysMember1 = $value;
    }

}
