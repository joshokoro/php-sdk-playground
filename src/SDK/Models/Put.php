<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Put implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Put_proration|null $proration Controls how Stripe handles proration when the seat quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
    */
    private ?Put_proration $proration = null;
    
    /**
     * @var float|null $quantity The new seat quantity. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the group.
    */
    private ?float $quantity = null;
    
    /**
     * Instantiates a new Put and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Put
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Put {
        return new Put();
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
            'proration' => fn(ParseNode $n) => $o->setProration($n->getEnumValue(Put_proration::class)),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
        ];
    }

    /**
     * Gets the proration property value. Controls how Stripe handles proration when the seat quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
     * @return Put_proration|null
    */
    public function getProration(): ?Put_proration {
        return $this->proration;
    }

    /**
     * Gets the quantity property value. The new seat quantity. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the group.
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('proration', $this->getProration());
        $writer->writeFloatValue('quantity', $this->getQuantity());
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
     * Sets the proration property value. Controls how Stripe handles proration when the seat quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
     * @param Put_proration|null $value Value to set for the proration property.
    */
    public function setProration(?Put_proration $value): void {
        $this->proration = $value;
    }

    /**
     * Sets the quantity property value. The new seat quantity. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the group.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

}
