<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Discounts implements Parsable 
{
    /**
     * @var string|null $coupon The Stripe coupon ID to apply to the checkout session.
    */
    private ?string $coupon = null;
    
    /**
     * @var string|null $promotionCode The Stripe promotion code ID to apply to the checkout session.
    */
    private ?string $promotionCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Discounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Discounts {
        return new Discounts();
    }

    /**
     * Gets the coupon property value. The Stripe coupon ID to apply to the checkout session.
     * @return string|null
    */
    public function getCoupon(): ?string {
        return $this->coupon;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coupon' => fn(ParseNode $n) => $o->setCoupon($n->getStringValue()),
            'promotionCode' => fn(ParseNode $n) => $o->setPromotionCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the promotionCode property value. The Stripe promotion code ID to apply to the checkout session.
     * @return string|null
    */
    public function getPromotionCode(): ?string {
        return $this->promotionCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('coupon', $this->getCoupon());
        $writer->writeStringValue('promotionCode', $this->getPromotionCode());
    }

    /**
     * Sets the coupon property value. The Stripe coupon ID to apply to the checkout session.
     * @param string|null $value Value to set for the coupon property.
    */
    public function setCoupon(?string $value): void {
        $this->coupon = $value;
    }

    /**
     * Sets the promotionCode property value. The Stripe promotion code ID to apply to the checkout session.
     * @param string|null $value Value to set for the promotionCode property.
    */
    public function setPromotionCode(?string $value): void {
        $this->promotionCode = $value;
    }

}
