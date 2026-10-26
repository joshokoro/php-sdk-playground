<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes Owner_emailAddressMember1, string
*/
class Owner_emailAddress implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var Owner_emailAddressMember1|null $owner_emailAddressMember1 Composed type representation for type Owner_emailAddressMember1
    */
    private ?Owner_emailAddressMember1 $owner_emailAddressMember1 = null;
    
    /**
     * @var string|null $string Composed type representation for type string
    */
    private ?string $string = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Owner_emailAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Owner_emailAddress {
        $result = new Owner_emailAddress();
        if ($parseNode->getStringValue() !== null) {
            $result->setString($parseNode->getStringValue());
        } else {
            $result->setOwnerEmailAddressMember1(new Owner_emailAddressMember1());
        }
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getOwnerEmailAddressMember1() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getOwnerEmailAddressMember1());
        }
        return [];
    }

    /**
     * Gets the Owner_emailAddressMember1 property value. Composed type representation for type Owner_emailAddressMember1
     * @return Owner_emailAddressMember1|null
    */
    public function getOwnerEmailAddressMember1(): ?Owner_emailAddressMember1 {
        return $this->owner_emailAddressMember1;
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
            $writer->writeObjectValue(null, $this->getOwnerEmailAddressMember1());
        }
    }

    /**
     * Sets the Owner_emailAddressMember1 property value. Composed type representation for type Owner_emailAddressMember1
     * @param Owner_emailAddressMember1|null $value Value to set for the Owner_emailAddressMember1 property.
    */
    public function setOwnerEmailAddressMember1(?Owner_emailAddressMember1 $value): void {
        $this->owner_emailAddressMember1 = $value;
    }

    /**
     * Sets the string property value. Composed type representation for type string
     * @param string|null $value Value to set for the string property.
    */
    public function setString(?string $value): void {
        $this->string = $value;
    }

}
