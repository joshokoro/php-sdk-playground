<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateCartRequestSchema implements Parsable 
{
    /**
     * @var CreateCartRequestSchema_currency|null $currency The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. If currency is not provided and all line items have the same default currency, the cart will use Geolocation.
    */
    private ?CreateCartRequestSchema_currency $currency = null;
    
    /**
     * @var CreateCartRequestSchema_interval|null $interval The billing interval for the cart. If set to one of `day`, `week`, `month`, `year`. Must be set alongside `intervalCount`. If set to `null` the cart will be treated as a one off purchase.
    */
    private ?CreateCartRequestSchema_interval $interval = null;
    
    /**
     * @var float|null $intervalCount The number of intervals between billing cycles. Must be set if `interval` is not `null`.
    */
    private ?float $intervalCount = null;
    
    /**
     * @var string|null $owner An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
    */
    private ?string $owner = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateCartRequestSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateCartRequestSchema {
        return new CreateCartRequestSchema();
    }

    /**
     * Gets the currency property value. The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. If currency is not provided and all line items have the same default currency, the cart will use Geolocation.
     * @return CreateCartRequestSchema_currency|null
    */
    public function getCurrency(): ?CreateCartRequestSchema_currency {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getEnumValue(CreateCartRequestSchema_currency::class)),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getEnumValue(CreateCartRequestSchema_interval::class)),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getFloatValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
        ];
    }

    /**
     * Gets the interval property value. The billing interval for the cart. If set to one of `day`, `week`, `month`, `year`. Must be set alongside `intervalCount`. If set to `null` the cart will be treated as a one off purchase.
     * @return CreateCartRequestSchema_interval|null
    */
    public function getInterval(): ?CreateCartRequestSchema_interval {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The number of intervals between billing cycles. Must be set if `interval` is not `null`.
     * @return float|null
    */
    public function getIntervalCount(): ?float {
        return $this->intervalCount;
    }

    /**
     * Gets the owner property value. An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
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
        $writer->writeEnumValue('currency', $this->getCurrency());
        $writer->writeEnumValue('interval', $this->getInterval());
        $writer->writeFloatValue('intervalCount', $this->getIntervalCount());
        $writer->writeStringValue('owner', $this->getOwner());
    }

    /**
     * Sets the currency property value. The case-insensitive three-letter ISO 4217 currency code for the cart. Input is normalized to canonical uppercase. If currency is not provided and all line items have the same default currency, the cart will use Geolocation.
     * @param CreateCartRequestSchema_currency|null $value Value to set for the currency property.
    */
    public function setCurrency(?CreateCartRequestSchema_currency $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the interval property value. The billing interval for the cart. If set to one of `day`, `week`, `month`, `year`. Must be set alongside `intervalCount`. If set to `null` the cart will be treated as a one off purchase.
     * @param CreateCartRequestSchema_interval|null $value Value to set for the interval property.
    */
    public function setInterval(?CreateCartRequestSchema_interval $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The number of intervals between billing cycles. Must be set if `interval` is not `null`.
     * @param float|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?float $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the owner property value. An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

}
