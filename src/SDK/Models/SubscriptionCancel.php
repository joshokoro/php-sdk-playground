<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Enables a customer to cancel their subscription.
*/
class SubscriptionCancel implements Parsable 
{
    /**
     * @var bool|null $enabled Whether to enable this feature in the portal.
    */
    private ?bool $enabled = null;
    
    /**
     * @var SubscriptionCancel_when|null $when `now` cancels the subscription immediately. `end` schedules cancellation at the end of the current billing period.
    */
    private ?SubscriptionCancel_when $when = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionCancel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionCancel {
        return new SubscriptionCancel();
    }

    /**
     * Gets the enabled property value. Whether to enable this feature in the portal.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'when' => fn(ParseNode $n) => $o->setWhen($n->getEnumValue(SubscriptionCancel_when::class)),
        ];
    }

    /**
     * Gets the when property value. `now` cancels the subscription immediately. `end` schedules cancellation at the end of the current billing period.
     * @return SubscriptionCancel_when|null
    */
    public function getWhen(): ?SubscriptionCancel_when {
        return $this->when;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeEnumValue('when', $this->getWhen());
    }

    /**
     * Sets the enabled property value. Whether to enable this feature in the portal.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the when property value. `now` cancels the subscription immediately. `end` schedules cancellation at the end of the current billing period.
     * @param SubscriptionCancel_when|null $value Value to set for the when property.
    */
    public function setWhen(?SubscriptionCancel_when $value): void {
        $this->when = $value;
    }

}
