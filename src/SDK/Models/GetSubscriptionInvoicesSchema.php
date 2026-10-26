<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetSubscriptionInvoicesSchema implements Parsable 
{
    /**
     * @var array<GetSubscriptionInvoicesSchemaData>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetSubscriptionInvoicesSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetSubscriptionInvoicesSchema {
        return new GetSubscriptionInvoicesSchema();
    }

    /**
     * Gets the data property value. The data property
     * @return array<GetSubscriptionInvoicesSchemaData>|null
    */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([GetSubscriptionInvoicesSchemaData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('data', $this->getData());
    }

    /**
     * Sets the data property value. The data property
     * @param array<GetSubscriptionInvoicesSchemaData>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

}
