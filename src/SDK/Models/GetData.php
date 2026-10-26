<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetData implements Parsable 
{
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $expiryDate The expiryDate property
    */
    private ?string $expiryDate = null;
    
    /**
     * @var string|null $groupId The groupId property
    */
    private ?string $groupId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $ownerId The ownerId property
    */
    private ?string $ownerId = null;
    
    /**
     * @var GetDataPlan|null $plan The plan property
    */
    private ?GetDataPlan $plan = null;
    
    /**
     * @var string|null $planId The planId property
    */
    private ?string $planId = null;
    
    /**
     * @var int|null $seats The seats property
    */
    private ?int $seats = null;
    
    /**
     * @var string|null $subscriptionId The subscriptionId property
    */
    private ?string $subscriptionId = null;
    
    /**
     * @var ApiSubscriptionPlansGetDataSubscriptionPlanLineI|null $subscriptionPlanLineItems The subscriptionPlanLineItems property
    */
    private ?ApiSubscriptionPlansGetDataSubscriptionPlanLineI $subscriptionPlanLineItems = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetData {
        return new GetData();
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
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'plan' => fn(ParseNode $n) => $o->setPlan($n->getObjectValue([GetDataPlan::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'seats' => fn(ParseNode $n) => $o->setSeats($n->getIntegerValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionPlanLineItems' => fn(ParseNode $n) => $o->setSubscriptionPlanLineItems($n->getObjectValue([ApiSubscriptionPlansGetDataSubscriptionPlanLineI::class, 'createFromDiscriminatorValue'])),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
        ];
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the ownerId property value. The ownerId property
     * @return string|null
    */
    public function getOwnerId(): ?string {
        return $this->ownerId;
    }

    /**
     * Gets the plan property value. The plan property
     * @return GetDataPlan|null
    */
    public function getPlan(): ?GetDataPlan {
        return $this->plan;
    }

    /**
     * Gets the planId property value. The planId property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the seats property value. The seats property
     * @return int|null
    */
    public function getSeats(): ?int {
        return $this->seats;
    }

    /**
     * Gets the subscriptionId property value. The subscriptionId property
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Gets the subscriptionPlanLineItems property value. The subscriptionPlanLineItems property
     * @return ApiSubscriptionPlansGetDataSubscriptionPlanLineI|null
    */
    public function getSubscriptionPlanLineItems(): ?ApiSubscriptionPlansGetDataSubscriptionPlanLineI {
        return $this->subscriptionPlanLineItems;
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
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('expiryDate', $this->getExpiryDate());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeObjectValue('plan', $this->getPlan());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeIntegerValue('seats', $this->getSeats());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeObjectValue('subscriptionPlanLineItems', $this->getSubscriptionPlanLineItems());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
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
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->groupId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the ownerId property value. The ownerId property
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->ownerId = $value;
    }

    /**
     * Sets the plan property value. The plan property
     * @param GetDataPlan|null $value Value to set for the plan property.
    */
    public function setPlan(?GetDataPlan $value): void {
        $this->plan = $value;
    }

    /**
     * Sets the planId property value. The planId property
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

    /**
     * Sets the seats property value. The seats property
     * @param int|null $value Value to set for the seats property.
    */
    public function setSeats(?int $value): void {
        $this->seats = $value;
    }

    /**
     * Sets the subscriptionId property value. The subscriptionId property
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->subscriptionId = $value;
    }

    /**
     * Sets the subscriptionPlanLineItems property value. The subscriptionPlanLineItems property
     * @param ApiSubscriptionPlansGetDataSubscriptionPlanLineI|null $value Value to set for the subscriptionPlanLineItems property.
    */
    public function setSubscriptionPlanLineItems(?ApiSubscriptionPlansGetDataSubscriptionPlanLineI $value): void {
        $this->subscriptionPlanLineItems = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
