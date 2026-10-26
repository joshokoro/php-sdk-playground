<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PaymentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PaymentMethodOptions|null $payment_method_options The payment_method_options property
    */
    private ?PaymentMethodOptions $payment_method_options = null;
    
    /**
     * Instantiates a new PaymentSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentSettings {
        return new PaymentSettings();
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
            'payment_method_options' => fn(ParseNode $n) => $o->setPaymentMethodOptions($n->getObjectValue([PaymentMethodOptions::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the payment_method_options property value. The payment_method_options property
     * @return PaymentMethodOptions|null
    */
    public function getPaymentMethodOptions(): ?PaymentMethodOptions {
        return $this->payment_method_options;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('payment_method_options', $this->getPaymentMethodOptions());
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
     * Sets the payment_method_options property value. The payment_method_options property
     * @param PaymentMethodOptions|null $value Value to set for the payment_method_options property.
    */
    public function setPaymentMethodOptions(?PaymentMethodOptions $value): void {
        $this->payment_method_options = $value;
    }

}
