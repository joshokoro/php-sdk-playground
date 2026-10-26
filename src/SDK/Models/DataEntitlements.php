<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataEntitlements implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $expiryDate The expiryDate property
    */
    private ?string $expiryDate = null;
    
    /**
     * @var DataEntitlements_type|null $type The type property
    */
    private ?DataEntitlements_type $type = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new DataEntitlements and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataEntitlements
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataEntitlements {
        return new DataEntitlements();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expiryDate property value. The expiryDate property
     * @return string|null
    */
    public function getExpiryDate(): ?string {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getObjectValue([DataEntitlements_type::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the type property value. The type property
     * @return DataEntitlements_type|null
    */
    public function getType(): ?DataEntitlements_type {
        return $this->type;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expiryDate', $this->getExpiryDate());
        $writer->writeObjectValue('type', $this->getType());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the expiryDate property value. The expiryDate property
     * @param string|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?string $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param DataEntitlements_type|null $value Value to set for the type property.
    */
    public function setType(?DataEntitlements_type $value): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
