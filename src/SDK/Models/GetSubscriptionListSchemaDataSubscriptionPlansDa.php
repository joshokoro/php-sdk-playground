<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetSubscriptionListSchemaDataSubscriptionPlansDa implements AdditionalDataHolder, Parsable 
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
     * @var DataSubscriptionPlansDataPlan|null $plan The plan property
    */
    private ?DataSubscriptionPlansDataPlan $plan = null;
    
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
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Instantiates a new GetSubscriptionListSchemaDataSubscriptionPlansDa and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetSubscriptionListSchemaDataSubscriptionPlansDa
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetSubscriptionListSchemaDataSubscriptionPlansDa {
        return new GetSubscriptionListSchemaDataSubscriptionPlansDa();
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
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'plan' => fn(ParseNode $n) => $o->setPlan($n->getObjectValue([DataSubscriptionPlansDataPlan::class, 'createFromDiscriminatorValue'])),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'seats' => fn(ParseNode $n) => $o->setSeats($n->getIntegerValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
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
     * @return DataSubscriptionPlansDataPlan|null
    */
    public function getPlan(): ?DataSubscriptionPlansDataPlan {
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
     * @param DataSubscriptionPlansDataPlan|null $value Value to set for the plan property.
    */
    public function setPlan(?DataSubscriptionPlansDataPlan $value): void {
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
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
