<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSubscriptionItemsRequestSchemaRemove implements Parsable 
{
    /**
     * @var string|null $action Remove the specified plan from the subscription.
    */
    private ?string $action = null;
    
    /**
     * @var string|null $planId The ID of the plan to act on.
    */
    private ?string $planId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionItemsRequestSchemaRemove
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionItemsRequestSchemaRemove {
        return new UpdateSubscriptionItemsRequestSchemaRemove();
    }

    /**
     * Gets the action property value. Remove the specified plan from the subscription.
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
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
        ];
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
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the action property value. Remove the specified plan from the subscription.
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->action = $value;
    }

    /**
     * Sets the planId property value. The ID of the plan to act on.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

}
