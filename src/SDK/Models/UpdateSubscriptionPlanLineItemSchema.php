<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSubscriptionPlanLineItemSchema implements Parsable 
{
    /**
     * @var UpdateSubscriptionPlanLineItemSchema_proration|null $proration Controls how Stripe handles proration when the quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
    */
    private ?UpdateSubscriptionPlanLineItemSchema_proration $proration = null;
    
    /**
     * @var float|null $quantity The new quantity for this subscription plan line item. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the attached group.
    */
    private ?float $quantity = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionPlanLineItemSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionPlanLineItemSchema {
        return new UpdateSubscriptionPlanLineItemSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'proration' => fn(ParseNode $n) => $o->setProration($n->getEnumValue(UpdateSubscriptionPlanLineItemSchema_proration::class)),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
        ];
    }

    /**
     * Gets the proration property value. Controls how Stripe handles proration when the quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
     * @return UpdateSubscriptionPlanLineItemSchema_proration|null
    */
    public function getProration(): ?UpdateSubscriptionPlanLineItemSchema_proration {
        return $this->proration;
    }

    /**
     * Gets the quantity property value. The new quantity for this subscription plan line item. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the attached group.
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
    }

    /**
     * Sets the proration property value. Controls how Stripe handles proration when the quantity changes mid-billing-period. One of `always_invoice`, `create_prorations`, `none`.
     * @param UpdateSubscriptionPlanLineItemSchema_proration|null $value Value to set for the proration property.
    */
    public function setProration(?UpdateSubscriptionPlanLineItemSchema_proration $value): void {
        $this->proration = $value;
    }

    /**
     * Sets the quantity property value. The new quantity for this subscription plan line item. Must be within the line item's minimum and maximum allowed quantities, and cannot be less than the number of current grantees on the attached group.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

}
