<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Lines implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<LinesData>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var string|null $escapedObject The object property
    */
    private ?string $escapedObject = null;
    
    /**
     * @var bool|null $has_more The has_more property
    */
    private ?bool $has_more = null;
    
    /**
     * @var int|null $total_count The total_count property
    */
    private ?int $total_count = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new Lines and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Lines
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Lines {
        return new Lines();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. The data property
     * @return array<LinesData>|null
    */
    public function getData(): ?array {
        return $this->data;
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
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([LinesData::class, 'createFromDiscriminatorValue'])),
            'object' => fn(ParseNode $n) => $o->setEscapedObject($n->getStringValue()),
            'has_more' => fn(ParseNode $n) => $o->setHasMore($n->getBooleanValue()),
            'total_count' => fn(ParseNode $n) => $o->setTotalCount($n->getIntegerValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the has_more property value. The has_more property
     * @return bool|null
    */
    public function getHasMore(): ?bool {
        return $this->has_more;
    }

    /**
     * Gets the total_count property value. The total_count property
     * @return int|null
    */
    public function getTotalCount(): ?int {
        return $this->total_count;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('data', $this->getData());
        $writer->writeStringValue('object', $this->getEscapedObject());
        $writer->writeBooleanValue('has_more', $this->getHasMore());
        $writer->writeIntegerValue('total_count', $this->getTotalCount());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the data property value. The data property
     * @param array<LinesData>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

    /**
     * Sets the object property value. The object property
     * @param string|null $value Value to set for the object property.
    */
    public function setEscapedObject(?string $value): void {
        $this->escapedObject = $value;
    }

    /**
     * Sets the has_more property value. The has_more property
     * @param bool|null $value Value to set for the has_more property.
    */
    public function setHasMore(?bool $value): void {
        $this->has_more = $value;
    }

    /**
     * Sets the total_count property value. The total_count property
     * @param int|null $value Value to set for the total_count property.
    */
    public function setTotalCount(?int $value): void {
        $this->total_count = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
