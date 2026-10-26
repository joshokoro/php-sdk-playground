<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Recurring implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $interval The interval property
    */
    private ?string $interval = null;
    
    /**
     * @var int|null $interval_count The interval_count property
    */
    private ?int $interval_count = null;
    
    /**
     * @var string|null $usage_type The usage_type property
    */
    private ?string $usage_type = null;
    
    /**
     * Instantiates a new Recurring and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Recurring
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Recurring {
        return new Recurring();
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
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'interval_count' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'usage_type' => fn(ParseNode $n) => $o->setUsageType($n->getStringValue()),
        ];
    }

    /**
     * Gets the interval property value. The interval property
     * @return string|null
    */
    public function getInterval(): ?string {
        return $this->interval;
    }

    /**
     * Gets the interval_count property value. The interval_count property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->interval_count;
    }

    /**
     * Gets the usage_type property value. The usage_type property
     * @return string|null
    */
    public function getUsageType(): ?string {
        return $this->usage_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('interval_count', $this->getIntervalCount());
        $writer->writeStringValue('usage_type', $this->getUsageType());
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
     * Sets the interval property value. The interval property
     * @param string|null $value Value to set for the interval property.
    */
    public function setInterval(?string $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the interval_count property value. The interval_count property
     * @param int|null $value Value to set for the interval_count property.
    */
    public function setIntervalCount(?int $value): void {
        $this->interval_count = $value;
    }

    /**
     * Sets the usage_type property value. The usage_type property
     * @param string|null $value Value to set for the usage_type property.
    */
    public function setUsageType(?string $value): void {
        $this->usage_type = $value;
    }

}
