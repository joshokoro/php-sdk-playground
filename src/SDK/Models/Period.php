<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Period implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $end The end property
    */
    private ?int $end = null;
    
    /**
     * @var int|null $start The start property
    */
    private ?int $start = null;
    
    /**
     * Instantiates a new Period and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Period
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Period {
        return new Period();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The end property
     * @return int|null
    */
    public function getEnd(): ?int {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'end' => fn(ParseNode $n) => $o->setEnd($n->getIntegerValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the start property value. The start property
     * @return int|null
    */
    public function getStart(): ?int {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('end', $this->getEnd());
        $writer->writeIntegerValue('start', $this->getStart());
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
     * Sets the end property value. The end property
     * @param int|null $value Value to set for the end property.
    */
    public function setEnd(?int $value): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The start property
     * @param int|null $value Value to set for the start property.
    */
    public function setStart(?int $value): void {
        $this->start = $value;
    }

}
