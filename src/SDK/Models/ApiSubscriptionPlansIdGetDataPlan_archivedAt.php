<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1, string
*/
class ApiSubscriptionPlansIdGetDataPlan_archivedAt implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1|null $apiSubscriptionPlansIdGetDataPlan_archivedAtMember1 Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1
    */
    private ?ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 $apiSubscriptionPlansIdGetDataPlan_archivedAtMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiSubscriptionPlansIdGetDataPlan_archivedAt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiSubscriptionPlansIdGetDataPlan_archivedAt {
        $result = new ApiSubscriptionPlansIdGetDataPlan_archivedAt();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setApiSubscriptionPlansIdGetDataPlanArchivedAtMember1(new ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1());
        }
        return $result;
    }

    /**
     * Gets the ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1
     * @return ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1|null
    */
    public function getApiSubscriptionPlansIdGetDataPlanArchivedAtMember1(): ?ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 {
        return $this->apiSubscriptionPlansIdGetDataPlan_archivedAtMember1;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getApiSubscriptionPlansIdGetDataPlanArchivedAtMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getApiSubscriptionPlansIdGetDataPlanArchivedAtMember1());
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
            $writer->writeObjectValue(null, $this->getApiSubscriptionPlansIdGetDataPlanArchivedAtMember1());
        }
    }

    /**
     * Sets the ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 property value. Composed type representation for type ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1
     * @param ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1|null $value Value to set for the ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 property.
    */
    public function setApiSubscriptionPlansIdGetDataPlanArchivedAtMember1(?ApiSubscriptionPlansIdGetDataPlan_archivedAtMember1 $value): void {
        $this->apiSubscriptionPlansIdGetDataPlan_archivedAtMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
