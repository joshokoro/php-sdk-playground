<?php

namespace Salable\SDK\Api\Groups\Item\Grantees;

use Microsoft\Kiota\Abstractions\Serialization\ComposedTypeWrapper;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeHelper;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Salable\SDK\Models\ManageGranteesRequestSchemaAdd;
use Salable\SDK\Models\ManageGranteesRequestSchemaRemove;
use Salable\SDK\Models\ManageGranteesRequestSchemaReplace;

/**
 * Composed type wrapper for classes ManageGranteesRequestSchemaAdd, ManageGranteesRequestSchemaRemove, ManageGranteesRequestSchemaReplace
*/
class ManageGranteesRequestSchema implements ComposedTypeWrapper, Parsable 
{
    /**
     * @var ManageGranteesRequestSchemaAdd|null $manageGranteesRequestSchemaAdd Composed type representation for type ManageGranteesRequestSchemaAdd
    */
    private ?ManageGranteesRequestSchemaAdd $manageGranteesRequestSchemaAdd = null;
    
    /**
     * @var ManageGranteesRequestSchemaRemove|null $manageGranteesRequestSchemaRemove Composed type representation for type ManageGranteesRequestSchemaRemove
    */
    private ?ManageGranteesRequestSchemaRemove $manageGranteesRequestSchemaRemove = null;
    
    /**
     * @var ManageGranteesRequestSchemaReplace|null $manageGranteesRequestSchemaReplace Composed type representation for type ManageGranteesRequestSchemaReplace
    */
    private ?ManageGranteesRequestSchemaReplace $manageGranteesRequestSchemaReplace = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManageGranteesRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManageGranteesRequestSchema {
        $result = new ManageGranteesRequestSchema();
        $result->setManageGranteesRequestSchemaAdd(new ManageGranteesRequestSchemaAdd());
        $result->setManageGranteesRequestSchemaRemove(new ManageGranteesRequestSchemaRemove());
        $result->setManageGranteesRequestSchemaReplace(new ManageGranteesRequestSchemaReplace());
        return $result;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        if ($this->getManageGranteesRequestSchemaAdd() !== null || $this->getManageGranteesRequestSchemaRemove() !== null || $this->getManageGranteesRequestSchemaReplace() !== null) {
            return ParseNodeHelper::mergeDeserializersForIntersectionWrapper($this->getManageGranteesRequestSchemaAdd(), $this->getManageGranteesRequestSchemaRemove(), $this->getManageGranteesRequestSchemaReplace());
        }
        return [];
    }

    /**
     * Gets the ManageGranteesRequestSchemaAdd property value. Composed type representation for type ManageGranteesRequestSchemaAdd
     * @return ManageGranteesRequestSchemaAdd|null
    */
    public function getManageGranteesRequestSchemaAdd(): ?ManageGranteesRequestSchemaAdd {
        return $this->manageGranteesRequestSchemaAdd;
    }

    /**
     * Gets the ManageGranteesRequestSchemaRemove property value. Composed type representation for type ManageGranteesRequestSchemaRemove
     * @return ManageGranteesRequestSchemaRemove|null
    */
    public function getManageGranteesRequestSchemaRemove(): ?ManageGranteesRequestSchemaRemove {
        return $this->manageGranteesRequestSchemaRemove;
    }

    /**
     * Gets the ManageGranteesRequestSchemaReplace property value. Composed type representation for type ManageGranteesRequestSchemaReplace
     * @return ManageGranteesRequestSchemaReplace|null
    */
    public function getManageGranteesRequestSchemaReplace(): ?ManageGranteesRequestSchemaReplace {
        return $this->manageGranteesRequestSchemaReplace;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue(null, $this->getManageGranteesRequestSchemaAdd(), $this->getManageGranteesRequestSchemaRemove(), $this->getManageGranteesRequestSchemaReplace());
    }

    /**
     * Sets the ManageGranteesRequestSchemaAdd property value. Composed type representation for type ManageGranteesRequestSchemaAdd
     * @param ManageGranteesRequestSchemaAdd|null $value Value to set for the ManageGranteesRequestSchemaAdd property.
    */
    public function setManageGranteesRequestSchemaAdd(?ManageGranteesRequestSchemaAdd $value): void {
        $this->manageGranteesRequestSchemaAdd = $value;
    }

    /**
     * Sets the ManageGranteesRequestSchemaRemove property value. Composed type representation for type ManageGranteesRequestSchemaRemove
     * @param ManageGranteesRequestSchemaRemove|null $value Value to set for the ManageGranteesRequestSchemaRemove property.
    */
    public function setManageGranteesRequestSchemaRemove(?ManageGranteesRequestSchemaRemove $value): void {
        $this->manageGranteesRequestSchemaRemove = $value;
    }

    /**
     * Sets the ManageGranteesRequestSchemaReplace property value. Composed type representation for type ManageGranteesRequestSchemaReplace
     * @param ManageGranteesRequestSchemaReplace|null $value Value to set for the ManageGranteesRequestSchemaReplace property.
    */
    public function setManageGranteesRequestSchemaReplace(?ManageGranteesRequestSchemaReplace $value): void {
        $this->manageGranteesRequestSchemaReplace = $value;
    }

}
