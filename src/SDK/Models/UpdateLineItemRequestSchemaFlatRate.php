<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateLineItemRequestSchemaFlatRate implements Parsable 
{
    /**
     * @var bool|null $allowChangingQuantity The allowChangingQuantity property
    */
    private ?bool $allowChangingQuantity = null;
    
    /**
     * @var UpdateLineItemRequestSchemaFlatRate_billingScheme|null $billingScheme The billingScheme property
    */
    private ?UpdateLineItemRequestSchemaFlatRate_billingScheme $billingScheme = null;
    
    /**
     * @var UpdateLineItemRequestSchemaFlatRate_intervalType|null $intervalType The intervalType property
    */
    private ?UpdateLineItemRequestSchemaFlatRate_intervalType $intervalType = null;
    
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
     * Instantiates a new UpdateLineItemRequestSchemaFlatRate and sets the default values.
    */
    public function __construct() {
        $this->setAllowChangingQuantity(false);
        $this->setIsActive(true);
        $this->setIsUnlimited(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateLineItemRequestSchemaFlatRate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateLineItemRequestSchemaFlatRate {
        return new UpdateLineItemRequestSchemaFlatRate();
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
     * @return UpdateLineItemRequestSchemaFlatRate_billingScheme|null
    */
    public function getBillingScheme(): ?UpdateLineItemRequestSchemaFlatRate_billingScheme {
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
            'billingScheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getEnumValue(UpdateLineItemRequestSchemaFlatRate_billingScheme::class)),
            'intervalType' => fn(ParseNode $n) => $o->setIntervalType($n->getEnumValue(UpdateLineItemRequestSchemaFlatRate_intervalType::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isUnlimited' => fn(ParseNode $n) => $o->setIsUnlimited($n->getBooleanValue()),
            'maxQuantity' => fn(ParseNode $n) => $o->setMaxQuantity($n->getIntegerValue()),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getStringValue()),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
        ];
    }

    /**
     * Gets the intervalType property value. The intervalType property
     * @return UpdateLineItemRequestSchemaFlatRate_intervalType|null
    */
    public function getIntervalType(): ?UpdateLineItemRequestSchemaFlatRate_intervalType {
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
        $writer->writeIntegerValue('minQuantity', $this->getMinQuantity());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('priceType', $this->getPriceType());
        $writer->writeStringValue('slug', $this->getSlug());
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
     * @param UpdateLineItemRequestSchemaFlatRate_billingScheme|null $value Value to set for the billingScheme property.
    */
    public function setBillingScheme(?UpdateLineItemRequestSchemaFlatRate_billingScheme $value): void {
        $this->billingScheme = $value;
    }

    /**
     * Sets the intervalType property value. The intervalType property
     * @param UpdateLineItemRequestSchemaFlatRate_intervalType|null $value Value to set for the intervalType property.
    */
    public function setIntervalType(?UpdateLineItemRequestSchemaFlatRate_intervalType $value): void {
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

}
