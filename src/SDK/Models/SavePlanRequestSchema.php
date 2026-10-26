<?php

namespace Salable\SDK\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SavePlanRequestSchema implements Parsable 
{
    /**
     * @var DateTime|null $archivedAt The archivedAt property
    */
    private ?DateTime $archivedAt = null;
    
    /**
     * @var array<string>|null $entitlements The entitlements property
    */
    private ?array $entitlements = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isActive The isActive property
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isPerpetual The isPerpetual property
    */
    private ?bool $isPerpetual = null;
    
    /**
     * @var array<SavePlanRequestSchemaLineItems>|null $lineItems The lineItems property
    */
    private ?array $lineItems = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $productId The productId property
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $tierTag The tierTag property
    */
    private ?string $tierTag = null;
    
    /**
     * @var float|null $trialPeriodDays The trialPeriodDays property
    */
    private ?float $trialPeriodDays = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SavePlanRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SavePlanRequestSchema {
        return new SavePlanRequestSchema();
    }

    /**
     * Gets the archivedAt property value. The archivedAt property
     * @return DateTime|null
    */
    public function getArchivedAt(): ?DateTime {
        return $this->archivedAt;
    }

    /**
     * Gets the entitlements property value. The entitlements property
     * @return array<string>|null
    */
    public function getEntitlements(): ?array {
        return $this->entitlements;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getDateTimeValue()),
            'entitlements' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEntitlements($val);
            },
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isPerpetual' => fn(ParseNode $n) => $o->setIsPerpetual($n->getBooleanValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([SavePlanRequestSchemaLineItems::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'tierTag' => fn(ParseNode $n) => $o->setTierTag($n->getStringValue()),
            'trialPeriodDays' => fn(ParseNode $n) => $o->setTrialPeriodDays($n->getFloatValue()),
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
     * Gets the isPerpetual property value. The isPerpetual property
     * @return bool|null
    */
    public function getIsPerpetual(): ?bool {
        return $this->isPerpetual;
    }

    /**
     * Gets the lineItems property value. The lineItems property
     * @return array<SavePlanRequestSchemaLineItems>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the productId property value. The productId property
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the tierTag property value. The tierTag property
     * @return string|null
    */
    public function getTierTag(): ?string {
        return $this->tierTag;
    }

    /**
     * Gets the trialPeriodDays property value. The trialPeriodDays property
     * @return float|null
    */
    public function getTrialPeriodDays(): ?float {
        return $this->trialPeriodDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('archivedAt', $this->getArchivedAt());
        $writer->writeCollectionOfPrimitiveValues('entitlements', $this->getEntitlements());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isPerpetual', $this->getIsPerpetual());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('tierTag', $this->getTierTag());
        $writer->writeFloatValue('trialPeriodDays', $this->getTrialPeriodDays());
    }

    /**
     * Sets the archivedAt property value. The archivedAt property
     * @param DateTime|null $value Value to set for the archivedAt property.
    */
    public function setArchivedAt(?DateTime $value): void {
        $this->archivedAt = $value;
    }

    /**
     * Sets the entitlements property value. The entitlements property
     * @param array<string>|null $value Value to set for the entitlements property.
    */
    public function setEntitlements(?array $value): void {
        $this->entitlements = $value;
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
     * Sets the isPerpetual property value. The isPerpetual property
     * @param bool|null $value Value to set for the isPerpetual property.
    */
    public function setIsPerpetual(?bool $value): void {
        $this->isPerpetual = $value;
    }

    /**
     * Sets the lineItems property value. The lineItems property
     * @param array<SavePlanRequestSchemaLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the productId property value. The productId property
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the tierTag property value. The tierTag property
     * @param string|null $value Value to set for the tierTag property.
    */
    public function setTierTag(?string $value): void {
        $this->tierTag = $value;
    }

    /**
     * Sets the trialPeriodDays property value. The trialPeriodDays property
     * @param float|null $value Value to set for the trialPeriodDays property.
    */
    public function setTrialPeriodDays(?float $value): void {
        $this->trialPeriodDays = $value;
    }

}
