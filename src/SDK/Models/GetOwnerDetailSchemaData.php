<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetOwnerDetailSchemaData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CartsList|null $carts The carts property
    */
    private ?CartsList $carts = null;
    
    /**
     * @var string|null $createdAt The createdAt property
    */
    private ?string $createdAt = null;
    
    /**
     * @var string|null $emailAddress The emailAddress property
    */
    private ?string $emailAddress = null;
    
    /**
     * @var GroupsList|null $groups The groups property
    */
    private ?GroupsList $groups = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var GetOwnerDetailSchemaDataReceiptsList|null $receipts The receipts property
    */
    private ?GetOwnerDetailSchemaDataReceiptsList $receipts = null;
    
    /**
     * @var string|null $stripeCustomerId The stripeCustomerId property
    */
    private ?string $stripeCustomerId = null;
    
    /**
     * @var GetOwnerDetailSchemaDataSubscriptionsList|null $subscriptions The subscriptions property
    */
    private ?GetOwnerDetailSchemaDataSubscriptionsList $subscriptions = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new GetOwnerDetailSchemaData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetOwnerDetailSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetOwnerDetailSchemaData {
        return new GetOwnerDetailSchemaData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the carts property value. The carts property
     * @return CartsList|null
    */
    public function getCarts(): ?CartsList {
        return $this->carts;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return string|null
    */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Gets the emailAddress property value. The emailAddress property
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'carts' => fn(ParseNode $n) => $o->setCarts($n->getObjectValue([CartsList::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getObjectValue([GroupsList::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'receipts' => fn(ParseNode $n) => $o->setReceipts($n->getObjectValue([GetOwnerDetailSchemaDataReceiptsList::class, 'createFromDiscriminatorValue'])),
            'stripeCustomerId' => fn(ParseNode $n) => $o->setStripeCustomerId($n->getStringValue()),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getObjectValue([GetOwnerDetailSchemaDataSubscriptionsList::class, 'createFromDiscriminatorValue'])),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the groups property value. The groups property
     * @return GroupsList|null
    */
    public function getGroups(): ?GroupsList {
        return $this->groups;
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
     * Gets the receipts property value. The receipts property
     * @return GetOwnerDetailSchemaDataReceiptsList|null
    */
    public function getReceipts(): ?GetOwnerDetailSchemaDataReceiptsList {
        return $this->receipts;
    }

    /**
     * Gets the stripeCustomerId property value. The stripeCustomerId property
     * @return string|null
    */
    public function getStripeCustomerId(): ?string {
        return $this->stripeCustomerId;
    }

    /**
     * Gets the subscriptions property value. The subscriptions property
     * @return GetOwnerDetailSchemaDataSubscriptionsList|null
    */
    public function getSubscriptions(): ?GetOwnerDetailSchemaDataSubscriptionsList {
        return $this->subscriptions;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return string|null
    */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('carts', $this->getCarts());
        $writer->writeStringValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeObjectValue('groups', $this->getGroups());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeObjectValue('receipts', $this->getReceipts());
        $writer->writeStringValue('stripeCustomerId', $this->getStripeCustomerId());
        $writer->writeObjectValue('subscriptions', $this->getSubscriptions());
        $writer->writeStringValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the carts property value. The carts property
     * @param CartsList|null $value Value to set for the carts property.
    */
    public function setCarts(?CartsList $value): void {
        $this->carts = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param string|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?string $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the emailAddress property value. The emailAddress property
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the groups property value. The groups property
     * @param GroupsList|null $value Value to set for the groups property.
    */
    public function setGroups(?GroupsList $value): void {
        $this->groups = $value;
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
     * Sets the receipts property value. The receipts property
     * @param GetOwnerDetailSchemaDataReceiptsList|null $value Value to set for the receipts property.
    */
    public function setReceipts(?GetOwnerDetailSchemaDataReceiptsList $value): void {
        $this->receipts = $value;
    }

    /**
     * Sets the stripeCustomerId property value. The stripeCustomerId property
     * @param string|null $value Value to set for the stripeCustomerId property.
    */
    public function setStripeCustomerId(?string $value): void {
        $this->stripeCustomerId = $value;
    }

    /**
     * Sets the subscriptions property value. The subscriptions property
     * @param GetOwnerDetailSchemaDataSubscriptionsList|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?GetOwnerDetailSchemaDataSubscriptionsList $value): void {
        $this->subscriptions = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
