<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Price implements AdditionalDataHolder, Parsable 
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
     * @var bool|null $livemode The livemode property
    */
    private ?bool $livemode = null;
    
    /**
     * @var PriceMetadata|null $metadata The metadata property
    */
    private ?PriceMetadata $metadata = null;
    
    /**
     * @var string|null $nickname The nickname property
    */
    private ?string $nickname = null;
    
    /**
     * @var string|null $product The product property
    */
    private ?string $product = null;
    
    /**
     * @var Recurring|null $recurring The recurring property
    */
    private ?Recurring $recurring = null;
    
    /**
     * @var string|null $tax_behavior The tax_behavior property
    */
    private ?string $tax_behavior = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var int|null $unit_amount The unit_amount property
    */
    private ?int $unit_amount = null;
    
    /**
     * @var string|null $unit_amount_decimal The unit_amount_decimal property
    */
    private ?string $unit_amount_decimal = null;
    
    /**
     * Instantiates a new Price and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Price
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Price {
        return new Price();
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
            'billing_scheme' => fn(ParseNode $n) => $o->setBillingScheme($n->getStringValue()),
            'created' => fn(ParseNode $n) => $o->setCreated($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'object' => fn(ParseNode $n) => $o->setEscapedObject($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'livemode' => fn(ParseNode $n) => $o->setLivemode($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PriceMetadata::class, 'createFromDiscriminatorValue'])),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getStringValue()),
            'recurring' => fn(ParseNode $n) => $o->setRecurring($n->getObjectValue([Recurring::class, 'createFromDiscriminatorValue'])),
            'tax_behavior' => fn(ParseNode $n) => $o->setTaxBehavior($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'unit_amount' => fn(ParseNode $n) => $o->setUnitAmount($n->getIntegerValue()),
            'unit_amount_decimal' => fn(ParseNode $n) => $o->setUnitAmountDecimal($n->getStringValue()),
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
     * Gets the livemode property value. The livemode property
     * @return bool|null
    */
    public function getLivemode(): ?bool {
        return $this->livemode;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return PriceMetadata|null
    */
    public function getMetadata(): ?PriceMetadata {
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
     * Gets the recurring property value. The recurring property
     * @return Recurring|null
    */
    public function getRecurring(): ?Recurring {
        return $this->recurring;
    }

    /**
     * Gets the tax_behavior property value. The tax_behavior property
     * @return string|null
    */
    public function getTaxBehavior(): ?string {
        return $this->tax_behavior;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the unit_amount property value. The unit_amount property
     * @return int|null
    */
    public function getUnitAmount(): ?int {
        return $this->unit_amount;
    }

    /**
     * Gets the unit_amount_decimal property value. The unit_amount_decimal property
     * @return string|null
    */
    public function getUnitAmountDecimal(): ?string {
        return $this->unit_amount_decimal;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('active', $this->getActive());
        $writer->writeStringValue('billing_scheme', $this->getBillingScheme());
        $writer->writeIntegerValue('created', $this->getCreated());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('object', $this->getEscapedObject());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('livemode', $this->getLivemode());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('product', $this->getProduct());
        $writer->writeObjectValue('recurring', $this->getRecurring());
        $writer->writeStringValue('tax_behavior', $this->getTaxBehavior());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeIntegerValue('unit_amount', $this->getUnitAmount());
        $writer->writeStringValue('unit_amount_decimal', $this->getUnitAmountDecimal());
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
     * Sets the livemode property value. The livemode property
     * @param bool|null $value Value to set for the livemode property.
    */
    public function setLivemode(?bool $value): void {
        $this->livemode = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param PriceMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PriceMetadata $value): void {
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
     * Sets the recurring property value. The recurring property
     * @param Recurring|null $value Value to set for the recurring property.
    */
    public function setRecurring(?Recurring $value): void {
        $this->recurring = $value;
    }

    /**
     * Sets the tax_behavior property value. The tax_behavior property
     * @param string|null $value Value to set for the tax_behavior property.
    */
    public function setTaxBehavior(?string $value): void {
        $this->tax_behavior = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the unit_amount property value. The unit_amount property
     * @param int|null $value Value to set for the unit_amount property.
    */
    public function setUnitAmount(?int $value): void {
        $this->unit_amount = $value;
    }

    /**
     * Sets the unit_amount_decimal property value. The unit_amount_decimal property
     * @param string|null $value Value to set for the unit_amount_decimal property.
    */
    public function setUnitAmountDecimal(?string $value): void {
        $this->unit_amount_decimal = $value;
    }

}
