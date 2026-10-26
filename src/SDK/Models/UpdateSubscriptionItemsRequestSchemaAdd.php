<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSubscriptionItemsRequestSchemaAdd implements Parsable 
{
    /**
     * @var string|null $action Add a new plan to the subscription.
    */
    private ?string $action = null;
    
    /**
     * @var string|null $grantee Your internal identifier for the entity that will receive access to the added plan. When omitted, an empty group is created.
    */
    private ?string $grantee = null;
    
    /**
     * @var UpdateSubscriptionItemsRequestSchemaMeta2|null $metadata Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
    */
    private ?UpdateSubscriptionItemsRequestSchemaMeta2 $metadata = null;
    
    /**
     * @var string|null $planId The ID of the plan to act on.
    */
    private ?string $planId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionItemsRequestSchemaAdd
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionItemsRequestSchemaAdd {
        return new UpdateSubscriptionItemsRequestSchemaAdd();
    }

    /**
     * Gets the action property value. Add a new plan to the subscription.
     * @return string|null
    */
    public function getAction(): ?string {
        return $this->action;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getStringValue()),
            'grantee' => fn(ParseNode $n) => $o->setGrantee($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([UpdateSubscriptionItemsRequestSchemaMeta2::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantee property value. Your internal identifier for the entity that will receive access to the added plan. When omitted, an empty group is created.
     * @return string|null
    */
    public function getGrantee(): ?string {
        return $this->grantee;
    }

    /**
     * Gets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
     * @return UpdateSubscriptionItemsRequestSchemaMeta2|null
    */
    public function getMetadata(): ?UpdateSubscriptionItemsRequestSchemaMeta2 {
        return $this->metadata;
    }

    /**
     * Gets the planId property value. The ID of the plan to act on.
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
        $writer->writeStringValue('action', $this->getAction());
        $writer->writeStringValue('grantee', $this->getGrantee());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the action property value. Add a new plan to the subscription.
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->action = $value;
    }

    /**
     * Sets the grantee property value. Your internal identifier for the entity that will receive access to the added plan. When omitted, an empty group is created.
     * @param string|null $value Value to set for the grantee property.
    */
    public function setGrantee(?string $value): void {
        $this->grantee = $value;
    }

    /**
     * Sets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
     * @param UpdateSubscriptionItemsRequestSchemaMeta2|null $value Value to set for the metadata property.
    */
    public function setMetadata(?UpdateSubscriptionItemsRequestSchemaMeta2 $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the planId property value. The ID of the plan to act on.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

}
