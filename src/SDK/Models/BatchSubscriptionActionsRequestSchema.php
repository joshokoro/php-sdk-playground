<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BatchSubscriptionActionsRequestSchema implements Parsable 
{
    /**
     * @var BatchSubscriptionActionsRequestSchema_action|null $action The action to perform on all provided subscriptions. One of `cancel`, `enable-auto-renew`, `disable-auto-renew`, `delete`. The `delete` action is only available in test mode.
    */
    private ?BatchSubscriptionActionsRequestSchema_action $action = null;
    
    /**
     * @var array<string>|null $subscriptionIds The IDs of the subscriptions to apply the action to. Maximum of 100 IDs per request.
    */
    private ?array $subscriptionIds = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchSubscriptionActionsRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchSubscriptionActionsRequestSchema {
        return new BatchSubscriptionActionsRequestSchema();
    }

    /**
     * Gets the action property value. The action to perform on all provided subscriptions. One of `cancel`, `enable-auto-renew`, `disable-auto-renew`, `delete`. The `delete` action is only available in test mode.
     * @return BatchSubscriptionActionsRequestSchema_action|null
    */
    public function getAction(): ?BatchSubscriptionActionsRequestSchema_action {
        return $this->action;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(BatchSubscriptionActionsRequestSchema_action::class)),
            'subscriptionIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubscriptionIds($val);
            },
        ];
    }

    /**
     * Gets the subscriptionIds property value. The IDs of the subscriptions to apply the action to. Maximum of 100 IDs per request.
     * @return array<string>|null
    */
    public function getSubscriptionIds(): ?array {
        return $this->subscriptionIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeCollectionOfPrimitiveValues('subscriptionIds', $this->getSubscriptionIds());
    }

    /**
     * Sets the action property value. The action to perform on all provided subscriptions. One of `cancel`, `enable-auto-renew`, `disable-auto-renew`, `delete`. The `delete` action is only available in test mode.
     * @param BatchSubscriptionActionsRequestSchema_action|null $value Value to set for the action property.
    */
    public function setAction(?BatchSubscriptionActionsRequestSchema_action $value): void {
        $this->action = $value;
    }

    /**
     * Sets the subscriptionIds property value. The IDs of the subscriptions to apply the action to. Maximum of 100 IDs per request.
     * @param array<string>|null $value Value to set for the subscriptionIds property.
    */
    public function setSubscriptionIds(?array $value): void {
        $this->subscriptionIds = $value;
    }

}
