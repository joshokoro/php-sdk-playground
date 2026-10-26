<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Composed type wrapper for classes UpdateSubscriptionItemsRequestSchemaAdd, UpdateSubscriptionItemsRequestSchemaRemove, UpdateSubscriptionItemsRequestSchemaReplace
*/
class UpdateSubscriptionItemsRequestSchema_items implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var UpdateSubscriptionItemsRequestSchemaAdd|null $updateSubscriptionItemsRequestSchemaAdd Composed type representation for type UpdateSubscriptionItemsRequestSchemaAdd
    */
    private ?UpdateSubscriptionItemsRequestSchemaAdd $updateSubscriptionItemsRequestSchemaAdd = null;
    
    /**
     * @var UpdateSubscriptionItemsRequestSchemaRemove|null $updateSubscriptionItemsRequestSchemaRemove Composed type representation for type UpdateSubscriptionItemsRequestSchemaRemove
    */
    private ?UpdateSubscriptionItemsRequestSchemaRemove $updateSubscriptionItemsRequestSchemaRemove = null;
    
    /**
     * @var UpdateSubscriptionItemsRequestSchemaReplace|null $updateSubscriptionItemsRequestSchemaReplace Composed type representation for type UpdateSubscriptionItemsRequestSchemaReplace
    */
    private ?UpdateSubscriptionItemsRequestSchemaReplace $updateSubscriptionItemsRequestSchemaReplace = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSubscriptionItemsRequestSchema_items
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSubscriptionItemsRequestSchema_items {
        $result = new UpdateSubscriptionItemsRequestSchema_items();
        $result->setUpdateSubscriptionItemsRequestSchemaAdd(new UpdateSubscriptionItemsRequestSchemaAdd());
        $result->setUpdateSubscriptionItemsRequestSchemaRemove(new UpdateSubscriptionItemsRequestSchemaRemove());
        $result->setUpdateSubscriptionItemsRequestSchemaReplace(new UpdateSubscriptionItemsRequestSchemaReplace());
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getUpdateSubscriptionItemsRequestSchemaAdd() !== null || $this->getUpdateSubscriptionItemsRequestSchemaRemove() !== null || $this->getUpdateSubscriptionItemsRequestSchemaReplace() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getUpdateSubscriptionItemsRequestSchemaAdd(), $this->getUpdateSubscriptionItemsRequestSchemaRemove(), $this->getUpdateSubscriptionItemsRequestSchemaReplace());
        }
        return [];
    }

    /**
     * Gets the UpdateSubscriptionItemsRequestSchemaAdd property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaAdd
     * @return UpdateSubscriptionItemsRequestSchemaAdd|null
    */
    public function getUpdateSubscriptionItemsRequestSchemaAdd(): ?UpdateSubscriptionItemsRequestSchemaAdd {
        return $this->updateSubscriptionItemsRequestSchemaAdd;
    }

    /**
     * Gets the UpdateSubscriptionItemsRequestSchemaRemove property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaRemove
     * @return UpdateSubscriptionItemsRequestSchemaRemove|null
    */
    public function getUpdateSubscriptionItemsRequestSchemaRemove(): ?UpdateSubscriptionItemsRequestSchemaRemove {
        return $this->updateSubscriptionItemsRequestSchemaRemove;
    }

    /**
     * Gets the UpdateSubscriptionItemsRequestSchemaReplace property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaReplace
     * @return UpdateSubscriptionItemsRequestSchemaReplace|null
    */
    public function getUpdateSubscriptionItemsRequestSchemaReplace(): ?UpdateSubscriptionItemsRequestSchemaReplace {
        return $this->updateSubscriptionItemsRequestSchemaReplace;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getUpdateSubscriptionItemsRequestSchemaAdd(), $this->getUpdateSubscriptionItemsRequestSchemaRemove(), $this->getUpdateSubscriptionItemsRequestSchemaReplace());
    }

    /**
     * Sets the UpdateSubscriptionItemsRequestSchemaAdd property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaAdd
     * @param UpdateSubscriptionItemsRequestSchemaAdd|null $value Value to set for the UpdateSubscriptionItemsRequestSchemaAdd property.
    */
    public function setUpdateSubscriptionItemsRequestSchemaAdd(?UpdateSubscriptionItemsRequestSchemaAdd $value): void {
        $this->updateSubscriptionItemsRequestSchemaAdd = $value;
    }

    /**
     * Sets the UpdateSubscriptionItemsRequestSchemaRemove property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaRemove
     * @param UpdateSubscriptionItemsRequestSchemaRemove|null $value Value to set for the UpdateSubscriptionItemsRequestSchemaRemove property.
    */
    public function setUpdateSubscriptionItemsRequestSchemaRemove(?UpdateSubscriptionItemsRequestSchemaRemove $value): void {
        $this->updateSubscriptionItemsRequestSchemaRemove = $value;
    }

    /**
     * Sets the UpdateSubscriptionItemsRequestSchemaReplace property value. Composed type representation for type UpdateSubscriptionItemsRequestSchemaReplace
     * @param UpdateSubscriptionItemsRequestSchemaReplace|null $value Value to set for the UpdateSubscriptionItemsRequestSchemaReplace property.
    */
    public function setUpdateSubscriptionItemsRequestSchemaReplace(?UpdateSubscriptionItemsRequestSchemaReplace $value): void {
        $this->updateSubscriptionItemsRequestSchemaReplace = $value;
    }

}
