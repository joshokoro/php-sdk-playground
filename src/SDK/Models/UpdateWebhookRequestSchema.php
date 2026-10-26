<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateWebhookRequestSchema implements Parsable 
{
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $disabled When true, new events are dropped until the webhook is enabled; dropped events are not replayed.
    */
    private ?bool $disabled = null;
    
    /**
     * @var array<UpdateWebhookRequestSchema_events>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateWebhookRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateWebhookRequestSchema {
        return new UpdateWebhookRequestSchema();
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disabled property value. When true, new events are dropped until the webhook is enabled; dropped events are not replayed.
     * @return bool|null
    */
    public function getDisabled(): ?bool {
        return $this->disabled;
    }

    /**
     * Gets the events property value. The events property
     * @return array<UpdateWebhookRequestSchema_events>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabled' => fn(ParseNode $n) => $o->setDisabled($n->getBooleanValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfEnumValues(UpdateWebhookRequestSchema_events::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('disabled', $this->getDisabled());
        $writer->writeCollectionOfEnumValues('events', $this->getEvents());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the disabled property value. When true, new events are dropped until the webhook is enabled; dropped events are not replayed.
     * @param bool|null $value Value to set for the disabled property.
    */
    public function setDisabled(?bool $value): void {
        $this->disabled = $value;
    }

    /**
     * Sets the events property value. The events property
     * @param array<UpdateWebhookRequestSchema_events>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
