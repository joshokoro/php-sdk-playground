<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CartItems implements Parsable 
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
     * @var UpdateCartRequestSchemaCartItemsMetadata|null $metadata The metadata property
    */
    private ?UpdateCartRequestSchemaCartItemsMetadata $metadata = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CartItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CartItems {
        return new CartItems();
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
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([UpdateCartRequestSchemaCartItemsMetadata::class, 'createFromDiscriminatorValue'])),
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
     * Gets the metadata property value. The metadata property
     * @return UpdateCartRequestSchemaCartItemsMetadata|null
    */
    public function getMetadata(): ?UpdateCartRequestSchemaCartItemsMetadata {
        return $this->metadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('granteeId', $this->getGranteeId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
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
     * Sets the metadata property value. The metadata property
     * @param UpdateCartRequestSchemaCartItemsMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?UpdateCartRequestSchemaCartItemsMetadata $value): void {
        $this->metadata = $value;
    }

}
