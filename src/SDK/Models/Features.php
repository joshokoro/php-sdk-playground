<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The portal features to enable for this session.
*/
class Features implements Parsable 
{
    /**
     * @var CustomerUpdate|null $customerUpdate Enables a customer to update their personal information.
    */
    private ?CustomerUpdate $customerUpdate = null;
    
    /**
     * @var InvoiceHistory|null $invoiceHistory Enables a customer to view their invoice history.
    */
    private ?InvoiceHistory $invoiceHistory = null;
    
    /**
     * @var PaymentMethodUpdate|null $paymentMethodUpdate Enables a customer to update their payment card details.
    */
    private ?PaymentMethodUpdate $paymentMethodUpdate = null;
    
    /**
     * @var SubscriptionCancel|null $subscriptionCancel Enables a customer to cancel their subscription.
    */
    private ?SubscriptionCancel $subscriptionCancel = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Features
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Features {
        return new Features();
    }

    /**
     * Gets the customerUpdate property value. Enables a customer to update their personal information.
     * @return CustomerUpdate|null
    */
    public function getCustomerUpdate(): ?CustomerUpdate {
        return $this->customerUpdate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customerUpdate' => fn(ParseNode $n) => $o->setCustomerUpdate($n->getObjectValue([CustomerUpdate::class, 'createFromDiscriminatorValue'])),
            'invoiceHistory' => fn(ParseNode $n) => $o->setInvoiceHistory($n->getObjectValue([InvoiceHistory::class, 'createFromDiscriminatorValue'])),
            'paymentMethodUpdate' => fn(ParseNode $n) => $o->setPaymentMethodUpdate($n->getObjectValue([PaymentMethodUpdate::class, 'createFromDiscriminatorValue'])),
            'subscriptionCancel' => fn(ParseNode $n) => $o->setSubscriptionCancel($n->getObjectValue([SubscriptionCancel::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the invoiceHistory property value. Enables a customer to view their invoice history.
     * @return InvoiceHistory|null
    */
    public function getInvoiceHistory(): ?InvoiceHistory {
        return $this->invoiceHistory;
    }

    /**
     * Gets the paymentMethodUpdate property value. Enables a customer to update their payment card details.
     * @return PaymentMethodUpdate|null
    */
    public function getPaymentMethodUpdate(): ?PaymentMethodUpdate {
        return $this->paymentMethodUpdate;
    }

    /**
     * Gets the subscriptionCancel property value. Enables a customer to cancel their subscription.
     * @return SubscriptionCancel|null
    */
    public function getSubscriptionCancel(): ?SubscriptionCancel {
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
     * @param CustomerUpdate|null $value Value to set for the customerUpdate property.
    */
    public function setCustomerUpdate(?CustomerUpdate $value): void {
        $this->customerUpdate = $value;
    }

    /**
     * Sets the invoiceHistory property value. Enables a customer to view their invoice history.
     * @param InvoiceHistory|null $value Value to set for the invoiceHistory property.
    */
    public function setInvoiceHistory(?InvoiceHistory $value): void {
        $this->invoiceHistory = $value;
    }

    /**
     * Sets the paymentMethodUpdate property value. Enables a customer to update their payment card details.
     * @param PaymentMethodUpdate|null $value Value to set for the paymentMethodUpdate property.
    */
    public function setPaymentMethodUpdate(?PaymentMethodUpdate $value): void {
        $this->paymentMethodUpdate = $value;
    }

    /**
     * Sets the subscriptionCancel property value. Enables a customer to cancel their subscription.
     * @param SubscriptionCancel|null $value Value to set for the subscriptionCancel property.
    */
    public function setSubscriptionCancel(?SubscriptionCancel $value): void {
        $this->subscriptionCancel = $value;
    }

}
