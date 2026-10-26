<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CheckEntitlementsSchemaData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<DataEntitlements>|null $entitlements The entitlements property
    */
    private ?array $entitlements = null;
    
    /**
     * @var string|null $signature The signature property
    */
    private ?string $signature = null;
    
    /**
     * Instantiates a new CheckEntitlementsSchemaData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckEntitlementsSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CheckEntitlementsSchemaData {
        return new CheckEntitlementsSchemaData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the entitlements property value. The entitlements property
     * @return array<DataEntitlements>|null
    */
    public function getEntitlements(): ?array {
        return $this->entitlements;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'entitlements' => fn(ParseNode $n) => $o->setEntitlements($n->getCollectionOfObjectValues([DataEntitlements::class, 'createFromDiscriminatorValue'])),
            'signature' => fn(ParseNode $n) => $o->setSignature($n->getStringValue()),
        ];
    }

    /**
     * Gets the signature property value. The signature property
     * @return string|null
    */
    public function getSignature(): ?string {
        return $this->signature;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('entitlements', $this->getEntitlements());
        $writer->writeStringValue('signature', $this->getSignature());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the entitlements property value. The entitlements property
     * @param array<DataEntitlements>|null $value Value to set for the entitlements property.
    */
    public function setEntitlements(?array $value): void {
        $this->entitlements = $value;
    }

    /**
     * Sets the signature property value. The signature property
     * @param string|null $value Value to set for the signature property.
    */
    public function setSignature(?string $value): void {
        $this->signature = $value;
    }

}
