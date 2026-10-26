<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateLineItemResponseSchemaData implements Parsable 
{
    /**
     * @var bool|null $allowChangingQuantity The allowChangingQuantity property
    */
    private ?bool $allowChangingQuantity = null;
    
    /**
     * @var string|null $archivedAt The archivedAt property
    */
    private ?string $archivedAt = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isActive The isActive property
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isUnlimited The isUnlimited property
    */
    private ?bool $isUnlimited = null;
    
    /**
     * @var int|null $maxQuantity The maxQuantity property
    */
    private ?int $maxQuantity = null;
    
    /**
     * @var string|null $meterId The meterId property
    */
    private ?string $meterId = null;
    
    /**
     * @var int|null $minQuantity The minQuantity property
    */
    private ?int $minQuantity = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $nickname The nickname property
    */
    private ?string $nickname = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $planId The planId property
    */
    private ?string $planId = null;
    
    /**
     * @var UpdateLineItemResponseSchemaData_priceType|null $priceType The priceType property
    */
    private ?UpdateLineItemResponseSchemaData_priceType $priceType = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var string|null $stripeProductId The stripeProductId property
    */
    private ?string $stripeProductId = null;
    
    /**
     * @var string|null $unitLabel The unitLabel property
    */
    private ?string $unitLabel = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemResponseSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemResponseSchemaData {
        return new UpdateLineItemResponseSchemaData();
    }

    /**
     * Gets the allowChangingQuantity property value. The allowChangingQuantity property
     * @return bool|null
    */
    public function getAllowChangingQuantity(): ?bool {
        return $this->allowChangingQuantity;
    }

    /**
     * Gets the archivedAt property value. The archivedAt property
     * @return string|null
    */
    public function getArchivedAt(): ?string {
        return $this->archivedAt;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowChangingQuantity' => fn(ParseNode $n) => $o->setAllowChangingQuantity($n->getBooleanValue()),
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isUnlimited' => fn(ParseNode $n) => $o->setIsUnlimited($n->getBooleanValue()),
            'maxQuantity' => fn(ParseNode $n) => $o->setMaxQuantity($n->getIntegerValue()),
            'meterId' => fn(ParseNode $n) => $o->setMeterId($n->getStringValue()),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getObjectValue([UpdateLineItemResponseSchemaData_priceType::class, 'createFromDiscriminatorValue'])),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'stripeProductId' => fn(ParseNode $n) => $o->setStripeProductId($n->getStringValue()),
            'unitLabel' => fn(ParseNode $n) => $o->setUnitLabel($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isActive property value. The isActive property
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isUnlimited property value. The isUnlimited property
     * @return bool|null
    */
    public function getIsUnlimited(): ?bool {
        return $this->isUnlimited;
    }

    /**
     * Gets the maxQuantity property value. The maxQuantity property
     * @return int|null
    */
    public function getMaxQuantity(): ?int {
        return $this->maxQuantity;
    }

    /**
     * Gets the meterId property value. The meterId property
     * @return string|null
    */
    public function getMeterId(): ?string {
        return $this->meterId;
    }

    /**
     * Gets the minQuantity property value. The minQuantity property
     * @return int|null
    */
    public function getMinQuantity(): ?int {
        return $this->minQuantity;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the nickname property value. The nickname property
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the planId property value. The planId property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the priceType property value. The priceType property
     * @return UpdateLineItemResponseSchemaData_priceType|null
    */
    public function getPriceType(): ?UpdateLineItemResponseSchemaData_priceType {
        return $this->priceType;
    }

    /**
     * Gets the slug property value. The slug property
     * @return string|null
    */
    public function getSlug(): ?string {
        return $this->slug;
    }

    /**
     * Gets the stripeProductId property value. The stripeProductId property
     * @return string|null
    */
    public function getStripeProductId(): ?string {
        return $this->stripeProductId;
    }

    /**
     * Gets the unitLabel property value. The unitLabel property
     * @return string|null
    */
    public function getUnitLabel(): ?string {
        return $this->unitLabel;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowChangingQuantity', $this->getAllowChangingQuantity());
        $writer->writeStringValue('archivedAt', $this->getArchivedAt());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isUnlimited', $this->getIsUnlimited());
        $writer->writeIntegerValue('maxQuantity', $this->getMaxQuantity());
        $writer->writeStringValue('meterId', $this->getMeterId());
        $writer->writeIntegerValue('minQuantity', $this->getMinQuantity());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeObjectValue('priceType', $this->getPriceType());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeStringValue('stripeProductId', $this->getStripeProductId());
        $writer->writeStringValue('unitLabel', $this->getUnitLabel());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
    }

    /**
     * Sets the allowChangingQuantity property value. The allowChangingQuantity property
     * @param bool|null $value Value to set for the allowChangingQuantity property.
    */
    public function setAllowChangingQuantity(?bool $value): void {
        $this->allowChangingQuantity = $value;
    }

    /**
     * Sets the archivedAt property value. The archivedAt property
     * @param string|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?string $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isActive property value. The isActive property
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isUnlimited property value. The isUnlimited property
     * @param bool|null $value Value to set for the isUnlimited property.
    */
    public function setIsUnlimited(?bool $value): void {
        $this->isUnlimited = $value;
    }

    /**
     * Sets the maxQuantity property value. The maxQuantity property
     * @param int|null $value Value to set for the maxQuantity property.
    */
    public function setMaxQuantity(?int $value): void {
        $this->maxQuantity = $value;
    }

    /**
     * Sets the meterId property value. The meterId property
     * @param string|null $value Value to set for the meterId property.
    */
    public function setMeterId(?string $value): void {
        $this->meterId = $value;
    }

    /**
     * Sets the minQuantity property value. The minQuantity property
     * @param int|null $value Value to set for the minQuantity property.
    */
    public function setMinQuantity(?int $value): void {
        $this->minQuantity = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the nickname property value. The nickname property
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->nickname = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the planId property value. The planId property
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

    /**
     * Sets the priceType property value. The priceType property
     * @param UpdateLineItemResponseSchemaData_priceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?UpdateLineItemResponseSchemaData_priceType $value): void {
        $this->priceType = $value;
    }

    /**
     * Sets the slug property value. The slug property
     * @param string|null $value Value to set for the slug property.
    */
    public function setSlug(?string $value): void {
        $this->slug = $value;
    }

    /**
     * Sets the stripeProductId property value. The stripeProductId property
     * @param string|null $value Value to set for the stripeProductId property.
    */
    public function setStripeProductId(?string $value): void {
        $this->stripeProductId = $value;
    }

    /**
     * Sets the unitLabel property value. The unitLabel property
     * @param string|null $value Value to set for the unitLabel property.
    */
    public function setUnitLabel(?string $value): void {
        $this->unitLabel = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
