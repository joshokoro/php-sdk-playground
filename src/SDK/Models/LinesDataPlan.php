<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LinesDataPlan implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $active The active property
    */
    private ?bool $active = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $amount The amount property
    */
    private ?int $amount = null;
    
    /**
     * @var string|null $amount_decimal The amount_decimal property
    */
    private ?string $amount_decimal = null;
    
    /**
     * @var string|null $billing_scheme The billing_scheme property
    */
    private ?string $billing_scheme = null;
    
    /**
     * @var int|null $created The created property
    */
    private ?int $created = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $escapedObject The object property
    */
    private ?string $escapedObject = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $interval The interval property
    */
    private ?string $interval = null;
    
    /**
     * @var int|null $interval_count The interval_count property
    */
    private ?int $interval_count = null;
    
    /**
     * @var bool|null $livemode The livemode property
    */
    private ?bool $livemode = null;
    
    /**
     * @var PlanMetadata|null $metadata The metadata property
    */
    private ?PlanMetadata $metadata = null;
    
    /**
     * @var string|null $nickname The nickname property
    */
    private ?string $nickname = null;
    
    /**
     * @var string|null $product The product property
    */
    private ?string $product = null;
    
    /**
     * @var string|null $usage_type The usage_type property
    */
    private ?string $usage_type = null;
    
    /**
     * Instantiates a new LinesDataPlan and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinesDataPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinesDataPlan {
        return new LinesDataPlan();
    }

    /**
     * Gets the active property value. The active property
     * @return bool|null
    */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The amount property
     * @return int|null
    */
    public function getAmount(): ?int {
        return $this->amount;
    }

    /**
     * Gets the amount_decimal property value. The amount_decimal property
     * @return string|null
    */
    public function getAmountDecimal(): ?string {
        return $this->amount_decimal;
    }

    /**
     * Gets the billing_scheme property value. The billing_scheme property
     * @return string|null
    */
    public function getBillingScheme(): ?string {
        return $this->billing_scheme;
    }

    /**
     * Gets the created property value. The created property
     * @return int|null
    */
    public function getCreated(): ?int {
        return $this->created;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the object property value. The object property
     * @return string|null
    */
    public function getEscapedObject(): ?string {
        return $this->escapedObject;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'active' => fn(ParseNode $n) => $o->setActive($n->getBooleanValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getIntegerValue()),
            'amount_decimal' => fn(ParseNode $n) => $o->setAmountDecimal($n->getStringValue()),
            'billing_scheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getStringValue()),
            'created' => fn(ParseNode $n) => $o->setCreated($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'object' => fn(ParseNode $n) => $o->setEscapedObject($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getStringValue()),
            'interval_count' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'livemode' => fn(ParseNode $n) => $o->setLivemode($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PlanMetadata::class, 'createFromDiscriminatorValue'])),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getStringValue()),
            'usage_type' => fn(ParseNode $n) => $o->setUsageType($n->getStringValue()),
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
     * Gets the interval property value. The interval property
     * @return string|null
    */
    public function getInterval(): ?string {
        return $this->interval;
    }

    /**
     * Gets the interval_count property value. The interval_count property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->interval_count;
    }

    /**
     * Gets the livemode property value. The livemode property
     * @return bool|null
    */
    public function getLivemode(): ?bool {
        return $this->livemode;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return PlanMetadata|null
    */
    public function getMetadata(): ?PlanMetadata {
        return $this->metadata;
    }

    /**
     * Gets the nickname property value. The nickname property
     * @return string|null
    */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * Gets the product property value. The product property
     * @return string|null
    */
    public function getProduct(): ?string {
        return $this->product;
    }

    /**
     * Gets the usage_type property value. The usage_type property
     * @return string|null
    */
    public function getUsageType(): ?string {
        return $this->usage_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('active', $this->getActive());
        $writer->writeIntegerValue('amount', $this->getAmount());
        $writer->writeStringValue('amount_decimal', $this->getAmountDecimal());
        $writer->writeStringValue('billing_scheme', $this->getBillingScheme());
        $writer->writeIntegerValue('created', $this->getCreated());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('object', $this->getEscapedObject());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('interval', $this->getInterval());
        $writer->writeIntegerValue('interval_count', $this->getIntervalCount());
        $writer->writeBooleanValue('livemode', $this->getLivemode());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('product', $this->getProduct());
        $writer->writeStringValue('usage_type', $this->getUsageType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the active property value. The active property
     * @param bool|null $value Value to set for the active property.
    */
    public function setActive(?bool $value): void {
        $this->active = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount property value. The amount property
     * @param int|null $value Value to set for the amount property.
    */
    public function setAmount(?int $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the amount_decimal property value. The amount_decimal property
     * @param string|null $value Value to set for the amount_decimal property.
    */
    public function setAmountDecimal(?string $value): void {
        $this->amount_decimal = $value;
    }

    /**
     * Sets the billing_scheme property value. The billing_scheme property
     * @param string|null $value Value to set for the billing_scheme property.
    */
    public function setBillingScheme(?string $value): void {
        $this->billing_scheme = $value;
    }

    /**
     * Sets the created property value. The created property
     * @param int|null $value Value to set for the created property.
    */
    public function setCreated(?int $value): void {
        $this->created = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the object property value. The object property
     * @param string|null $value Value to set for the object property.
    */
    public function setEscapedObject(?string $value): void {
        $this->escapedObject = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the interval property value. The interval property
     * @param string|null $value Value to set for the interval property.
    */
    public function setInterval(?string $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the interval_count property value. The interval_count property
     * @param int|null $value Value to set for the interval_count property.
    */
    public function setIntervalCount(?int $value): void {
        $this->interval_count = $value;
    }

    /**
     * Sets the livemode property value. The livemode property
     * @param bool|null $value Value to set for the livemode property.
    */
    public function setLivemode(?bool $value): void {
        $this->livemode = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param PlanMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PlanMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the nickname property value. The nickname property
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->nickname = $value;
    }

    /**
     * Sets the product property value. The product property
     * @param string|null $value Value to set for the product property.
    */
    public function setProduct(?string $value): void {
        $this->product = $value;
    }

    /**
     * Sets the usage_type property value. The usage_type property
     * @param string|null $value Value to set for the usage_type property.
    */
    public function setUsageType(?string $value): void {
        $this->usage_type = $value;
    }

}
