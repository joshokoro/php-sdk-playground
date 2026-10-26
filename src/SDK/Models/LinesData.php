<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LinesData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $amount The amount property
    */
    private ?int $amount = null;
    
    /**
     * @var int|null $amount_excluding_tax The amount_excluding_tax property
    */
    private ?int $amount_excluding_tax = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $discountable The discountable property
    */
    private ?bool $discountable = null;
    
    /**
     * @var string|null $escapedObject The object property
    */
    private ?string $escapedObject = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoice The invoice property
    */
    private ?string $invoice = null;
    
    /**
     * @var string|null $invoice_item The invoice_item property
    */
    private ?string $invoice_item = null;
    
    /**
     * @var bool|null $livemode The livemode property
    */
    private ?bool $livemode = null;
    
    /**
     * @var Metadata|null $metadata The metadata property
    */
    private ?Metadata $metadata = null;
    
    /**
     * @var Parent|null $parent The parent property
    */
    private ?Parent $parent = null;
    
    /**
     * @var Period|null $period The period property
    */
    private ?Period $period = null;
    
    /**
     * @var LinesDataPlan|null $plan The plan property
    */
    private ?LinesDataPlan $plan = null;
    
    /**
     * @var Price|null $price The price property
    */
    private ?Price $price = null;
    
    /**
     * @var Pricing|null $pricing The pricing property
    */
    private ?Pricing $pricing = null;
    
    /**
     * @var bool|null $proration The proration property
    */
    private ?bool $proration = null;
    
    /**
     * @var DataProrationDetails|null $proration_details The proration_details property
    */
    private ?DataProrationDetails $proration_details = null;
    
    /**
     * @var int|null $quantity The quantity property
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $subscription The subscription property
    */
    private ?string $subscription = null;
    
    /**
     * @var string|null $subscription_item The subscription_item property
    */
    private ?string $subscription_item = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $unit_amount_excluding_tax The unit_amount_excluding_tax property
    */
    private ?string $unit_amount_excluding_tax = null;
    
    /**
     * Instantiates a new LinesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinesData {
        return new LinesData();
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
     * Gets the amount_excluding_tax property value. The amount_excluding_tax property
     * @return int|null
    */
    public function getAmountExcludingTax(): ?int {
        return $this->amount_excluding_tax;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discountable property value. The discountable property
     * @return bool|null
    */
    public function getDiscountable(): ?bool {
        return $this->discountable;
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
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getIntegerValue()),
            'amount_excluding_tax' => fn(ParseNode $n) => $o->setAmountExcludingTax($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discountable' => fn(ParseNode $n) => $o->setDiscountable($n->getBooleanValue()),
            'object' => fn(ParseNode $n) => $o->setEscapedObject($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoice' => fn(ParseNode $n) => $o->setInvoice($n->getStringValue()),
            'invoice_item' => fn(ParseNode $n) => $o->setInvoiceItem($n->getStringValue()),
            'livemode' => fn(ParseNode $n) => $o->setLivemode($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Metadata::class, 'createFromDiscriminatorValue'])),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([Parent::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Period::class, 'createFromDiscriminatorValue'])),
            'plan' => fn(ParseNode $n) => $o->setPlan($n->getObjectValue([LinesDataPlan::class, 'createFromDiscriminatorValue'])),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getObjectValue([Price::class, 'createFromDiscriminatorValue'])),
            'pricing' => fn(ParseNode $n) => $o->setPricing($n->getObjectValue([Pricing::class, 'createFromDiscriminatorValue'])),
            'proration' => fn(ParseNode $n) => $o->setProration($n->getBooleanValue()),
            'proration_details' => fn(ParseNode $n) => $o->setProrationDetails($n->getObjectValue([DataProrationDetails::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'subscription' => fn(ParseNode $n) => $o->setSubscription($n->getStringValue()),
            'subscription_item' => fn(ParseNode $n) => $o->setSubscriptionItem($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'unit_amount_excluding_tax' => fn(ParseNode $n) => $o->setUnitAmountExcludingTax($n->getStringValue()),
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
     * Gets the invoice property value. The invoice property
     * @return string|null
    */
    public function getInvoice(): ?string {
        return $this->invoice;
    }

    /**
     * Gets the invoice_item property value. The invoice_item property
     * @return string|null
    */
    public function getInvoiceItem(): ?string {
        return $this->invoice_item;
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
     * @return Metadata|null
    */
    public function getMetadata(): ?Metadata {
        return $this->metadata;
    }

    /**
     * Gets the parent property value. The parent property
     * @return Parent|null
    */
    public function getParent(): ?Parent {
        return $this->parent;
    }

    /**
     * Gets the period property value. The period property
     * @return Period|null
    */
    public function getPeriod(): ?Period {
        return $this->period;
    }

    /**
     * Gets the plan property value. The plan property
     * @return LinesDataPlan|null
    */
    public function getPlan(): ?LinesDataPlan {
        return $this->plan;
    }

    /**
     * Gets the price property value. The price property
     * @return Price|null
    */
    public function getPrice(): ?Price {
        return $this->price;
    }

    /**
     * Gets the pricing property value. The pricing property
     * @return Pricing|null
    */
    public function getPricing(): ?Pricing {
        return $this->pricing;
    }

    /**
     * Gets the proration property value. The proration property
     * @return bool|null
    */
    public function getProration(): ?bool {
        return $this->proration;
    }

    /**
     * Gets the proration_details property value. The proration_details property
     * @return DataProrationDetails|null
    */
    public function getProrationDetails(): ?DataProrationDetails {
        return $this->proration_details;
    }

    /**
     * Gets the quantity property value. The quantity property
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the subscription property value. The subscription property
     * @return string|null
    */
    public function getSubscription(): ?string {
        return $this->subscription;
    }

    /**
     * Gets the subscription_item property value. The subscription_item property
     * @return string|null
    */
    public function getSubscriptionItem(): ?string {
        return $this->subscription_item;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the unit_amount_excluding_tax property value. The unit_amount_excluding_tax property
     * @return string|null
    */
    public function getUnitAmountExcludingTax(): ?string {
        return $this->unit_amount_excluding_tax;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('amount', $this->getAmount());
        $writer->writeIntegerValue('amount_excluding_tax', $this->getAmountExcludingTax());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('discountable', $this->getDiscountable());
        $writer->writeStringValue('object', $this->getEscapedObject());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoice', $this->getInvoice());
        $writer->writeStringValue('invoice_item', $this->getInvoiceItem());
        $writer->writeBooleanValue('livemode', $this->getLivemode());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeObjectValue('parent', $this->getParent());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeObjectValue('plan', $this->getPlan());
        $writer->writeObjectValue('price', $this->getPrice());
        $writer->writeObjectValue('pricing', $this->getPricing());
        $writer->writeBooleanValue('proration', $this->getProration());
        $writer->writeObjectValue('proration_details', $this->getProrationDetails());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('subscription', $this->getSubscription());
        $writer->writeStringValue('subscription_item', $this->getSubscriptionItem());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('unit_amount_excluding_tax', $this->getUnitAmountExcludingTax());
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
     * Sets the amount property value. The amount property
     * @param int|null $value Value to set for the amount property.
    */
    public function setAmount(?int $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the amount_excluding_tax property value. The amount_excluding_tax property
     * @param int|null $value Value to set for the amount_excluding_tax property.
    */
    public function setAmountExcludingTax(?int $value): void {
        $this->amount_excluding_tax = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the discountable property value. The discountable property
     * @param bool|null $value Value to set for the discountable property.
    */
    public function setDiscountable(?bool $value): void {
        $this->discountable = $value;
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
     * Sets the invoice property value. The invoice property
     * @param string|null $value Value to set for the invoice property.
    */
    public function setInvoice(?string $value): void {
        $this->invoice = $value;
    }

    /**
     * Sets the invoice_item property value. The invoice_item property
     * @param string|null $value Value to set for the invoice_item property.
    */
    public function setInvoiceItem(?string $value): void {
        $this->invoice_item = $value;
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
     * @param Metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the parent property value. The parent property
     * @param Parent|null $value Value to set for the parent property.
    */
    public function setParent(?Parent $value): void {
        $this->parent = $value;
    }

    /**
     * Sets the period property value. The period property
     * @param Period|null $value Value to set for the period property.
    */
    public function setPeriod(?Period $value): void {
        $this->period = $value;
    }

    /**
     * Sets the plan property value. The plan property
     * @param LinesDataPlan|null $value Value to set for the plan property.
    */
    public function setPlan(?LinesDataPlan $value): void {
        $this->plan = $value;
    }

    /**
     * Sets the price property value. The price property
     * @param Price|null $value Value to set for the price property.
    */
    public function setPrice(?Price $value): void {
        $this->price = $value;
    }

    /**
     * Sets the pricing property value. The pricing property
     * @param Pricing|null $value Value to set for the pricing property.
    */
    public function setPricing(?Pricing $value): void {
        $this->pricing = $value;
    }

    /**
     * Sets the proration property value. The proration property
     * @param bool|null $value Value to set for the proration property.
    */
    public function setProration(?bool $value): void {
        $this->proration = $value;
    }

    /**
     * Sets the proration_details property value. The proration_details property
     * @param DataProrationDetails|null $value Value to set for the proration_details property.
    */
    public function setProrationDetails(?DataProrationDetails $value): void {
        $this->proration_details = $value;
    }

    /**
     * Sets the quantity property value. The quantity property
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the subscription property value. The subscription property
     * @param string|null $value Value to set for the subscription property.
    */
    public function setSubscription(?string $value): void {
        $this->subscription = $value;
    }

    /**
     * Sets the subscription_item property value. The subscription_item property
     * @param string|null $value Value to set for the subscription_item property.
    */
    public function setSubscriptionItem(?string $value): void {
        $this->subscription_item = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the unit_amount_excluding_tax property value. The unit_amount_excluding_tax property
     * @param string|null $value Value to set for the unit_amount_excluding_tax property.
    */
    public function setUnitAmountExcludingTax(?string $value): void {
        $this->unit_amount_excluding_tax = $value;
    }

}
