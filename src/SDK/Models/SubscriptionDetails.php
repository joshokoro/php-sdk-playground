<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubscriptionDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SubscriptionDetailsMetadata|null $metadata The metadata property
    */
    private ?SubscriptionDetailsMetadata $metadata = null;
    
    /**
     * @var string|null $subscription The subscription property
    */
    private ?string $subscription = null;
    
    /**
     * Instantiates a new SubscriptionDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubscriptionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubscriptionDetails {
        return new SubscriptionDetails();
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
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([SubscriptionDetailsMetadata::class, 'createFromDiscriminatorValue'])),
            'subscription' => fn(ParseNode $n) => $o->setSubscription($n->getStringValue()),
        ];
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return SubscriptionDetailsMetadata|null
    */
    public function getMetadata(): ?SubscriptionDetailsMetadata {
        return $this->metadata;
    }

    /**
     * Gets the subscription property value. The subscription property
     * @return string|null
    */
    public function getSubscription(): ?string {
        return $this->subscription;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('subscription', $this->getSubscription());
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
     * Sets the metadata property value. The metadata property
     * @param SubscriptionDetailsMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?SubscriptionDetailsMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the subscription property value. The subscription property
     * @param string|null $value Value to set for the subscription property.
    */
    public function setSubscription(?string $value): void {
        $this->subscription = $value;
    }

}
