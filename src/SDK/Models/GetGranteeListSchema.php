<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetGranteeListSchema implements Parsable 
{
    /**
     * @var array<GetGranteeListSchemaData>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var bool|null $hasMore The hasMore property
    */
    private ?bool $hasMore = null;
    
    /**
     * @var string|null $nextCursor The nextCursor property
    */
    private ?string $nextCursor = null;
    
    /**
     * @var string|null $previousCursor The previousCursor property
    */
    private ?string $previousCursor = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetGranteeListSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetGranteeListSchema {
        return new GetGranteeListSchema();
    }

    /**
     * Gets the data property value. The data property
     * @return array<GetGranteeListSchemaData>|null
    */
    public function getData(): ?array {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([GetGranteeListSchemaData::class, 'createFromDiscriminatorValue'])),
            'hasMore' => fn(ParseNode $n) => $o->setHasMore($n->getBooleanValue()),
            'nextCursor' => fn(ParseNode $n) => $o->setNextCursor($n->getStringValue()),
            'previousCursor' => fn(ParseNode $n) => $o->setPreviousCursor($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasMore property value. The hasMore property
     * @return bool|null
    */
    public function getHasMore(): ?bool {
        return $this->hasMore;
    }

    /**
     * Gets the nextCursor property value. The nextCursor property
     * @return string|null
    */
    public function getNextCursor(): ?string {
        return $this->nextCursor;
    }

    /**
     * Gets the previousCursor property value. The previousCursor property
     * @return string|null
    */
    public function getPreviousCursor(): ?string {
        return $this->previousCursor;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('data', $this->getData());
        $writer->writeBooleanValue('hasMore', $this->getHasMore());
        $writer->writeStringValue('nextCursor', $this->getNextCursor());
        $writer->writeStringValue('previousCursor', $this->getPreviousCursor());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the data property value. The data property
     * @param array<GetGranteeListSchemaData>|null $value Value to set for the data property.
    */
    public function setData(?array $value): void {
        $this->data = $value;
    }

    /**
     * Sets the hasMore property value. The hasMore property
     * @param bool|null $value Value to set for the hasMore property.
    */
    public function setHasMore(?bool $value): void {
        $this->hasMore = $value;
    }

    /**
     * Sets the nextCursor property value. The nextCursor property
     * @param string|null $value Value to set for the nextCursor property.
    */
    public function setNextCursor(?string $value): void {
        $this->nextCursor = $value;
    }

    /**
     * Sets the previousCursor property value. The previousCursor property
     * @param string|null $value Value to set for the previousCursor property.
    */
    public function setPreviousCursor(?string $value): void {
        $this->previousCursor = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
