<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManageGranteesRequestSchemaReplace implements Parsable 
{
    /**
     * @var string|null $granteeId The granteeId property
    */
    private ?string $granteeId = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $newGranteeId The newGranteeId property
    */
    private ?string $newGranteeId = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManageGranteesRequestSchemaReplace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManageGranteesRequestSchemaReplace {
        return new ManageGranteesRequestSchemaReplace();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'granteeId' => fn(ParseNode $n) => $o->setGranteeId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'newGranteeId' => fn(ParseNode $n) => $o->setNewGranteeId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the granteeId property value. The granteeId property
     * @return string|null
    */
    public function getGranteeId(): ?string {
        return $this->granteeId;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the newGranteeId property value. The newGranteeId property
     * @return string|null
    */
    public function getNewGranteeId(): ?string {
        return $this->newGranteeId;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('granteeId', $this->getGranteeId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('newGranteeId', $this->getNewGranteeId());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the granteeId property value. The granteeId property
     * @param string|null $value Value to set for the granteeId property.
    */
    public function setGranteeId(?string $value): void {
        $this->granteeId = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the newGranteeId property value. The newGranteeId property
     * @param string|null $value Value to set for the newGranteeId property.
    */
    public function setNewGranteeId(?string $value): void {
        $this->newGranteeId = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
