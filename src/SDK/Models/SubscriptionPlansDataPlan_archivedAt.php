<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes string, SubscriptionPlansDataPlan_archivedAtMember1
*/
class SubscriptionPlansDataPlan_archivedAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * @var SubscriptionPlansDataPlan_archivedAtMember1|null $subscriptionPlansDataPlan_archivedAtMember1 Composed type representation for type SubscriptionPlansDataPlan_archivedAtMember1
    */
    private ?SubscriptionPlansDataPlan_archivedAtMember1 $subscriptionPlansDataPlan_archivedAtMember1 = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionPlansDataPlan_archivedAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionPlansDataPlan_archivedAt {
        $result = new SubscriptionPlansDataPlan_archivedAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setSubscriptionPlansDataPlanArchivedAtMember1(new SubscriptionPlansDataPlan_archivedAtMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getSubscriptionPlansDataPlanArchivedAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getSubscriptionPlansDataPlanArchivedAtMember1());
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
     * Gets the SubscriptionPlansDataPlan_archivedAtMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_archivedAtMember1
     * @return SubscriptionPlansDataPlan_archivedAtMember1|null
    */
    public function getSubscriptionPlansDataPlanArchivedAtMember1(): ?SubscriptionPlansDataPlan_archivedAtMember1 {
        return $this->subscriptionPlansDataPlan_archivedAtMember1;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        if ($this->getString() !== null) {
            $writer->writeStringValue(null, $this->getString());
        } else {
            $writer->writeObjectValue(null, $this->getSubscriptionPlansDataPlanArchivedAtMember1());
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
     * Sets the SubscriptionPlansDataPlan_archivedAtMember1 property value. Composed type representation for type SubscriptionPlansDataPlan_archivedAtMember1
     * @param SubscriptionPlansDataPlan_archivedAtMember1|null $value Value to set for the SubscriptionPlansDataPlan_archivedAtMember1 property.
    */
    public function setSubscriptionPlansDataPlanArchivedAtMember1(?SubscriptionPlansDataPlan_archivedAtMember1 $value): void {
        $this->subscriptionPlansDataPlan_archivedAtMember1 = $value;
    }

}
