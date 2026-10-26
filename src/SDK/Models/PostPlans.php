<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostPlans implements Parsable 
{
    /**
     * @var string|null $grantee A grantee is any entity that receives access to features or entitlements through a Subscription. These can represent users, teams, projects, boards, workspaces, or any other entity in your application that needs feature access.
    */
    private ?string $grantee = null;
    
    /**
     * @var PostPlansMetadata|null $metadata Per-line-item quantity overrides, keyed by line item slug. Only applicable to non-metered line items with a maxQuantity more than 1.
    */
    private ?PostPlansMetadata $metadata = null;
    
    /**
     * @var string|null $planId The ID of the plan to subscribe to.
    */
    private ?string $planId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostPlans
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostPlans {
        return new PostPlans();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'grantee' => fn(ParseNode $n) => $o->setGrantee($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PostPlansMetadata::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantee property value. A grantee is any entity that receives access to features or entitlements through a Subscription. These can represent users, teams, projects, boards, workspaces, or any other entity in your application that needs feature access.
     * @return string|null
    */
    public function getGrantee(): ?string {
        return $this->grantee;
    }

    /**
     * Gets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. Only applicable to non-metered line items with a maxQuantity more than 1.
     * @return PostPlansMetadata|null
    */
    public function getMetadata(): ?PostPlansMetadata {
        return $this->metadata;
    }

    /**
     * Gets the planId property value. The ID of the plan to subscribe to.
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
        $writer->writeStringValue('grantee', $this->getGrantee());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the grantee property value. A grantee is any entity that receives access to features or entitlements through a Subscription. These can represent users, teams, projects, boards, workspaces, or any other entity in your application that needs feature access.
     * @param string|null $value Value to set for the grantee property.
    */
    public function setGrantee(?string $value): void {
        $this->grantee = $value;
    }

    /**
     * Sets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. Only applicable to non-metered line items with a maxQuantity more than 1.
     * @param PostPlansMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PostPlansMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the planId property value. The ID of the plan to subscribe to.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

}
