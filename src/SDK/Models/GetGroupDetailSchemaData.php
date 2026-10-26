<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetGroupDetailSchemaData implements AdditionalDataHolder, Parsable 
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
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var GetGroupDetailSchemaDataMembershipsList|null $memberships The memberships property
    */
    private ?GetGroupDetailSchemaDataMembershipsList $memberships = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var GetGroupDetailSchemaDataOwner|null $owner The owner property
    */
    private ?GetGroupDetailSchemaDataOwner $owner = null;
    
    /**
     * @var string|null $ownerId The ownerId property
    */
    private ?string $ownerId = null;
    
    /**
     * @var GetGroupDetailSchemaDataSubscriptionPlansList|null $subscriptionPlans The subscriptionPlans property
    */
    private ?GetGroupDetailSchemaDataSubscriptionPlansList $subscriptionPlans = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Instantiates a new GetGroupDetailSchemaData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetGroupDetailSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetGroupDetailSchemaData {
        return new GetGroupDetailSchemaData();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'memberships' => fn(ParseNode $n) => $o->setMemberships($n->getObjectValue([GetGroupDetailSchemaDataMembershipsList::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([GetGroupDetailSchemaDataOwner::class, 'createFromDiscriminatorValue'])),
            'ownerId' => fn(ParseNode $n) => $o->setOwnerId($n->getStringValue()),
            'subscriptionPlans' => fn(ParseNode $n) => $o->setSubscriptionPlans($n->getObjectValue([GetGroupDetailSchemaDataSubscriptionPlansList::class, 'createFromDiscriminatorValue'])),
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
     * Gets the memberships property value. The memberships property
     * @return GetGroupDetailSchemaDataMembershipsList|null
    */
    public function getMemberships(): ?GetGroupDetailSchemaDataMembershipsList {
        return $this->memberships;
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
     * Gets the owner property value. The owner property
     * @return GetGroupDetailSchemaDataOwner|null
    */
    public function getOwner(): ?GetGroupDetailSchemaDataOwner {
        return $this->owner;
    }

    /**
     * Gets the ownerId property value. The ownerId property
     * @return string|null
    */
    public function getOwnerId(): ?string {
        return $this->ownerId;
    }

    /**
     * Gets the subscriptionPlans property value. The subscriptionPlans property
     * @return GetGroupDetailSchemaDataSubscriptionPlansList|null
    */
    public function getSubscriptionPlans(): ?GetGroupDetailSchemaDataSubscriptionPlansList {
        return $this->subscriptionPlans;
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('memberships', $this->getMemberships());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeStringValue('ownerId', $this->getOwnerId());
        $writer->writeObjectValue('subscriptionPlans', $this->getSubscriptionPlans());
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the memberships property value. The memberships property
     * @param GetGroupDetailSchemaDataMembershipsList|null $value Value to set for the memberships property.
    */
    public function setMemberships(?GetGroupDetailSchemaDataMembershipsList $value): void {
        $this->memberships = $value;
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
     * Sets the owner property value. The owner property
     * @param GetGroupDetailSchemaDataOwner|null $value Value to set for the owner property.
    */
    public function setOwner(?GetGroupDetailSchemaDataOwner $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the ownerId property value. The ownerId property
     * @param string|null $value Value to set for the ownerId property.
    */
    public function setOwnerId(?string $value): void {
        $this->ownerId = $value;
    }

    /**
     * Sets the subscriptionPlans property value. The subscriptionPlans property
     * @param GetGroupDetailSchemaDataSubscriptionPlansList|null $value Value to set for the subscriptionPlans property.
    */
    public function setSubscriptionPlans(?GetGroupDetailSchemaDataSubscriptionPlansList $value): void {
        $this->subscriptionPlans = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
