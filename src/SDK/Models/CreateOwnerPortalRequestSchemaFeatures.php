<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The portal features to enable for this session.
*/
class CreateOwnerPortalRequestSchemaFeatures implements Parsable 
{
    /**
     * @var FeaturesCustomerUpdate|null $customerUpdate Enables a customer to update their personal information.
    */
    private ?FeaturesCustomerUpdate $customerUpdate = null;
    
    /**
     * @var FeaturesInvoiceHistory|null $invoiceHistory Enables a customer to view their invoice history.
    */
    private ?FeaturesInvoiceHistory $invoiceHistory = null;
    
    /**
     * @var FeaturesPaymentMethodUpdate|null $paymentMethodUpdate Enables a customer to update their payment card details.
    */
    private ?FeaturesPaymentMethodUpdate $paymentMethodUpdate = null;
    
    /**
     * @var FeaturesSubscriptionCancel|null $subscriptionCancel Enables a customer to cancel their subscription.
    */
    private ?FeaturesSubscriptionCancel $subscriptionCancel = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateOwnerPortalRequestSchemaFeatures
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateOwnerPortalRequestSchemaFeatures {
        return new CreateOwnerPortalRequestSchemaFeatures();
    }

    /**
     * Gets the customerUpdate property value. Enables a customer to update their personal information.
     * @return FeaturesCustomerUpdate|null
    */
    public function getCustomerUpdate(): ?FeaturesCustomerUpdate {
        return $this->customerUpdate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customerUpdate' => fn(ParseNode $n) => $o->setCustomerUpdate($n->getObjectValue([FeaturesCustomerUpdate::class, 'createFromDiscriminatorValue'])),
            'invoiceHistory' => fn(ParseNode $n) => $o->setInvoiceHistory($n->getObjectValue([FeaturesInvoiceHistory::class, 'createFromDiscriminatorValue'])),
            'paymentMethodUpdate' => fn(ParseNode $n) => $o->setPaymentMethodUpdate($n->getObjectValue([FeaturesPaymentMethodUpdate::class, 'createFromDiscriminatorValue'])),
            'subscriptionCancel' => fn(ParseNode $n) => $o->setSubscriptionCancel($n->getObjectValue([FeaturesSubscriptionCancel::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the invoiceHistory property value. Enables a customer to view their invoice history.
     * @return FeaturesInvoiceHistory|null
    */
    public function getInvoiceHistory(): ?FeaturesInvoiceHistory {
        return $this->invoiceHistory;
    }

    /**
     * Gets the paymentMethodUpdate property value. Enables a customer to update their payment card details.
     * @return FeaturesPaymentMethodUpdate|null
    */
    public function getPaymentMethodUpdate(): ?FeaturesPaymentMethodUpdate {
        return $this->paymentMethodUpdate;
    }

    /**
     * Gets the subscriptionCancel property value. Enables a customer to cancel their subscription.
     * @return FeaturesSubscriptionCancel|null
    */
    public function getSubscriptionCancel(): ?FeaturesSubscriptionCancel {
        return $this->subscriptionCancel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('customerUpdate', $this->getCustomerUpdate());
        $writer->writeObjectValue('invoiceHistory', $this->getInvoiceHistory());
        $writer->writeObjectValue('paymentMethodUpdate', $this->getPaymentMethodUpdate());
        $writer->writeObjectValue('subscriptionCancel', $this->getSubscriptionCancel());
    }

    /**
     * Sets the customerUpdate property value. Enables a customer to update their personal information.
     * @param FeaturesCustomerUpdate|null $value Value to set for the customerUpdate property.
    */
    public function setCustomerUpdate(?FeaturesCustomerUpdate $value): void {
        $this->customerUpdate = $value;
    }

    /**
     * Sets the invoiceHistory property value. Enables a customer to view their invoice history.
     * @param FeaturesInvoiceHistory|null $value Value to set for the invoiceHistory property.
    */
    public function setInvoiceHistory(?FeaturesInvoiceHistory $value): void {
        $this->invoiceHistory = $value;
    }

    /**
     * Sets the paymentMethodUpdate property value. Enables a customer to update their payment card details.
     * @param FeaturesPaymentMethodUpdate|null $value Value to set for the paymentMethodUpdate property.
    */
    public function setPaymentMethodUpdate(?FeaturesPaymentMethodUpdate $value): void {
        $this->paymentMethodUpdate = $value;
    }

    /**
     * Sets the subscriptionCancel property value. Enables a customer to cancel their subscription.
     * @param FeaturesSubscriptionCancel|null $value Value to set for the subscriptionCancel property.
    */
    public function setSubscriptionCancel(?FeaturesSubscriptionCancel $value): void {
        $this->subscriptionCancel = $value;
    }

}
