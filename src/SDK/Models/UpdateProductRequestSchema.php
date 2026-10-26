<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateProductRequestSchema implements Parsable 
{
    /**
     * @var bool|null $isActive Whether the product is active. When `false`, the product and its plans will not be available for new subscriptions.
    */
    private ?bool $isActive = null;
    
    /**
     * @var string|null $name The name of the product.
    */
    private ?string $name = null;
    
    /**
     * @var UpdateProductRequestSchemaSettings|null $settings Product settings to update.
    */
    private ?UpdateProductRequestSchemaSettings $settings = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateProductRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateProductRequestSchema {
        return new UpdateProductRequestSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([UpdateProductRequestSchemaSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isActive property value. Whether the product is active. When `false`, the product and its plans will not be available for new subscriptions.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the name property value. The name of the product.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the settings property value. Product settings to update.
     * @return UpdateProductRequestSchemaSettings|null
    */
    public function getSettings(): ?UpdateProductRequestSchemaSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the isActive property value. Whether the product is active. When `false`, the product and its plans will not be available for new subscriptions.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->isActive = $value;
    }

    /**
     * Sets the name property value. The name of the product.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the settings property value. Product settings to update.
     * @param UpdateProductRequestSchemaSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?UpdateProductRequestSchemaSettings $value): void {
        $this->settings = $value;
    }

}
