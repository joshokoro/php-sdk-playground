<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSubscriptionItemsRequestSchema implements Parsable 
{
    /**
     * @var array<UpdateSubscriptionItemsRequestSchema_items>|null $items The list of plan changes to apply to the subscription.
    */
    private ?array $items = null;
    
    /**
     * @var UpdateSubscriptionItemsRequestSchema_proration|null $proration Controls how Stripe handles proration when items change mid-billing-period. Required for paid subscriptions; not applicable to Salable-only subscriptions. One of `always_invoice`, `create_prorations`, `none`.
    */
    private ?UpdateSubscriptionItemsRequestSchema_proration $proration = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionItemsRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionItemsRequestSchema {
        return new UpdateSubscriptionItemsRequestSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([UpdateSubscriptionItemsRequestSchema_items::class, 'createFromDiscriminatorValue'])),
            'proration' => fn(ParseNode $n) => $o->setProration($n->getEnumValue(UpdateSubscriptionItemsRequestSchema_proration::class)),
        ];
    }

    /**
     * Gets the items property value. The list of plan changes to apply to the subscription.
     * @return array<UpdateSubscriptionItemsRequestSchema_items>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the proration property value. Controls how Stripe handles proration when items change mid-billing-period. Required for paid subscriptions; not applicable to Salable-only subscriptions. One of `always_invoice`, `create_prorations`, `none`.
     * @return UpdateSubscriptionItemsRequestSchema_proration|null
    */
    public function getProration(): ?UpdateSubscriptionItemsRequestSchema_proration {
        return $this->proration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeEnumValue('proration', $this->getProration());
    }

    /**
     * Sets the items property value. The list of plan changes to apply to the subscription.
     * @param array<UpdateSubscriptionItemsRequestSchema_items>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the proration property value. Controls how Stripe handles proration when items change mid-billing-period. Required for paid subscriptions; not applicable to Salable-only subscriptions. One of `always_invoice`, `create_prorations`, `none`.
     * @param UpdateSubscriptionItemsRequestSchema_proration|null $value Value to set for the proration property.
    */
    public function setProration(?UpdateSubscriptionItemsRequestSchema_proration $value): void {
        $this->proration = $value;
    }

}
