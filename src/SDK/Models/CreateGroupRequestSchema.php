<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateGroupRequestSchema implements Parsable 
{
    /**
     * @var array<Grantees>|null $grantees Create new or connect existing grantees to the group. To connect an existing grantee use it's granteeId value.
    */
    private ?array $grantees = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $owner The owner property
    */
    private ?string $owner = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateGroupRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateGroupRequestSchema {
        return new CreateGroupRequestSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'grantees' => fn(ParseNode $n) => $o->setGrantees($n->getCollectionOfObjectValues([Grantees::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantees property value. Create new or connect existing grantees to the group. To connect an existing grantee use it's granteeId value.
     * @return array<Grantees>|null
    */
    public function getGrantees(): ?array {
        return $this->grantees;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('grantees', $this->getGrantees());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('owner', $this->getOwner());
    }

    /**
     * Sets the grantees property value. Create new or connect existing grantees to the group. To connect an existing grantee use it's granteeId value.
     * @param array<Grantees>|null $value Value to set for the grantees property.
    */
    public function setGrantees(?array $value): void {
        $this->grantees = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

}
