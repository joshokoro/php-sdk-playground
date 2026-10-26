<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateCartItemRequestSchema implements Parsable 
{
    /**
     * @var string|null $cartId The ID of the cart to add this item to. The cart's status must be active.
    */
    private ?string $cartId = null;
    
    /**
     * @var string|null $grantee The grantee to assign this cart item to. Pass any identifier like a user ID to assign to an individual grantee. If the value is not provided, the cart `owner` is used. To assign to a group, pass a group ID prefixed with `grp_`, useful for onboarding entire teams (only applicable to per-seat). The grantee will receive access to the plan's when the subscription is active.
    */
    private ?string $grantee = null;
    
    /**
     * @var CreateCartItemRequestSchema_interval|null $interval The billing interval for this cart item. One of `day`, `week`, `month`, `year`. If the cart already has an interval set, this value must match it.
    */
    private ?CreateCartItemRequestSchema_interval $interval = null;
    
    /**
     * @var float|null $intervalCount The number of intervals between billing cycles. If the cart already has an interval count set, this value must match it.
    */
    private ?float $intervalCount = null;
    
    /**
     * @var CreateCartItemRequestSchemaMetadata2|null $metadata Optional per-line-item configuration, keyed by line item slug. Use this to set the quantity for per-seat line items. Not applicable to metered line items or per-seat line items with a flat-rate billing scheme.
    */
    private ?CreateCartItemRequestSchemaMetadata2 $metadata = null;
    
    /**
     * @var string|null $planId The ID of the plan to add to the cart. Each plan can only appear once per cart.
    */
    private ?string $planId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCartItemRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCartItemRequestSchema {
        return new CreateCartItemRequestSchema();
    }

    /**
     * Gets the cartId property value. The ID of the cart to add this item to. The cart's status must be active.
     * @return string|null
    */
    public function getCartId(): ?string {
        return $this->cartId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cartId' => fn(ParseNode $n) => $o->setCartId($n->getStringValue()),
            'grantee' => fn(ParseNode $n) => $o->setGrantee($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getEnumValue(CreateCartItemRequestSchema_interval::class)),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getFloatValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([CreateCartItemRequestSchemaMetadata2::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantee property value. The grantee to assign this cart item to. Pass any identifier like a user ID to assign to an individual grantee. If the value is not provided, the cart `owner` is used. To assign to a group, pass a group ID prefixed with `grp_`, useful for onboarding entire teams (only applicable to per-seat). The grantee will receive access to the plan's when the subscription is active.
     * @return string|null
    */
    public function getGrantee(): ?string {
        return $this->grantee;
    }

    /**
     * Gets the interval property value. The billing interval for this cart item. One of `day`, `week`, `month`, `year`. If the cart already has an interval set, this value must match it.
     * @return CreateCartItemRequestSchema_interval|null
    */
    public function getInterval(): ?CreateCartItemRequestSchema_interval {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The number of intervals between billing cycles. If the cart already has an interval count set, this value must match it.
     * @return float|null
    */
    public function getIntervalCount(): ?float {
        return $this->intervalCount;
    }

    /**
     * Gets the metadata property value. Optional per-line-item configuration, keyed by line item slug. Use this to set the quantity for per-seat line items. Not applicable to metered line items or per-seat line items with a flat-rate billing scheme.
     * @return CreateCartItemRequestSchemaMetadata2|null
    */
    public function getMetadata(): ?CreateCartItemRequestSchemaMetadata2 {
        return $this->metadata;
    }

    /**
     * Gets the planId property value. The ID of the plan to add to the cart. Each plan can only appear once per cart.
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cartId', $this->getCartId());
        $writer->writeStringValue('grantee', $this->getGrantee());
        $writer->writeEnumValue('interval', $this->getInterval());
        $writer->writeFloatValue('intervalCount', $this->getIntervalCount());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the cartId property value. The ID of the cart to add this item to. The cart's status must be active.
     * @param string|null $value Value to set for the cartId property.
    */
    public function setCartId(?string $value): void {
        $this->cartId = $value;
    }

    /**
     * Sets the grantee property value. The grantee to assign this cart item to. Pass any identifier like a user ID to assign to an individual grantee. If the value is not provided, the cart `owner` is used. To assign to a group, pass a group ID prefixed with `grp_`, useful for onboarding entire teams (only applicable to per-seat). The grantee will receive access to the plan's when the subscription is active.
     * @param string|null $value Value to set for the grantee property.
    */
    public function setGrantee(?string $value): void {
        $this->grantee = $value;
    }

    /**
     * Sets the interval property value. The billing interval for this cart item. One of `day`, `week`, `month`, `year`. If the cart already has an interval set, this value must match it.
     * @param CreateCartItemRequestSchema_interval|null $value Value to set for the interval property.
    */
    public function setInterval(?CreateCartItemRequestSchema_interval $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The number of intervals between billing cycles. If the cart already has an interval count set, this value must match it.
     * @param float|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?float $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the metadata property value. Optional per-line-item configuration, keyed by line item slug. Use this to set the quantity for per-seat line items. Not applicable to metered line items or per-seat line items with a flat-rate billing scheme.
     * @param CreateCartItemRequestSchemaMetadata2|null $value Value to set for the metadata property.
    */
    public function setMetadata(?CreateCartItemRequestSchemaMetadata2 $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the planId property value. The ID of the plan to add to the cart. Each plan can only appear once per cart.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

}
