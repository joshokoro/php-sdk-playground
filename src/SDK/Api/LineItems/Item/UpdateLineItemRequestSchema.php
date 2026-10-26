<?php

namespace Salable\SDK\Api\LineItems\Item;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Salable\SDK\Models\UpdateLineItemRequestSchemaFlatRate;
use Salable\SDK\Models\UpdateLineItemRequestSchemaMetered;
use Salable\SDK\Models\UpdateLineItemRequestSchemaPerSeat;

/**
 * Composed type wrapper for classes UpdateLineItemRequestSchemaFlatRate, UpdateLineItemRequestSchemaMetered, UpdateLineItemRequestSchemaPerSeat
*/
class UpdateLineItemRequestSchema implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var UpdateLineItemRequestSchemaFlatRate|null $updateLineItemRequestSchemaFlatRate Composed type representation for type UpdateLineItemRequestSchemaFlatRate
    */
    private ?UpdateLineItemRequestSchemaFlatRate $updateLineItemRequestSchemaFlatRate = null;
    
    /**
     * @var UpdateLineItemRequestSchemaMetered|null $updateLineItemRequestSchemaMetered Composed type representation for type UpdateLineItemRequestSchemaMetered
    */
    private ?UpdateLineItemRequestSchemaMetered $updateLineItemRequestSchemaMetered = null;
    
    /**
     * @var UpdateLineItemRequestSchemaPerSeat|null $updateLineItemRequestSchemaPerSeat Composed type representation for type UpdateLineItemRequestSchemaPerSeat
    */
    private ?UpdateLineItemRequestSchemaPerSeat $updateLineItemRequestSchemaPerSeat = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchema {
        $result = new UpdateLineItemRequestSchema();
        $result->setUpdateLineItemRequestSchemaFlatRate(new UpdateLineItemRequestSchemaFlatRate());
        $result->setUpdateLineItemRequestSchemaMetered(new UpdateLineItemRequestSchemaMetered());
        $result->setUpdateLineItemRequestSchemaPerSeat(new UpdateLineItemRequestSchemaPerSeat());
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateLineItemRequestSchemaFlatRate() !== null || $this->getUpdateLineItemRequestSchemaMetered() !== null || $this->getUpdateLineItemRequestSchemaPerSeat() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateLineItemRequestSchemaFlatRate(), $this->getUpdateLineItemRequestSchemaMetered(), $this->getUpdateLineItemRequestSchemaPerSeat());
        }
        return [];
    }

    /**
     * Gets the UpdateLineItemRequestSchemaFlatRate property value. Composed type representation for type UpdateLineItemRequestSchemaFlatRate
     * @return UpdateLineItemRequestSchemaFlatRate|null
    */
    public function getUpdateLineItemRequestSchemaFlatRate(): ?UpdateLineItemRequestSchemaFlatRate {
        return $this->updateLineItemRequestSchemaFlatRate;
    }

    /**
     * Gets the UpdateLineItemRequestSchemaMetered property value. Composed type representation for type UpdateLineItemRequestSchemaMetered
     * @return UpdateLineItemRequestSchemaMetered|null
    */
    public function getUpdateLineItemRequestSchemaMetered(): ?UpdateLineItemRequestSchemaMetered {
        return $this->updateLineItemRequestSchemaMetered;
    }

    /**
     * Gets the UpdateLineItemRequestSchemaPerSeat property value. Composed type representation for type UpdateLineItemRequestSchemaPerSeat
     * @return UpdateLineItemRequestSchemaPerSeat|null
    */
    public function getUpdateLineItemRequestSchemaPerSeat(): ?UpdateLineItemRequestSchemaPerSeat {
        return $this->updateLineItemRequestSchemaPerSeat;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getUpdateLineItemRequestSchemaFlatRate(), $this->getUpdateLineItemRequestSchemaMetered(), $this->getUpdateLineItemRequestSchemaPerSeat());
    }

    /**
     * Sets the UpdateLineItemRequestSchemaFlatRate property value. Composed type representation for type UpdateLineItemRequestSchemaFlatRate
     * @param UpdateLineItemRequestSchemaFlatRate|null $value Value to set for the UpdateLineItemRequestSchemaFlatRate property.
    */
    public function setUpdateLineItemRequestSchemaFlatRate(?UpdateLineItemRequestSchemaFlatRate $value): void {
        $this->updateLineItemRequestSchemaFlatRate = $value;
    }

    /**
     * Sets the UpdateLineItemRequestSchemaMetered property value. Composed type representation for type UpdateLineItemRequestSchemaMetered
     * @param UpdateLineItemRequestSchemaMetered|null $value Value to set for the UpdateLineItemRequestSchemaMetered property.
    */
    public function setUpdateLineItemRequestSchemaMetered(?UpdateLineItemRequestSchemaMetered $value): void {
        $this->updateLineItemRequestSchemaMetered = $value;
    }

    /**
     * Sets the UpdateLineItemRequestSchemaPerSeat property value. Composed type representation for type UpdateLineItemRequestSchemaPerSeat
     * @param UpdateLineItemRequestSchemaPerSeat|null $value Value to set for the UpdateLineItemRequestSchemaPerSeat property.
    */
    public function setUpdateLineItemRequestSchemaPerSeat(?UpdateLineItemRequestSchemaPerSeat $value): void {
        $this->updateLineItemRequestSchemaPerSeat = $value;
    }

}
