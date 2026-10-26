<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes Owner_stripeCustomerIdMember1, string
*/
class Owner_stripeCustomerId implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var Owner_stripeCustomerIdMember1|null $owner_stripeCustomerIdMember1 Composed type representation for type Owner_stripeCustomerIdMember1
    */
    private ?Owner_stripeCustomerIdMember1 $owner_stripeCustomerIdMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Owner_stripeCustomerId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Owner_stripeCustomerId {
        $result = new Owner_stripeCustomerId();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setOwnerStripeCustomerIdMember1(new Owner_stripeCustomerIdMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getOwnerStripeCustomerIdMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getOwnerStripeCustomerIdMember1());
        }
        return [];
    }

    /**
     * Gets the Owner_stripeCustomerIdMember1 property value. Composed type representation for type Owner_stripeCustomerIdMember1
     * @return Owner_stripeCustomerIdMember1|null
    */
    public function getOwnerStripeCustomerIdMember1(): ?Owner_stripeCustomerIdMember1 {
        return $this->owner_stripeCustomerIdMember1;
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
            $writer->writeObjectValue(null, $this->getOwnerStripeCustomerIdMember1());
        }
    }

    /**
     * Sets the Owner_stripeCustomerIdMember1 property value. Composed type representation for type Owner_stripeCustomerIdMember1
     * @param Owner_stripeCustomerIdMember1|null $value Value to set for the Owner_stripeCustomerIdMember1 property.
    */
    public function setOwnerStripeCustomerIdMember1(?Owner_stripeCustomerIdMember1 $value): void {
        $this->owner_stripeCustomerIdMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
