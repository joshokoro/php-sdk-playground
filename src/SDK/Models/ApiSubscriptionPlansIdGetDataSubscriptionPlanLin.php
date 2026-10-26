<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApiSubscriptionPlansIdGetDataSubscriptionPlanLin implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $expiryDate The expiryDate property
    */
    private ?string $expiryDate = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var GetDataSubscriptionPlanLineItemsDataLineItem|null $lineItem The lineItem property
    */
    private ?GetDataSubscriptionPlanLineItemsDataLineItem $lineItem = null;
    
    /**
     * @var string|null $lineItemStripeProductId The lineItemStripeProductId property
    */
    private ?string $lineItemStripeProductId = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var int|null $quantity The quantity property
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $stripePriceId The stripePriceId property
    */
    private ?string $stripePriceId = null;
    
    /**
     * @var string|null $stripeSubscriptionItemId The stripeSubscriptionItemId property
    */
    private ?string $stripeSubscriptionItemId = null;
    
    /**
     * @var string|null $subscriptionPlanId The subscriptionPlanId property
    */
    private ?string $subscriptionPlanId = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * @var DataUsage|null $usage The usage property
    */
    private ?DataUsage $usage = null;
    
    /**
     * @var string|null $usageId The usageId property
    */
    private ?string $usageId = null;
    
    /**
     * Instantiates a new ApiSubscriptionPlansIdGetDataSubscriptionPlanLin and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiSubscriptionPlansIdGetDataSubscriptionPlanLin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiSubscriptionPlansIdGetDataSubscriptionPlanLin {
        return new ApiSubscriptionPlansIdGetDataSubscriptionPlanLin();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the expiryDate property value. The expiryDate property
     * @return string|null
    */
    public function getExpiryDate(): ?string {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lineItem' => fn(ParseNode $n) => $o->setLineItem($n->getObjectValue([GetDataSubscriptionPlanLineItemsDataLineItem::class, 'createFromDiscriminatorValue'])),
            'lineItemStripeProductId' => fn(ParseNode $n) => $o->setLineItemStripeProductId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'stripePriceId' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
            'stripeSubscriptionItemId' => fn(ParseNode $n) => $o->setStripeSubscriptionItemId($n->getStringValue()),
            'subscriptionPlanId' => fn(ParseNode $n) => $o->setSubscriptionPlanId($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getObjectValue([DataUsage::class, 'createFromDiscriminatorValue'])),
            'usageId' => fn(ParseNode $n) => $o->setUsageId($n->getStringValue()),
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
     * Gets the lineItem property value. The lineItem property
     * @return GetDataSubscriptionPlanLineItemsDataLineItem|null
    */
    public function getLineItem(): ?GetDataSubscriptionPlanLineItemsDataLineItem {
        return $this->lineItem;
    }

    /**
     * Gets the lineItemStripeProductId property value. The lineItemStripeProductId property
     * @return string|null
    */
    public function getLineItemStripeProductId(): ?string {
        return $this->lineItemStripeProductId;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the quantity property value. The quantity property
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the stripePriceId property value. The stripePriceId property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripePriceId;
    }

    /**
     * Gets the stripeSubscriptionItemId property value. The stripeSubscriptionItemId property
     * @return string|null
    */
    public function getStripeSubscriptionItemId(): ?string {
        return $this->stripeSubscriptionItemId;
    }

    /**
     * Gets the subscriptionPlanId property value. The subscriptionPlanId property
     * @return string|null
    */
    public function getSubscriptionPlanId(): ?string {
        return $this->subscriptionPlanId;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Gets the usage property value. The usage property
     * @return DataUsage|null
    */
    public function getUsage(): ?DataUsage {
        return $this->usage;
    }

    /**
     * Gets the usageId property value. The usageId property
     * @return string|null
    */
    public function getUsageId(): ?string {
        return $this->usageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('expiryDate', $this->getExpiryDate());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lineItem', $this->getLineItem());
        $writer->writeStringValue('lineItemStripeProductId', $this->getLineItemStripeProductId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('stripePriceId', $this->getStripePriceId());
        $writer->writeStringValue('stripeSubscriptionItemId', $this->getStripeSubscriptionItemId());
        $writer->writeStringValue('subscriptionPlanId', $this->getSubscriptionPlanId());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
        $writer->writeObjectValue('usage', $this->getUsage());
        $writer->writeStringValue('usageId', $this->getUsageId());
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
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the expiryDate property value. The expiryDate property
     * @param string|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?string $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lineItem property value. The lineItem property
     * @param GetDataSubscriptionPlanLineItemsDataLineItem|null $value Value to set for the lineItem property.
    */
    public function setLineItem(?GetDataSubscriptionPlanLineItemsDataLineItem $value): void {
        $this->lineItem = $value;
    }

    /**
     * Sets the lineItemStripeProductId property value. The lineItemStripeProductId property
     * @param string|null $value Value to set for the lineItemStripeProductId property.
    */
    public function setLineItemStripeProductId(?string $value): void {
        $this->lineItemStripeProductId = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the quantity property value. The quantity property
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the stripePriceId property value. The stripePriceId property
     * @param string|null $value Value to set for the stripePriceId property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripePriceId = $value;
    }

    /**
     * Sets the stripeSubscriptionItemId property value. The stripeSubscriptionItemId property
     * @param string|null $value Value to set for the stripeSubscriptionItemId property.
    */
    public function setStripeSubscriptionItemId(?string $value): void {
        $this->stripeSubscriptionItemId = $value;
    }

    /**
     * Sets the subscriptionPlanId property value. The subscriptionPlanId property
     * @param string|null $value Value to set for the subscriptionPlanId property.
    */
    public function setSubscriptionPlanId(?string $value): void {
        $this->subscriptionPlanId = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the usage property value. The usage property
     * @param DataUsage|null $value Value to set for the usage property.
    */
    public function setUsage(?DataUsage $value): void {
        $this->usage = $value;
    }

    /**
     * Sets the usageId property value. The usageId property
     * @param string|null $value Value to set for the usageId property.
    */
    public function setUsageId(?string $value): void {
        $this->usageId = $value;
    }

}
