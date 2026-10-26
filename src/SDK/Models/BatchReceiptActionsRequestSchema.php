<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BatchReceiptActionsRequestSchema implements Parsable 
{
    /**
     * @var BatchReceiptActionsRequestSchema_action|null $action The action property
    */
    private ?BatchReceiptActionsRequestSchema_action $action = null;
    
    /**
     * @var array<string>|null $receiptIds The receiptIds property
    */
    private ?array $receiptIds = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchReceiptActionsRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchReceiptActionsRequestSchema {
        return new BatchReceiptActionsRequestSchema();
    }

    /**
     * Gets the action property value. The action property
     * @return BatchReceiptActionsRequestSchema_action|null
    */
    public function getAction(): ?BatchReceiptActionsRequestSchema_action {
        return $this->action;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(BatchReceiptActionsRequestSchema_action::class)),
            'receiptIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReceiptIds($val);
            },
        ];
    }

    /**
     * Gets the receiptIds property value. The receiptIds property
     * @return array<string>|null
    */
    public function getReceiptIds(): ?array {
        return $this->receiptIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfPrimitiveValues('receiptIds', $this->getReceiptIds());
    }

    /**
     * Sets the action property value. The action property
     * @param BatchReceiptActionsRequestSchema_action|null $value Value to set for the action property.
    */
    public function setAction(?BatchReceiptActionsRequestSchema_action $value): void {
        $this->action = $value;
    }

    /**
     * Sets the receiptIds property value. The receiptIds property
     * @param array<string>|null $value Value to set for the receiptIds property.
    */
    public function setReceiptIds(?array $value): void {
        $this->receiptIds = $value;
    }

}
