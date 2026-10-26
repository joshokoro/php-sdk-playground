<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateGroupRequestSchema implements Parsable 
{
    /**
     * @var array<UpdateGroupRequestSchemaGrantees>|null $grantees The grantees property
    */
    private ?array $grantees = null;
    
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
     * @return UpdateGroupRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateGroupRequestSchema {
        return new UpdateGroupRequestSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'grantees' => fn(ParseNode $n) => $o->setGrantees($n->getCollectionOfObjectValues([UpdateGroupRequestSchemaGrantees::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantees property value. The grantees property
     * @return array<UpdateGroupRequestSchemaGrantees>|null
    */
    public function getGrantees(): ?array {
        return $this->grantees;
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
        $writer->writeCollectionOfObjectValues('grantees', $this->getGrantees());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the grantees property value. The grantees property
     * @param array<UpdateGroupRequestSchemaGrantees>|null $value Value to set for the grantees property.
    */
    public function setGrantees(?array $value): void {
        $this->grantees = $value;
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
