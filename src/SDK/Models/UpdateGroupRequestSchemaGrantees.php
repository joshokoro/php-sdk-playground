<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateGroupRequestSchemaGrantees implements Parsable 
{
    /**
     * @var string|null $granteeId The granteeId property
    */
    private ?string $granteeId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateGroupRequestSchemaGrantees
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateGroupRequestSchemaGrantees {
        return new UpdateGroupRequestSchemaGrantees();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'granteeId' => fn(ParseNode $n) => $o->setGranteeId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
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
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('granteeId', $this->getGranteeId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the granteeId property value. The granteeId property
     * @param string|null $value Value to set for the granteeId property.
    */
    public function setGranteeId(?string $value): void {
        $this->granteeId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
