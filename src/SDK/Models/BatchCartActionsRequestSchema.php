<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BatchCartActionsRequestSchema implements Parsable 
{
    /**
     * @var BatchCartActionsRequestSchema_action|null $action The action property
    */
    private ?BatchCartActionsRequestSchema_action $action = null;
    
    /**
     * @var array<string>|null $cartIds The cartIds property
    */
    private ?array $cartIds = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchCartActionsRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchCartActionsRequestSchema {
        return new BatchCartActionsRequestSchema();
    }

    /**
     * Gets the action property value. The action property
     * @return BatchCartActionsRequestSchema_action|null
    */
    public function getAction(): ?BatchCartActionsRequestSchema_action {
        return $this->action;
    }

    /**
     * Gets the cartIds property value. The cartIds property
     * @return array<string>|null
    */
    public function getCartIds(): ?array {
        return $this->cartIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(BatchCartActionsRequestSchema_action::class)),
            'cartIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCartIds($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfPrimitiveValues('cartIds', $this->getCartIds());
    }

    /**
     * Sets the action property value. The action property
     * @param BatchCartActionsRequestSchema_action|null $value Value to set for the action property.
    */
    public function setAction(?BatchCartActionsRequestSchema_action $value): void {
        $this->action = $value;
    }

    /**
     * Sets the cartIds property value. The cartIds property
     * @param array<string>|null $value Value to set for the cartIds property.
    */
    public function setCartIds(?array $value): void {
        $this->cartIds = $value;
    }

}
