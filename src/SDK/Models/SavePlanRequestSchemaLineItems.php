<?php

namespace Salable\SDK\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SavePlanRequestSchemaLineItems implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowChangingQuantity The allowChangingQuantity property
    */
    private ?bool $allowChangingQuantity = null;
    
    /**
     * @var DateTime|null $archivedAt The archivedAt property
    */
    private ?DateTime $archivedAt = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_billingScheme|null $billingScheme The billingScheme property
    */
    private ?SavePlanRequestSchemaLineItems_billingScheme $billingScheme = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_intervalType|null $intervalType The intervalType property
    */
    private ?SavePlanRequestSchemaLineItems_intervalType $intervalType = null;
    
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
     * @var array<SavePlanRequestSchemaLineItems_prices>|null $prices The prices property
    */
    private ?array $prices = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_priceType|null $priceType The priceType property
    */
    private ?SavePlanRequestSchemaLineItems_priceType $priceType = null;
    
    /**
     * @var string|null $slug The slug property
    */
    private ?string $slug = null;
    
    /**
     * @var SavePlanRequestSchemaLineItems_tiersMode|null $tiersMode The tiersMode property
    */
    private ?SavePlanRequestSchemaLineItems_tiersMode $tiersMode = null;
    
    /**
     * @var string|null $unitLabel The unitLabel property
    */
    private ?string $unitLabel = null;
    
    /**
     * Instantiates a new SavePlanRequestSchemaLineItems and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setAllowChangingQuantity(false);
        $this->setIsActive(true);
        $this->setIsUnlimited(false);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SavePlanRequestSchemaLineItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SavePlanRequestSchemaLineItems {
        return new SavePlanRequestSchemaLineItems();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
     * @return DateTime|null
    */
    public function getArchivedAt(): ?DateTime {
        return $this->archivedAt;
    }

    /**
     * Gets the billingScheme property value. The billingScheme property
     * @return SavePlanRequestSchemaLineItems_billingScheme|null
    */
    public function getBillingScheme(): ?SavePlanRequestSchemaLineItems_billingScheme {
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
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'billingScheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getEnumValue(SavePlanRequestSchemaLineItems_billingScheme::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'intervalType' => fn(ParseNode $n) => $o->setIntervalType($n->getEnumValue(SavePlanRequestSchemaLineItems_intervalType::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isUnlimited' => fn(ParseNode $n) => $o->setIsUnlimited($n->getBooleanValue()),
            'maxQuantity' => fn(ParseNode $n) => $o->setMaxQuantity($n->getIntegerValue()),
            'meterSlug' => fn(ParseNode $n) => $o->setMeterSlug($n->getStringValue()),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'prices' => fn(ParseNode $n) => $o->setPrices($n->getCollectionOfObjectValues([SavePlanRequestSchemaLineItems_prices::class, 'createFromDiscriminatorValue'])),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getEnumValue(SavePlanRequestSchemaLineItems_priceType::class)),
            'slug' => fn(ParseNode $n) => $o->setSlug($n->getStringValue()),
            'tiersMode' => fn(ParseNode $n) => $o->setTiersMode($n->getEnumValue(SavePlanRequestSchemaLineItems_tiersMode::class)),
            'unitLabel' => fn(ParseNode $n) => $o->setUnitLabel($n->getStringValue()),
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
     * Gets the intervalType property value. The intervalType property
     * @return SavePlanRequestSchemaLineItems_intervalType|null
    */
    public function getIntervalType(): ?SavePlanRequestSchemaLineItems_intervalType {
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
     * Gets the prices property value. The prices property
     * @return array<SavePlanRequestSchemaLineItems_prices>|null
    */
    public function getPrices(): ?array {
        return $this->prices;
    }

    /**
     * Gets the priceType property value. The priceType property
     * @return SavePlanRequestSchemaLineItems_priceType|null
    */
    public function getPriceType(): ?SavePlanRequestSchemaLineItems_priceType {
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
     * @return SavePlanRequestSchemaLineItems_tiersMode|null
    */
    public function getTiersMode(): ?SavePlanRequestSchemaLineItems_tiersMode {
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
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeEnumValue('billingScheme', $this->getBillingScheme());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('intervalType', $this->getIntervalType());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isUnlimited', $this->getIsUnlimited());
        $writer->writeIntegerValue('maxQuantity', $this->getMaxQuantity());
        $writer->writeStringValue('meterSlug', $this->getMeterSlug());
        $writer->writeIntegerValue('minQuantity', $this->getMinQuantity());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeCollectionOfObjectValues('prices', $this->getPrices());
        $writer->writeEnumValue('priceType', $this->getPriceType());
        $writer->writeStringValue('slug', $this->getSlug());
        $writer->writeEnumValue('tiersMode', $this->getTiersMode());
        $writer->writeStringValue('unitLabel', $this->getUnitLabel());
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
     * Sets the allowChangingQuantity property value. The allowChangingQuantity property
     * @param bool|null $value Value to set for the allowChangingQuantity property.
    */
    public function setAllowChangingQuantity(?bool $value): void {
        $this->allowChangingQuantity = $value;
    }

    /**
     * Sets the archivedAt property value. The archivedAt property
     * @param DateTime|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?DateTime $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the billingScheme property value. The billingScheme property
     * @param SavePlanRequestSchemaLineItems_billingScheme|null $value Value to set for the billingScheme property.
    */
    public function setBillingScheme(?SavePlanRequestSchemaLineItems_billingScheme $value): void {
        $this->billingScheme = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the intervalType property value. The intervalType property
     * @param SavePlanRequestSchemaLineItems_intervalType|null $value Value to set for the intervalType property.
    */
    public function setIntervalType(?SavePlanRequestSchemaLineItems_intervalType $value): void {
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
     * Sets the prices property value. The prices property
     * @param array<SavePlanRequestSchemaLineItems_prices>|null $value Value to set for the prices property.
    */
    public function setPrices(?array $value): void {
        $this->prices = $value;
    }

    /**
     * Sets the priceType property value. The priceType property
     * @param SavePlanRequestSchemaLineItems_priceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?SavePlanRequestSchemaLineItems_priceType $value): void {
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
     * @param SavePlanRequestSchemaLineItems_tiersMode|null $value Value to set for the tiersMode property.
    */
    public function setTiersMode(?SavePlanRequestSchemaLineItems_tiersMode $value): void {
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
