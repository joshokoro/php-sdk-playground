<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateCartRequestSchema implements Parsable 
{
    /**
     * @var array<CartItems>|null $cartItems The cartItems property
    */
    private ?array $cartItems = null;
    
    /**
     * @var UpdateCartRequestSchema_currency|null $currency The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. Omit this property to leave the currency unchanged, or set it to `null` to clear the cart currency.
    */
    private ?UpdateCartRequestSchema_currency $currency = null;
    
    /**
     * @var string|null $owner The owner property
    */
    private ?string $owner = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCartRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCartRequestSchema {
        return new UpdateCartRequestSchema();
    }

    /**
     * Gets the cartItems property value. The cartItems property
     * @return array<CartItems>|null
    */
    public function getCartItems(): ?array {
        return $this->cartItems;
    }

    /**
     * Gets the currency property value. The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. Omit this property to leave the currency unchanged, or set it to `null` to clear the cart currency.
     * @return UpdateCartRequestSchema_currency|null
    */
    public function getCurrency(): ?UpdateCartRequestSchema_currency {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cartItems' => fn(ParseNode $n) => $o->setCartItems($n->getCollectionOfObjectValues([CartItems::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(UpdateCartRequestSchema_currency::class)),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
        ];
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('cartItems', $this->getCartItems());
        $writer->writeEnumValue('currency', $this->getCurrency());
        $writer->writeStringValue('owner', $this->getOwner());
    }

    /**
     * Sets the cartItems property value. The cartItems property
     * @param array<CartItems>|null $value Value to set for the cartItems property.
    */
    public function setCartItems(?array $value): void {
        $this->cartItems = $value;
    }

    /**
     * Sets the currency property value. The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. Omit this property to leave the currency unchanged, or set it to `null` to clear the cart currency.
     * @param UpdateCartRequestSchema_currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?UpdateCartRequestSchema_currency $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

}
