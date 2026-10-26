<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StatusTransitions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $finalized_at The finalized_at property
    */
    private ?int $finalized_at = null;
    
    /**
     * @var int|null $paid_at The paid_at property
    */
    private ?int $paid_at = null;
    
    /**
     * Instantiates a new StatusTransitions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatusTransitions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatusTransitions {
        return new StatusTransitions();
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
            'finalized_at' => fn(ParseNode $n) => $o->setFinalizedAt($n->getIntegerValue()),
            'paid_at' => fn(ParseNode $n) => $o->setPaidAt($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the finalized_at property value. The finalized_at property
     * @return int|null
    */
    public function getFinalizedAt(): ?int {
        return $this->finalized_at;
    }

    /**
     * Gets the paid_at property value. The paid_at property
     * @return int|null
    */
    public function getPaidAt(): ?int {
        return $this->paid_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('finalized_at', $this->getFinalizedAt());
        $writer->writeIntegerValue('paid_at', $this->getPaidAt());
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
     * Sets the finalized_at property value. The finalized_at property
     * @param int|null $value Value to set for the finalized_at property.
    */
    public function setFinalizedAt(?int $value): void {
        $this->finalized_at = $value;
    }

    /**
     * Sets the paid_at property value. The paid_at property
     * @param int|null $value Value to set for the paid_at property.
    */
    public function setPaidAt(?int $value): void {
        $this->paid_at = $value;
    }

}
