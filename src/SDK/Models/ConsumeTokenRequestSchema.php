<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConsumeTokenRequestSchema implements Parsable 
{
    /**
     * @var int|null $amount The amount of tokens to consume.
    */
    private ?int $amount = null;
    
    /**
     * @var string|null $owner Owner value to consume tokens for.
    */
    private ?string $owner = null;
    
    /**
     * @var string|null $token Token slug to consume tokens for.
    */
    private ?string $token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConsumeTokenRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConsumeTokenRequestSchema {
        return new ConsumeTokenRequestSchema();
    }

    /**
     * Gets the amount property value. The amount of tokens to consume.
     * @return int|null
    */
    public function getAmount(): ?int {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getIntegerValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the owner property value. Owner value to consume tokens for.
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the token property value. Token slug to consume tokens for.
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('amount', $this->getAmount());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the amount property value. The amount of tokens to consume.
     * @param int|null $value Value to set for the amount property.
    */
    public function setAmount(?int $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the owner property value. Owner value to consume tokens for.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the token property value. Token slug to consume tokens for.
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
