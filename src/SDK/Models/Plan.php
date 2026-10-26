<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Plan implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
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
     * @var bool|null $isPerpetual The isPerpetual property
    */
    private ?bool $isPerpetual = null;
    
    /**
     * @var PlanLineItems|null $lineItems The lineItems property
    */
    private ?PlanLineItems $lineItems = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var ProductObject|null $product The product property
    */
    private ?ProductObject $product = null;
    
    /**
     * @var string|null $productId The productId property
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $tierTagId The tierTagId property
    */
    private ?string $tierTagId = null;
    
    /**
     * @var int|null $trialPeriodDays The trialPeriodDays property
    */
    private ?int $trialPeriodDays = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Instantiates a new Plan and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Plan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Plan {
        return new Plan();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
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
            'archivedAt' => fn(ParseNode $n) => $o->setArchivedAt($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isPerpetual' => fn(ParseNode $n) => $o->setIsPerpetual($n->getBooleanValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getObjectValue([PlanLineItems::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getObjectValue([ProductObject::class, 'createFromDiscriminatorValue'])),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'tierTagId' => fn(ParseNode $n) => $o->setTierTagId($n->getStringValue()),
            'trialPeriodDays' => fn(ParseNode $n) => $o->setTrialPeriodDays($n->getIntegerValue()),
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
     * Gets the isPerpetual property value. The isPerpetual property
     * @return bool|null
    */
    public function getIsPerpetual(): ?bool {
        return $this->isPerpetual;
    }

    /**
     * Gets the lineItems property value. The lineItems property
     * @return PlanLineItems|null
    */
    public function getLineItems(): ?PlanLineItems {
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
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the product property value. The product property
     * @return ProductObject|null
    */
    public function getProduct(): ?ProductObject {
        return $this->product;
    }

    /**
     * Gets the productId property value. The productId property
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the tierTagId property value. The tierTagId property
     * @return string|null
    */
    public function getTierTagId(): ?string {
        return $this->tierTagId;
    }

    /**
     * Gets the trialPeriodDays property value. The trialPeriodDays property
     * @return int|null
    */
    public function getTrialPeriodDays(): ?int {
        return $this->trialPeriodDays;
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
        $writer->writeStringValue('archivedAt', $this->getArchivedAt());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isPerpetual', $this->getIsPerpetual());
        $writer->writeObjectValue('lineItems', $this->getLineItems());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeObjectValue('product', $this->getProduct());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('tierTagId', $this->getTierTagId());
        $writer->writeIntegerValue('trialPeriodDays', $this->getTrialPeriodDays());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
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
     * Sets the isPerpetual property value. The isPerpetual property
     * @param bool|null $value Value to set for the isPerpetual property.
    */
    public function setIsPerpetual(?bool $value): void {
        $this->isPerpetual = $value;
    }

    /**
     * Sets the lineItems property value. The lineItems property
     * @param PlanLineItems|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?PlanLineItems $value): void {
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
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the product property value. The product property
     * @param ProductObject|null $value Value to set for the product property.
    */
    public function setProduct(?ProductObject $value): void {
        $this->product = $value;
    }

    /**
     * Sets the productId property value. The productId property
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the tierTagId property value. The tierTagId property
     * @param string|null $value Value to set for the tierTagId property.
    */
    public function setTierTagId(?string $value): void {
        $this->tierTagId = $value;
    }

    /**
     * Sets the trialPeriodDays property value. The trialPeriodDays property
     * @param int|null $value Value to set for the trialPeriodDays property.
    */
    public function setTrialPeriodDays(?int $value): void {
        $this->trialPeriodDays = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
