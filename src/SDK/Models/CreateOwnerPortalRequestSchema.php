<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateOwnerPortalRequestSchema implements Parsable 
{
    /**
     * @var CreateOwnerPortalRequestSchemaFeatures|null $features The portal features to enable for this session.
    */
    private ?CreateOwnerPortalRequestSchemaFeatures $features = null;
    
    /**
     * @var string|null $returnUrl The URL to redirect customers to after they have finished managing their subscription in the portal.
    */
    private ?string $returnUrl = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOwnerPortalRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOwnerPortalRequestSchema {
        return new CreateOwnerPortalRequestSchema();
    }

    /**
     * Gets the features property value. The portal features to enable for this session.
     * @return CreateOwnerPortalRequestSchemaFeatures|null
    */
    public function getFeatures(): ?CreateOwnerPortalRequestSchemaFeatures {
        return $this->features;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'features' => fn(ParseNode $n) => $o->setFeatures($n->getObjectValue([CreateOwnerPortalRequestSchemaFeatures::class, 'createFromDiscriminatorValue'])),
            'returnUrl' => fn(ParseNode $n) => $o->setReturnUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the returnUrl property value. The URL to redirect customers to after they have finished managing their subscription in the portal.
     * @return string|null
    */
    public function getReturnUrl(): ?string {
        return $this->returnUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('features', $this->getFeatures());
        $writer->writeStringValue('returnUrl', $this->getReturnUrl());
    }

    /**
     * Sets the features property value. The portal features to enable for this session.
     * @param CreateOwnerPortalRequestSchemaFeatures|null $value Value to set for the features property.
    */
    public function setFeatures(?CreateOwnerPortalRequestSchemaFeatures $value): void {
        $this->features = $value;
    }

    /**
     * Sets the returnUrl property value. The URL to redirect customers to after they have finished managing their subscription in the portal.
     * @param string|null $value Value to set for the returnUrl property.
    */
    public function setReturnUrl(?string $value): void {
        $this->returnUrl = $value;
    }

}
