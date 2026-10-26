<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1, int
*/
class ApiSubscriptionPlansIdGetDataPlan_trialPeriodDays implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1|null $apiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1
    */
    private ?ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 $apiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 = null;
    
    /**
     * @var int|null $integer Composed type representation for type int
    */
    private ?int $integer = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiSubscriptionPlansIdGetDataPlan_trialPeriodDays
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiSubscriptionPlansIdGetDataPlan_trialPeriodDays {
        $result = new ApiSubscriptionPlansIdGetDataPlan_trialPeriodDays();
        if ($parseNode->getIntegerValue() !== null) {
            $result->setInteger($parseNode->getIntegerValue());
        } else {
            $result->setApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1(new ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1());
        }
        return $result;
    }

    /**
     * Gets the ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1
     * @return ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1|null
    */
    public function getApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1(): ?ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 {
        return $this->apiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1());
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
            $writer->writeObjectValue(null, $this->getApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1());
        }
    }

    /**
     * Sets the ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1
     * @param ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1|null $value Value to set for the ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 property.
    */
    public function setApiSubscriptionPlansIdGetDataPlanTrialPeriodDaysMember1(?ApiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 $value): void {
        $this->apiSubscriptionPlansIdGetDataPlan_trialPeriodDaysMember1 = $value;
    }

    /**
     * Sets the integer property value. Composed type representation for type int
     * @param int|null $value Value to set for the integer property.
    */
    public function setInteger(?int $value): void {
        $this->integer = $value;
    }

}
