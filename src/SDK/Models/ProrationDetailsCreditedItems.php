<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProrationDetailsCreditedItems implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $invoice The invoice property
    */
    private ?string $invoice = null;
    
    /**
     * @var array<string>|null $invoice_line_items The invoice_line_items property
    */
    private ?array $invoice_line_items = null;
    
    /**
     * Instantiates a new ProrationDetailsCreditedItems and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProrationDetailsCreditedItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProrationDetailsCreditedItems {
        return new ProrationDetailsCreditedItems();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invoice' => fn(ParseNode $n) => $o->setInvoice($n->getStringValue()),
            'invoice_line_items' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInvoiceLineItems($val);
            },
        ];
    }

    /**
     * Gets the invoice property value. The invoice property
     * @return string|null
    */
    public function getInvoice(): ?string {
        return $this->invoice;
    }

    /**
     * Gets the invoice_line_items property value. The invoice_line_items property
     * @return array<string>|null
    */
    public function getInvoiceLineItems(): ?array {
        return $this->invoice_line_items;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('invoice', $this->getInvoice());
        $writer->writeCollectionOfPrimitiveValues('invoice_line_items', $this->getInvoiceLineItems());
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
     * Sets the invoice property value. The invoice property
     * @param string|null $value Value to set for the invoice property.
    */
    public function setInvoice(?string $value): void {
        $this->invoice = $value;
    }

    /**
     * Sets the invoice_line_items property value. The invoice_line_items property
     * @param array<string>|null $value Value to set for the invoice_line_items property.
    */
    public function setInvoiceLineItems(?array $value): void {
        $this->invoice_line_items = $value;
    }

}
