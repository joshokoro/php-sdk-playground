<?php

namespace Salable\SDK\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApiSubscriptionsPost implements Parsable 
{
    /**
     * @var bool|null $cancelAtPeriodEnd When `true`, the subscription will be cancelled at the end of the current billing period rather than renewing.
    */
    private ?bool $cancelAtPeriodEnd = null;
    
    /**
     * @var DateTime|null $expiryDate A fixed date on which the subscription expires. Cannot be used together with `isPerpetual`.
    */
    private ?DateTime $expiryDate = null;
    
    /**
     * @var bool|null $ignoreTierTagRestrictions When `true`, tier-tag conflicts between requested plans or an owner's active subscriptions are ignored.
    */
    private ?bool $ignoreTierTagRestrictions = null;
    
    /**
     * @var ApiSubscriptionsPost_interval|null $interval The billing interval for the subscription. One of `day`, `week`, `month`, `year`.
    */
    private ?ApiSubscriptionsPost_interval $interval = null;
    
    /**
     * @var float|null $intervalCount The number of intervals between each billing cycle. For example, `2` with interval `month` means every 2 months.
    */
    private ?float $intervalCount = null;
    
    /**
     * @var bool|null $isPerpetual When `true`, the subscription never expires. Cannot be used together with `expiryDate` or `cancelAtPeriodEnd`.
    */
    private ?bool $isPerpetual = null;
    
    /**
     * @var string|null $owner An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
    */
    private ?string $owner = null;
    
    /**
     * @var array<PostPlans>|null $plans The plans to include in this subscription. At least one plan is required.
    */
    private ?array $plans = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApiSubscriptionsPost
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApiSubscriptionsPost {
        return new ApiSubscriptionsPost();
    }

    /**
     * Gets the cancelAtPeriodEnd property value. When `true`, the subscription will be cancelled at the end of the current billing period rather than renewing.
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * Gets the expiryDate property value. A fixed date on which the subscription expires. Cannot be used together with `isPerpetual`.
     * @return DateTime|null
    */
    public function getExpiryDate(): ?DateTime {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelAtPeriodEnd' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'expiryDate' => fn(ParseNode $n) => $o->setExpiryDate($n->getDateTimeValue()),
            'ignoreTierTagRestrictions' => fn(ParseNode $n) => $o->setIgnoreTierTagRestrictions($n->getBooleanValue()),
            'interval' => fn(ParseNode $n) => $o->setInterval($n->getEnumValue(ApiSubscriptionsPost_interval::class)),
            'intervalCount' => fn(ParseNode $n) => $o->setIntervalCount($n->getFloatValue()),
            'isPerpetual' => fn(ParseNode $n) => $o->setIsPerpetual($n->getBooleanValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PostPlans::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ignoreTierTagRestrictions property value. When `true`, tier-tag conflicts between requested plans or an owner's active subscriptions are ignored.
     * @return bool|null
    */
    public function getIgnoreTierTagRestrictions(): ?bool {
        return $this->ignoreTierTagRestrictions;
    }

    /**
     * Gets the interval property value. The billing interval for the subscription. One of `day`, `week`, `month`, `year`.
     * @return ApiSubscriptionsPost_interval|null
    */
    public function getInterval(): ?ApiSubscriptionsPost_interval {
        return $this->interval;
    }

    /**
     * Gets the intervalCount property value. The number of intervals between each billing cycle. For example, `2` with interval `month` means every 2 months.
     * @return float|null
    */
    public function getIntervalCount(): ?float {
        return $this->intervalCount;
    }

    /**
     * Gets the isPerpetual property value. When `true`, the subscription never expires. Cannot be used together with `expiryDate` or `cancelAtPeriodEnd`.
     * @return bool|null
    */
    public function getIsPerpetual(): ?bool {
        return $this->isPerpetual;
    }

    /**
     * Gets the owner property value. An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the plans property value. The plans to include in this subscription. At least one plan is required.
     * @return array<PostPlans>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancelAtPeriodEnd', $this->getCancelAtPeriodEnd());
        $writer->writeDateTimeValue('expiryDate', $this->getExpiryDate());
        $writer->writeBooleanValue('ignoreTierTagRestrictions', $this->getIgnoreTierTagRestrictions());
        $writer->writeEnumValue('interval', $this->getInterval());
        $writer->writeFloatValue('intervalCount', $this->getIntervalCount());
        $writer->writeBooleanValue('isPerpetual', $this->getIsPerpetual());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
    }

    /**
     * Sets the cancelAtPeriodEnd property value. When `true`, the subscription will be cancelled at the end of the current billing period rather than renewing.
     * @param bool|null $value Value to set for the cancelAtPeriodEnd property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancelAtPeriodEnd = $value;
    }

    /**
     * Sets the expiryDate property value. A fixed date on which the subscription expires. Cannot be used together with `isPerpetual`.
     * @param DateTime|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?DateTime $value): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the ignoreTierTagRestrictions property value. When `true`, tier-tag conflicts between requested plans or an owner's active subscriptions are ignored.
     * @param bool|null $value Value to set for the ignoreTierTagRestrictions property.
    */
    public function setIgnoreTierTagRestrictions(?bool $value): void {
        $this->ignoreTierTagRestrictions = $value;
    }

    /**
     * Sets the interval property value. The billing interval for the subscription. One of `day`, `week`, `month`, `year`.
     * @param ApiSubscriptionsPost_interval|null $value Value to set for the interval property.
    */
    public function setInterval(?ApiSubscriptionsPost_interval $value): void {
        $this->interval = $value;
    }

    /**
     * Sets the intervalCount property value. The number of intervals between each billing cycle. For example, `2` with interval `month` means every 2 months.
     * @param float|null $value Value to set for the intervalCount property.
    */
    public function setIntervalCount(?float $value): void {
        $this->intervalCount = $value;
    }

    /**
     * Sets the isPerpetual property value. When `true`, the subscription never expires. Cannot be used together with `expiryDate` or `cancelAtPeriodEnd`.
     * @param bool|null $value Value to set for the isPerpetual property.
    */
    public function setIsPerpetual(?bool $value): void {
        $this->isPerpetual = $value;
    }

    /**
     * Sets the owner property value. An owner is the tenant a subscription, cart, receipt, or usage record belongs to. Usually a team, organization, or workspace ID, or the user ID for single-user products.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
    }

    /**
     * Sets the plans property value. The plans to include in this subscription. At least one plan is required.
     * @param array<PostPlans>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->plans = $value;
    }

}
