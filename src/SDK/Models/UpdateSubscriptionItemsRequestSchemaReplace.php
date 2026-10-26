<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSubscriptionItemsRequestSchemaReplace implements Parsable 
{
    /**
     * @var string|null $action Replace the specified plan with a different plan, preserving the existing grantee group.
    */
    private ?string $action = null;
    
    /**
     * @var UpdateSubscriptionItemsRequestSchemaMeta4|null $metadata Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
    */
    private ?UpdateSubscriptionItemsRequestSchemaMeta4 $metadata = null;
    
    /**
     * @var string|null $newPlanId The ID of the plan to replace the existing plan with.
    */
    private ?string $newPlanId = null;
    
    /**
     * @var string|null $planId The ID of the plan to act on.
    */
    private ?string $planId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionItemsRequestSchemaReplace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionItemsRequestSchemaReplace {
        return new UpdateSubscriptionItemsRequestSchemaReplace();
    }

    /**
     * Gets the action property value. Replace the specified plan with a different plan, preserving the existing grantee group.
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
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([UpdateSubscriptionItemsRequestSchemaMeta4::class, 'createFromDiscriminatorValue'])),
            'newPlanId' => fn(ParseNode $n) => $o->setNewPlanId($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ];
    }

    /**
     * Gets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
     * @return UpdateSubscriptionItemsRequestSchemaMeta4|null
    */
    public function getMetadata(): ?UpdateSubscriptionItemsRequestSchemaMeta4 {
        return $this->metadata;
    }

    /**
     * Gets the newPlanId property value. The ID of the plan to replace the existing plan with.
     * @return string|null
    */
    public function getNewPlanId(): ?string {
        return $this->newPlanId;
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
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('newPlanId', $this->getNewPlanId());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the action property value. Replace the specified plan with a different plan, preserving the existing grantee group.
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->action = $value;
    }

    /**
     * Sets the metadata property value. Per-line-item quantity overrides, keyed by line item slug. (Deprecated: line item IDs are also accepted for existing integrations; new integrations should use slugs.)
     * @param UpdateSubscriptionItemsRequestSchemaMeta4|null $value Value to set for the metadata property.
    */
    public function setMetadata(?UpdateSubscriptionItemsRequestSchemaMeta4 $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the newPlanId property value. The ID of the plan to replace the existing plan with.
     * @param string|null $value Value to set for the newPlanId property.
    */
    public function setNewPlanId(?string $value): void {
        $this->newPlanId = $value;
    }

    /**
     * Sets the planId property value. The ID of the plan to act on.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

}
