<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSubscriptionPlanLineItems implements Parsable 
{
    /**
     * @var array<ApiSubscriptionPlansIdGetDataSubscriptionPlanLin>|null $data The data property
    */
    private ?array $data = null;
    
    /**
     * @var bool|null $hasMore The hasMore property
    */
    private ?bool $hasMore = null;
    
    /**
     * @var string|null $path The path property
    */
    private ?string $path = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSubscriptionPlanLineItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSubscriptionPlanLineItems {
        return new DataSubscriptionPlanLineItems();
    }

    /**
     * Gets the data property value. The data property
     * @return array<ApiSubscriptionPlansIdGetDataSubscriptionPlanLin>|null
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
            'data' => fn(ParseNode $n) => $o->setData($n->getCollectionOfObjectValues([ApiSubscriptionPlansIdGetDataSubscriptionPlanLin::class, 'createFromDiscriminatorValue'])),
            'hasMore' => fn(ParseNode $n) => $o->setHasMore($n->getBooleanValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
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
     * Gets the path property value. The path property
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
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
        $writer->writeStringValue('path', $this->getPath());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the data property value. The data property
     * @param array<ApiSubscriptionPlansIdGetDataSubscriptionPlanLin>|null $value Value to set for the data property.
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
     * Sets the path property value. The path property
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->path = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
