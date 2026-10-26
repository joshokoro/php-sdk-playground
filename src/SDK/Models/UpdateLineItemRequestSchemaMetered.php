<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateLineItemRequestSchemaMetered implements Parsable 
{
    /**
     * @var bool|null $allowChangingQuantity The allowChangingQuantity property
    */
    private ?bool $allowChangingQuantity = null;
    
    /**
     * @var UpdateLineItemRequestSchemaMetered_billingScheme|null $billingScheme The billingScheme property
    */
    private ?UpdateLineItemRequestSchemaMetered_billingScheme $billingScheme = null;
    
    /**
     * @var UpdateLineItemRequestSchemaMetered_intervalType|null $intervalType The intervalType property
    */
    private ?UpdateLineItemRequestSchemaMetered_intervalType $intervalType = null;
    
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
     * @var string|null $meterSlug The meterSlug property
    */
    private ?string $meterSlug = null;
    
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
     * @var string|null $priceType The priceType property
    */
    private ?string $priceType = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var UpdateLineItemRequestSchemaMetered_tiersMode|null $tiersMode The tiersMode property
    */
    private ?UpdateLineItemRequestSchemaMetered_tiersMode $tiersMode = null;
    
    /**
     * @var string|null $unitLabel The unitLabel property
    */
    private ?string $unitLabel = null;
    
    /**
     * Instantiates a new UpdateLineItemRequestSchemaMetered and sets the default values.
    */
    public function __construct() {
        $this->setAllowChangingQuantity(false);
        $this->setIsActive(true);
        $this->setIsUnlimited(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaMetered
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaMetered {
        return new UpdateLineItemRequestSchemaMetered();
    }

    /**
     * Gets the allowChangingQuantity property value. The allowChangingQuantity property
     * @return bool|null
    */
    public function getAllowChangingQuantity(): ?bool {
        return $this->allowChangingQuantity;
    }

    /**
     * Gets the billingScheme property value. The billingScheme property
     * @return UpdateLineItemRequestSchemaMetered_billingScheme|null
    */
    public function getBillingScheme(): ?UpdateLineItemRequestSchemaMetered_billingScheme {
        return $this->billingScheme;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowChangingQuantity' => fn(ParseNode $n) => $o->setAllowChangingQuantity($n->getBooleanValue()),
            'billingScheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getEnumValue(UpdateLineItemRequestSchemaMetered_billingScheme::class)),
            'intervalType' => fn(ParseNode $n) => $o->setIntervalType($n->getEnumValue(UpdateLineItemRequestSchemaMetered_intervalType::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isUnlimited' => fn(ParseNode $n) => $o->setIsUnlimited($n->getBooleanValue()),
            'maxQuantity' => fn(ParseNode $n) => $o->setMaxQuantity($n->getIntegerValue()),
            'meterSlug' => fn(ParseNode $n) => $o->setMeterSlug($n->getStringValue()),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'tiersMode' => fn(ParseNode $n) => $o->setTiersMode($n->getEnumValue(UpdateLineItemRequestSchemaMetered_tiersMode::class)),
            'unitLabel' => fn(ParseNode $n) => $o->setUnitLabel($n->getStringValue()),
        ];
    }

    /**
     * Gets the intervalType property value. The intervalType property
     * @return UpdateLineItemRequestSchemaMetered_intervalType|null
    */
    public function getIntervalType(): ?UpdateLineItemRequestSchemaMetered_intervalType {
        return $this->intervalType;
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
     * Gets the meterSlug property value. The meterSlug property
     * @return string|null
    */
    public function getMeterSlug(): ?string {
        return $this->meterSlug;
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
     * Gets the priceType property value. The priceType property
     * @return string|null
    */
    public function getPriceType(): ?string {
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
     * Gets the tiersMode property value. The tiersMode property
     * @return UpdateLineItemRequestSchemaMetered_tiersMode|null
    */
    public function getTiersMode(): ?UpdateLineItemRequestSchemaMetered_tiersMode {
        return $this->tiersMode;
    }

    /**
     * Gets the unitLabel property value. The unitLabel property
     * @return string|null
    */
    public function getUnitLabel(): ?string {
        return $this->unitLabel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowChangingQuantity', $this->getAllowChangingQuantity());
        $writer->writeEnumValue('billingScheme', $this->getBillingScheme());
        $writer->writeEnumValue('intervalType', $this->getIntervalType());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isUnlimited', $this->getIsUnlimited());
        $writer->writeIntegerValue('maxQuantity', $this->getMaxQuantity());
        $writer->writeStringValue('meterSlug', $this->getMeterSlug());
        $writer->writeIntegerValue('minQuantity', $this->getMinQuantity());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('priceType', $this->getPriceType());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeEnumValue('tiersMode', $this->getTiersMode());
        $writer->writeStringValue('unitLabel', $this->getUnitLabel());
    }

    /**
     * Sets the allowChangingQuantity property value. The allowChangingQuantity property
     * @param bool|null $value Value to set for the allowChangingQuantity property.
    */
    public function setAllowChangingQuantity(?bool $value): void {
        $this->allowChangingQuantity = $value;
    }

    /**
     * Sets the billingScheme property value. The billingScheme property
     * @param UpdateLineItemRequestSchemaMetered_billingScheme|null $value Value to set for the billingScheme property.
    */
    public function setBillingScheme(?UpdateLineItemRequestSchemaMetered_billingScheme $value): void {
        $this->billingScheme = $value;
    }

    /**
     * Sets the intervalType property value. The intervalType property
     * @param UpdateLineItemRequestSchemaMetered_intervalType|null $value Value to set for the intervalType property.
    */
    public function setIntervalType(?UpdateLineItemRequestSchemaMetered_intervalType $value): void {
        $this->intervalType = $value;
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
     * Sets the meterSlug property value. The meterSlug property
     * @param string|null $value Value to set for the meterSlug property.
    */
    public function setMeterSlug(?string $value): void {
        $this->meterSlug = $value;
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
     * Sets the priceType property value. The priceType property
     * @param string|null $value Value to set for the priceType property.
    */
    public function setPriceType(?string $value): void {
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
     * Sets the tiersMode property value. The tiersMode property
     * @param UpdateLineItemRequestSchemaMetered_tiersMode|null $value Value to set for the tiersMode property.
    */
    public function setTiersMode(?UpdateLineItemRequestSchemaMetered_tiersMode $value): void {
        $this->tiersMode = $value;
    }

    /**
     * Sets the unitLabel property value. The unitLabel property
     * @param string|null $value Value to set for the unitLabel property.
    */
    public function setUnitLabel(?string $value): void {
        $this->unitLabel = $value;
    }

}
