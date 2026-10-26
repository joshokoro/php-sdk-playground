<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, SubscriptionPlansDataPlan_tierTagIdMember1
*/
class SubscriptionPlansDataPlan_tierTagId implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var SubscriptionPlansDataPlan_tierTagIdMember1|null $subscriptionPlansDataPlan_tierTagIdMember1 Composed type representation for type SubscriptionPlansDataPlan_tierTagIdMember1
    */
    private ?SubscriptionPlansDataPlan_tierTagIdMember1 $subscriptionPlansDataPlan_tierTagIdMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlansDataPlan_tierTagId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlansDataPlan_tierTagId {
        $result = new SubscriptionPlansDataPlan_tierTagId();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setSubscriptionPlansDataPlanTierTagIdMember1(new SubscriptionPlansDataPlan_tierTagIdMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getSubscriptionPlansDataPlanTierTagIdMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getSubscriptionPlansDataPlanTierTagIdMember1());
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
     * Gets the SubscriptionPlansDataPlan_tierTagIdMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_tierTagIdMember1
     * @return SubscriptionPlansDataPlan_tierTagIdMember1|null
    */
    public function getSubscriptionPlansDataPlanTierTagIdMember1(): ?SubscriptionPlansDataPlan_tierTagIdMember1 {
        return $this->subscriptionPlansDataPlan_tierTagIdMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getSubscriptionPlansDataPlanTierTagIdMember1());
        }
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

    /**
     * Sets the SubscriptionPlansDataPlan_tierTagIdMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_tierTagIdMember1
     * @param SubscriptionPlansDataPlan_tierTagIdMember1|null $value Value to set for the SubscriptionPlansDataPlan_tierTagIdMember1 property.
    */
    public function setSubscriptionPlansDataPlanTierTagIdMember1(?SubscriptionPlansDataPlan_tierTagIdMember1 $value): void {
        $this->subscriptionPlansDataPlan_tierTagIdMember1 = $value;
    }

}
