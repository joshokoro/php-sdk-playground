<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PricesData implements AdditionalDataHolder, Parsable 
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
     * @var CurrencyOptionsList|null $currencyOptions The currencyOptions property
    */
    private ?CurrencyOptionsList $currencyOptions = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var int|null $intervalCount The intervalCount property
    */
    private ?int $intervalCount = null;
    
    /**
     * @var string|null $lineItemId The lineItemId property
    */
    private ?string $lineItemId = null;
    
    /**
     * @var string|null $organisation The organisation property
    */
    private ?string $organisation = null;
    
    /**
     * @var string|null $stripePriceId The stripePriceId property
    */
    private ?string $stripePriceId = null;
    
    /**
     * @var string|null $updatedAt The updatedAt property
    */
    private ?string $updatedAt = null;
    
    /**
     * Instantiates a new PricesData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PricesData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PricesData {
        return new PricesData();
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
     * Gets the currencyOptions property value. The currencyOptions property
     * @return CurrencyOptionsList|null
    */
    public function getCurrencyOptions(): ?CurrencyOptionsList {
        return $this->currencyOptions;
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
            'currencyOptions' => fn(ParseNode $n) => $o->setCurrencyOptions($n->getObjectValue([CurrencyOptionsList::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getIntegerValue()),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'organisation' => fn(ParseNode $n) => $o->setOrganisation($n->getStringValue()),
            'stripePriceId' => fn(ParseNode $n) => $o->setStripePriceId($n->getStringValue()),
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
     * Gets the intervalCount property value. The intervalCount property
     * @return int|null
    */
    public function getIntervalCount(): ?int {
        return $this->intervalCount;
    }

    /**
     * Gets the lineItemId property value. The lineItemId property
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the organisation property value. The organisation property
     * @return string|null
    */
    public function getOrganisation(): ?string {
        return $this->organisation;
    }

    /**
     * Gets the stripePriceId property value. The stripePriceId property
     * @return string|null
    */
    public function getStripePriceId(): ?string {
        return $this->stripePriceId;
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
        $writer->writeObjectValue('currencyOptions', $this->getCurrencyOptions());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('intervalCount', $this->getIntervalCount());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeStringValue('organisation', $this->getOrganisation());
        $writer->writeStringValue('stripePriceId', $this->getStripePriceId());
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
     * Sets the currencyOptions property value. The currencyOptions property
     * @param CurrencyOptionsList|null $value Value to set for the currencyOptions property.
    */
    public function setCurrencyOptions(?CurrencyOptionsList $value): void {
        $this->currencyOptions = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the intervalCount property value. The intervalCount property
     * @param int|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?int $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the lineItemId property value. The lineItemId property
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the organisation property value. The organisation property
     * @param string|null $value Value to set for the organisation property.
    */
    public function setOrganisation(?string $value): void {
        $this->organisation = $value;
    }

    /**
     * Sets the stripePriceId property value. The stripePriceId property
     * @param string|null $value Value to set for the stripePriceId property.
    */
    public function setStripePriceId(?string $value): void {
        $this->stripePriceId = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param string|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?string $value): void {
        $this->updatedAt = $value;
    }

}
