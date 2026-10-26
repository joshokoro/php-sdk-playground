<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1, string
*/
class ApiSubscriptionPlansIdGetDataPlan_tierTagId implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1|null $apiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1
    */
    private ?ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 $apiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiSubscriptionPlansIdGetDataPlan_tierTagId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiSubscriptionPlansIdGetDataPlan_tierTagId {
        $result = new ApiSubscriptionPlansIdGetDataPlan_tierTagId();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setApiSubscriptionPlansIdGetDataPlanTierTagIdMember1(new ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1());
        }
        return $result;
    }

    /**
     * Gets the ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1
     * @return ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1|null
    */
    public function getApiSubscriptionPlansIdGetDataPlanTierTagIdMember1(): ?ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 {
        return $this->apiSubscriptionPlansIdGetDataPlan_tierTagIdMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getApiSubscriptionPlansIdGetDataPlanTierTagIdMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getApiSubscriptionPlansIdGetDataPlanTierTagIdMember1());
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
            $writer->writeObjectValue(null, $this->getApiSubscriptionPlansIdGetDataPlanTierTagIdMember1());
        }
    }

    /**
     * Sets the ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1
     * @param ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1|null $value Value to set for the ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 property.
    */
    public function setApiSubscriptionPlansIdGetDataPlanTierTagIdMember1(?ApiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 $value): void {
        $this->apiSubscriptionPlansIdGetDataPlan_tierTagIdMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
