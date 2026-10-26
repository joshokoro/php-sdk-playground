<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPlanDetailSchema implements Parsable 
{
    /**
     * @var GetPlanDetailSchemaData|null $data The data property
    */
    private ?GetPlanDetailSchemaData $data = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPlanDetailSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetPlanDetailSchema {
        return new GetPlanDetailSchema();
    }

    /**
     * Gets the data property value. The data property
     * @return GetPlanDetailSchemaData|null
    */
    public function getData(): ?GetPlanDetailSchemaData {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getObjectValue([GetPlanDetailSchemaData::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
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
        $writer->writeObjectValue('data', $this->getData());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the data property value. The data property
     * @param GetPlanDetailSchemaData|null $value Value to set for the data property.
    */
    public function setData(?GetPlanDetailSchemaData $value): void {
        $this->data = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
