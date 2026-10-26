<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubscriptionItemDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $invoice_item The invoice_item property
    */
    private ?string $invoice_item = null;
    
    /**
     * @var bool|null $proration The proration property
    */
    private ?bool $proration = null;
    
    /**
     * @var ProrationDetails|null $proration_details The proration_details property
    */
    private ?ProrationDetails $proration_details = null;
    
    /**
     * @var string|null $subscription The subscription property
    */
    private ?string $subscription = null;
    
    /**
     * @var string|null $subscription_item The subscription_item property
    */
    private ?string $subscription_item = null;
    
    /**
     * Instantiates a new SubscriptionItemDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionItemDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionItemDetails {
        return new SubscriptionItemDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'invoice_item' => fn(ParseNode $n) => $o->setInvoiceItem($n->getStringValue()),
            'proration' => fn(ParseNode $n) => $o->setProration($n->getBooleanValue()),
            'proration_details' => fn(ParseNode $n) => $o->setProrationDetails($n->getObjectValue([ProrationDetails::class, 'createFromDiscriminatorValue'])),
            'subscription' => fn(ParseNode $n) => $o->setSubscription($n->getStringValue()),
            'subscription_item' => fn(ParseNode $n) => $o->setSubscriptionItem($n->getStringValue()),
        ];
    }

    /**
     * Gets the invoice_item property value. The invoice_item property
     * @return string|null
    */
    public function getInvoiceItem(): ?string {
        return $this->invoice_item;
    }

    /**
     * Gets the proration property value. The proration property
     * @return bool|null
    */
    public function getProration(): ?bool {
        return $this->proration;
    }

    /**
     * Gets the proration_details property value. The proration_details property
     * @return ProrationDetails|null
    */
    public function getProrationDetails(): ?ProrationDetails {
        return $this->proration_details;
    }

    /**
     * Gets the subscription property value. The subscription property
     * @return string|null
    */
    public function getSubscription(): ?string {
        return $this->subscription;
    }

    /**
     * Gets the subscription_item property value. The subscription_item property
     * @return string|null
    */
    public function getSubscriptionItem(): ?string {
        return $this->subscription_item;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('invoice_item', $this->getInvoiceItem());
        $writer->writeBooleanValue('proration', $this->getProration());
        $writer->writeObjectValue('proration_details', $this->getProrationDetails());
        $writer->writeStringValue('subscription', $this->getSubscription());
        $writer->writeStringValue('subscription_item', $this->getSubscriptionItem());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the invoice_item property value. The invoice_item property
     * @param string|null $value Value to set for the invoice_item property.
    */
    public function setInvoiceItem(?string $value): void {
        $this->invoice_item = $value;
    }

    /**
     * Sets the proration property value. The proration property
     * @param bool|null $value Value to set for the proration property.
    */
    public function setProration(?bool $value): void {
        $this->proration = $value;
    }

    /**
     * Sets the proration_details property value. The proration_details property
     * @param ProrationDetails|null $value Value to set for the proration_details property.
    */
    public function setProrationDetails(?ProrationDetails $value): void {
        $this->proration_details = $value;
    }

    /**
     * Sets the subscription property value. The subscription property
     * @param string|null $value Value to set for the subscription property.
    */
    public function setSubscription(?string $value): void {
        $this->subscription = $value;
    }

    /**
     * Sets the subscription_item property value. The subscription_item property
     * @param string|null $value Value to set for the subscription_item property.
    */
    public function setSubscriptionItem(?string $value): void {
        $this->subscription_item = $value;
    }

}
