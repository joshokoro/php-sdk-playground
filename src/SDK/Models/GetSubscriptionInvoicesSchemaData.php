<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetSubscriptionInvoicesSchemaData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $account_country The account_country property
    */
    private ?string $account_country = null;
    
    /**
     * @var string|null $account_name The account_name property
    */
    private ?string $account_name = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $amount_due The amount_due property
    */
    private ?int $amount_due = null;
    
    /**
     * @var int|null $amount_overpaid The amount_overpaid property
    */
    private ?int $amount_overpaid = null;
    
    /**
     * @var int|null $amount_paid The amount_paid property
    */
    private ?int $amount_paid = null;
    
    /**
     * @var int|null $amount_remaining The amount_remaining property
    */
    private ?int $amount_remaining = null;
    
    /**
     * @var int|null $amount_shipping The amount_shipping property
    */
    private ?int $amount_shipping = null;
    
    /**
     * @var string|null $application The application property
    */
    private ?string $application = null;
    
    /**
     * @var int|null $attempt_count The attempt_count property
    */
    private ?int $attempt_count = null;
    
    /**
     * @var bool|null $attempted The attempted property
    */
    private ?bool $attempted = null;
    
    /**
     * @var bool|null $auto_advance The auto_advance property
    */
    private ?bool $auto_advance = null;
    
    /**
     * @var AutomaticTax|null $automatic_tax The automatic_tax property
    */
    private ?AutomaticTax $automatic_tax = null;
    
    /**
     * @var string|null $billing_reason The billing_reason property
    */
    private ?string $billing_reason = null;
    
    /**
     * @var string|null $collection_method The collection_method property
    */
    private ?string $collection_method = null;
    
    /**
     * @var int|null $created The created property
    */
    private ?int $created = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $customer The customer property
    */
    private ?string $customer = null;
    
    /**
     * @var CustomerAddress|null $customer_address The customer_address property
    */
    private ?CustomerAddress $customer_address = null;
    
    /**
     * @var string|null $customer_email The customer_email property
    */
    private ?string $customer_email = null;
    
    /**
     * @var string|null $customer_name The customer_name property
    */
    private ?string $customer_name = null;
    
    /**
     * @var string|null $customer_tax_exempt The customer_tax_exempt property
    */
    private ?string $customer_tax_exempt = null;
    
    /**
     * @var int|null $effective_at The effective_at property
    */
    private ?int $effective_at = null;
    
    /**
     * @var int|null $ending_balance The ending_balance property
    */
    private ?int $ending_balance = null;
    
    /**
     * @var string|null $escapedObject The object property
    */
    private ?string $escapedObject = null;
    
    /**
     * @var string|null $hosted_invoice_url The hosted_invoice_url property
    */
    private ?string $hosted_invoice_url = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $invoice_pdf The invoice_pdf property
    */
    private ?string $invoice_pdf = null;
    
    /**
     * @var Issuer|null $issuer The issuer property
    */
    private ?Issuer $issuer = null;
    
    /**
     * @var Lines|null $lines The lines property
    */
    private ?Lines $lines = null;
    
    /**
     * @var bool|null $livemode The livemode property
    */
    private ?bool $livemode = null;
    
    /**
     * @var DataMetadata|null $metadata The metadata property
    */
    private ?DataMetadata $metadata = null;
    
    /**
     * @var string|null $number The number property
    */
    private ?string $number = null;
    
    /**
     * @var bool|null $paid The paid property
    */
    private ?bool $paid = null;
    
    /**
     * @var bool|null $paid_out_of_band The paid_out_of_band property
    */
    private ?bool $paid_out_of_band = null;
    
    /**
     * @var DataParent|null $parent The parent property
    */
    private ?DataParent $parent = null;
    
    /**
     * @var PaymentSettings|null $payment_settings The payment_settings property
    */
    private ?PaymentSettings $payment_settings = null;
    
    /**
     * @var int|null $period_end The period_end property
    */
    private ?int $period_end = null;
    
    /**
     * @var int|null $period_start The period_start property
    */
    private ?int $period_start = null;
    
    /**
     * @var int|null $post_payment_credit_notes_amount The post_payment_credit_notes_amount property
    */
    private ?int $post_payment_credit_notes_amount = null;
    
    /**
     * @var int|null $pre_payment_credit_notes_amount The pre_payment_credit_notes_amount property
    */
    private ?int $pre_payment_credit_notes_amount = null;
    
    /**
     * @var int|null $starting_balance The starting_balance property
    */
    private ?int $starting_balance = null;
    
    /**
     * @var GetSubscriptionInvoicesSchemaData_status|null $status The status property
    */
    private ?GetSubscriptionInvoicesSchemaData_status $status = null;
    
    /**
     * @var StatusTransitions|null $status_transitions The status_transitions property
    */
    private ?StatusTransitions $status_transitions = null;
    
    /**
     * @var string|null $subscription The subscription property
    */
    private ?string $subscription = null;
    
    /**
     * @var DataSubscriptionDetails|null $subscription_details The subscription_details property
    */
    private ?DataSubscriptionDetails $subscription_details = null;
    
    /**
     * @var int|null $subtotal The subtotal property
    */
    private ?int $subtotal = null;
    
    /**
     * @var int|null $subtotal_excluding_tax The subtotal_excluding_tax property
    */
    private ?int $subtotal_excluding_tax = null;
    
    /**
     * @var int|null $total The total property
    */
    private ?int $total = null;
    
    /**
     * @var int|null $total_excluding_tax The total_excluding_tax property
    */
    private ?int $total_excluding_tax = null;
    
    /**
     * @var int|null $webhooks_delivered_at The webhooks_delivered_at property
    */
    private ?int $webhooks_delivered_at = null;
    
    /**
     * Instantiates a new GetSubscriptionInvoicesSchemaData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetSubscriptionInvoicesSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetSubscriptionInvoicesSchemaData {
        return new GetSubscriptionInvoicesSchemaData();
    }

    /**
     * Gets the account_country property value. The account_country property
     * @return string|null
    */
    public function getAccountCountry(): ?string {
        return $this->account_country;
    }

    /**
     * Gets the account_name property value. The account_name property
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->account_name;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount_due property value. The amount_due property
     * @return int|null
    */
    public function getAmountDue(): ?int {
        return $this->amount_due;
    }

    /**
     * Gets the amount_overpaid property value. The amount_overpaid property
     * @return int|null
    */
    public function getAmountOverpaid(): ?int {
        return $this->amount_overpaid;
    }

    /**
     * Gets the amount_paid property value. The amount_paid property
     * @return int|null
    */
    public function getAmountPaid(): ?int {
        return $this->amount_paid;
    }

    /**
     * Gets the amount_remaining property value. The amount_remaining property
     * @return int|null
    */
    public function getAmountRemaining(): ?int {
        return $this->amount_remaining;
    }

    /**
     * Gets the amount_shipping property value. The amount_shipping property
     * @return int|null
    */
    public function getAmountShipping(): ?int {
        return $this->amount_shipping;
    }

    /**
     * Gets the application property value. The application property
     * @return string|null
    */
    public function getApplication(): ?string {
        return $this->application;
    }

    /**
     * Gets the attempt_count property value. The attempt_count property
     * @return int|null
    */
    public function getAttemptCount(): ?int {
        return $this->attempt_count;
    }

    /**
     * Gets the attempted property value. The attempted property
     * @return bool|null
    */
    public function getAttempted(): ?bool {
        return $this->attempted;
    }

    /**
     * Gets the auto_advance property value. The auto_advance property
     * @return bool|null
    */
    public function getAutoAdvance(): ?bool {
        return $this->auto_advance;
    }

    /**
     * Gets the automatic_tax property value. The automatic_tax property
     * @return AutomaticTax|null
    */
    public function getAutomaticTax(): ?AutomaticTax {
        return $this->automatic_tax;
    }

    /**
     * Gets the billing_reason property value. The billing_reason property
     * @return string|null
    */
    public function getBillingReason(): ?string {
        return $this->billing_reason;
    }

    /**
     * Gets the collection_method property value. The collection_method property
     * @return string|null
    */
    public function getCollectionMethod(): ?string {
        return $this->collection_method;
    }

    /**
     * Gets the created property value. The created property
     * @return int|null
    */
    public function getCreated(): ?int {
        return $this->created;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the customer property value. The customer property
     * @return string|null
    */
    public function getCustomer(): ?string {
        return $this->customer;
    }

    /**
     * Gets the customer_address property value. The customer_address property
     * @return CustomerAddress|null
    */
    public function getCustomerAddress(): ?CustomerAddress {
        return $this->customer_address;
    }

    /**
     * Gets the customer_email property value. The customer_email property
     * @return string|null
    */
    public function getCustomerEmail(): ?string {
        return $this->customer_email;
    }

    /**
     * Gets the customer_name property value. The customer_name property
     * @return string|null
    */
    public function getCustomerName(): ?string {
        return $this->customer_name;
    }

    /**
     * Gets the customer_tax_exempt property value. The customer_tax_exempt property
     * @return string|null
    */
    public function getCustomerTaxExempt(): ?string {
        return $this->customer_tax_exempt;
    }

    /**
     * Gets the effective_at property value. The effective_at property
     * @return int|null
    */
    public function getEffectiveAt(): ?int {
        return $this->effective_at;
    }

    /**
     * Gets the ending_balance property value. The ending_balance property
     * @return int|null
    */
    public function getEndingBalance(): ?int {
        return $this->ending_balance;
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
            'account_country' => fn(ParseNode $n) => $o->setAccountCountry($n->getStringValue()),
            'account_name' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'amount_due' => fn(ParseNode $n) => $o->setAmountDue($n->getIntegerValue()),
            'amount_overpaid' => fn(ParseNode $n) => $o->setAmountOverpaid($n->getIntegerValue()),
            'amount_paid' => fn(ParseNode $n) => $o->setAmountPaid($n->getIntegerValue()),
            'amount_remaining' => fn(ParseNode $n) => $o->setAmountRemaining($n->getIntegerValue()),
            'amount_shipping' => fn(ParseNode $n) => $o->setAmountShipping($n->getIntegerValue()),
            'application' => fn(ParseNode $n) => $o->setApplication($n->getStringValue()),
            'attempt_count' => fn(ParseNode $n) => $o->setAttemptCount($n->getIntegerValue()),
            'attempted' => fn(ParseNode $n) => $o->setAttempted($n->getBooleanValue()),
            'auto_advance' => fn(ParseNode $n) => $o->setAutoAdvance($n->getBooleanValue()),
            'automatic_tax' => fn(ParseNode $n) => $o->setAutomaticTax($n->getObjectValue([AutomaticTax::class, 'createFromDiscriminatorValue'])),
            'billing_reason' => fn(ParseNode $n) => $o->setBillingReason($n->getStringValue()),
            'collection_method' => fn(ParseNode $n) => $o->setCollectionMethod($n->getStringValue()),
            'created' => fn(ParseNode $n) => $o->setCreated($n->getIntegerValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getStringValue()),
            'customer_address' => fn(ParseNode $n) => $o->setCustomerAddress($n->getObjectValue([CustomerAddress::class, 'createFromDiscriminatorValue'])),
            'customer_email' => fn(ParseNode $n) => $o->setCustomerEmail($n->getStringValue()),
            'customer_name' => fn(ParseNode $n) => $o->setCustomerName($n->getStringValue()),
            'customer_tax_exempt' => fn(ParseNode $n) => $o->setCustomerTaxExempt($n->getStringValue()),
            'effective_at' => fn(ParseNode $n) => $o->setEffectiveAt($n->getIntegerValue()),
            'ending_balance' => fn(ParseNode $n) => $o->setEndingBalance($n->getIntegerValue()),
            'object' => fn(ParseNode $n) => $o->setEscapedObject($n->getStringValue()),
            'hosted_invoice_url' => fn(ParseNode $n) => $o->setHostedInvoiceUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'invoice_pdf' => fn(ParseNode $n) => $o->setInvoicePdf($n->getStringValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getObjectValue([Issuer::class, 'createFromDiscriminatorValue'])),
            'lines' => fn(ParseNode $n) => $o->setLines($n->getObjectValue([Lines::class, 'createFromDiscriminatorValue'])),
            'livemode' => fn(ParseNode $n) => $o->setLivemode($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([DataMetadata::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'paid' => fn(ParseNode $n) => $o->setPaid($n->getBooleanValue()),
            'paid_out_of_band' => fn(ParseNode $n) => $o->setPaidOutOfBand($n->getBooleanValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([DataParent::class, 'createFromDiscriminatorValue'])),
            'payment_settings' => fn(ParseNode $n) => $o->setPaymentSettings($n->getObjectValue([PaymentSettings::class, 'createFromDiscriminatorValue'])),
            'period_end' => fn(ParseNode $n) => $o->setPeriodEnd($n->getIntegerValue()),
            'period_start' => fn(ParseNode $n) => $o->setPeriodStart($n->getIntegerValue()),
            'post_payment_credit_notes_amount' => fn(ParseNode $n) => $o->setPostPaymentCreditNotesAmount($n->getIntegerValue()),
            'pre_payment_credit_notes_amount' => fn(ParseNode $n) => $o->setPrePaymentCreditNotesAmount($n->getIntegerValue()),
            'starting_balance' => fn(ParseNode $n) => $o->setStartingBalance($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([GetSubscriptionInvoicesSchemaData_status::class, 'createFromDiscriminatorValue'])),
            'status_transitions' => fn(ParseNode $n) => $o->setStatusTransitions($n->getObjectValue([StatusTransitions::class, 'createFromDiscriminatorValue'])),
            'subscription' => fn(ParseNode $n) => $o->setSubscription($n->getStringValue()),
            'subscription_details' => fn(ParseNode $n) => $o->setSubscriptionDetails($n->getObjectValue([DataSubscriptionDetails::class, 'createFromDiscriminatorValue'])),
            'subtotal' => fn(ParseNode $n) => $o->setSubtotal($n->getIntegerValue()),
            'subtotal_excluding_tax' => fn(ParseNode $n) => $o->setSubtotalExcludingTax($n->getIntegerValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'total_excluding_tax' => fn(ParseNode $n) => $o->setTotalExcludingTax($n->getIntegerValue()),
            'webhooks_delivered_at' => fn(ParseNode $n) => $o->setWebhooksDeliveredAt($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the hosted_invoice_url property value. The hosted_invoice_url property
     * @return string|null
    */
    public function getHostedInvoiceUrl(): ?string {
        return $this->hosted_invoice_url;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the invoice_pdf property value. The invoice_pdf property
     * @return string|null
    */
    public function getInvoicePdf(): ?string {
        return $this->invoice_pdf;
    }

    /**
     * Gets the issuer property value. The issuer property
     * @return Issuer|null
    */
    public function getIssuer(): ?Issuer {
        return $this->issuer;
    }

    /**
     * Gets the lines property value. The lines property
     * @return Lines|null
    */
    public function getLines(): ?Lines {
        return $this->lines;
    }

    /**
     * Gets the livemode property value. The livemode property
     * @return bool|null
    */
    public function getLivemode(): ?bool {
        return $this->livemode;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return DataMetadata|null
    */
    public function getMetadata(): ?DataMetadata {
        return $this->metadata;
    }

    /**
     * Gets the number property value. The number property
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the paid property value. The paid property
     * @return bool|null
    */
    public function getPaid(): ?bool {
        return $this->paid;
    }

    /**
     * Gets the paid_out_of_band property value. The paid_out_of_band property
     * @return bool|null
    */
    public function getPaidOutOfBand(): ?bool {
        return $this->paid_out_of_band;
    }

    /**
     * Gets the parent property value. The parent property
     * @return DataParent|null
    */
    public function getParent(): ?DataParent {
        return $this->parent;
    }

    /**
     * Gets the payment_settings property value. The payment_settings property
     * @return PaymentSettings|null
    */
    public function getPaymentSettings(): ?PaymentSettings {
        return $this->payment_settings;
    }

    /**
     * Gets the period_end property value. The period_end property
     * @return int|null
    */
    public function getPeriodEnd(): ?int {
        return $this->period_end;
    }

    /**
     * Gets the period_start property value. The period_start property
     * @return int|null
    */
    public function getPeriodStart(): ?int {
        return $this->period_start;
    }

    /**
     * Gets the post_payment_credit_notes_amount property value. The post_payment_credit_notes_amount property
     * @return int|null
    */
    public function getPostPaymentCreditNotesAmount(): ?int {
        return $this->post_payment_credit_notes_amount;
    }

    /**
     * Gets the pre_payment_credit_notes_amount property value. The pre_payment_credit_notes_amount property
     * @return int|null
    */
    public function getPrePaymentCreditNotesAmount(): ?int {
        return $this->pre_payment_credit_notes_amount;
    }

    /**
     * Gets the starting_balance property value. The starting_balance property
     * @return int|null
    */
    public function getStartingBalance(): ?int {
        return $this->starting_balance;
    }

    /**
     * Gets the status property value. The status property
     * @return GetSubscriptionInvoicesSchemaData_status|null
    */
    public function getStatus(): ?GetSubscriptionInvoicesSchemaData_status {
        return $this->status;
    }

    /**
     * Gets the status_transitions property value. The status_transitions property
     * @return StatusTransitions|null
    */
    public function getStatusTransitions(): ?StatusTransitions {
        return $this->status_transitions;
    }

    /**
     * Gets the subscription property value. The subscription property
     * @return string|null
    */
    public function getSubscription(): ?string {
        return $this->subscription;
    }

    /**
     * Gets the subscription_details property value. The subscription_details property
     * @return DataSubscriptionDetails|null
    */
    public function getSubscriptionDetails(): ?DataSubscriptionDetails {
        return $this->subscription_details;
    }

    /**
     * Gets the subtotal property value. The subtotal property
     * @return int|null
    */
    public function getSubtotal(): ?int {
        return $this->subtotal;
    }

    /**
     * Gets the subtotal_excluding_tax property value. The subtotal_excluding_tax property
     * @return int|null
    */
    public function getSubtotalExcludingTax(): ?int {
        return $this->subtotal_excluding_tax;
    }

    /**
     * Gets the total property value. The total property
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the total_excluding_tax property value. The total_excluding_tax property
     * @return int|null
    */
    public function getTotalExcludingTax(): ?int {
        return $this->total_excluding_tax;
    }

    /**
     * Gets the webhooks_delivered_at property value. The webhooks_delivered_at property
     * @return int|null
    */
    public function getWebhooksDeliveredAt(): ?int {
        return $this->webhooks_delivered_at;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('account_country', $this->getAccountCountry());
        $writer->writeStringValue('account_name', $this->getAccountName());
        $writer->writeIntegerValue('amount_due', $this->getAmountDue());
        $writer->writeIntegerValue('amount_overpaid', $this->getAmountOverpaid());
        $writer->writeIntegerValue('amount_paid', $this->getAmountPaid());
        $writer->writeIntegerValue('amount_remaining', $this->getAmountRemaining());
        $writer->writeIntegerValue('amount_shipping', $this->getAmountShipping());
        $writer->writeStringValue('application', $this->getApplication());
        $writer->writeBooleanValue('attempted', $this->getAttempted());
        $writer->writeIntegerValue('attempt_count', $this->getAttemptCount());
        $writer->writeObjectValue('automatic_tax', $this->getAutomaticTax());
        $writer->writeBooleanValue('auto_advance', $this->getAutoAdvance());
        $writer->writeStringValue('billing_reason', $this->getBillingReason());
        $writer->writeStringValue('collection_method', $this->getCollectionMethod());
        $writer->writeIntegerValue('created', $this->getCreated());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('customer', $this->getCustomer());
        $writer->writeObjectValue('customer_address', $this->getCustomerAddress());
        $writer->writeStringValue('customer_email', $this->getCustomerEmail());
        $writer->writeStringValue('customer_name', $this->getCustomerName());
        $writer->writeStringValue('customer_tax_exempt', $this->getCustomerTaxExempt());
        $writer->writeIntegerValue('effective_at', $this->getEffectiveAt());
        $writer->writeIntegerValue('ending_balance', $this->getEndingBalance());
        $writer->writeStringValue('object', $this->getEscapedObject());
        $writer->writeStringValue('hosted_invoice_url', $this->getHostedInvoiceUrl());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('invoice_pdf', $this->getInvoicePdf());
        $writer->writeObjectValue('issuer', $this->getIssuer());
        $writer->writeObjectValue('lines', $this->getLines());
        $writer->writeBooleanValue('livemode', $this->getLivemode());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeBooleanValue('paid', $this->getPaid());
        $writer->writeBooleanValue('paid_out_of_band', $this->getPaidOutOfBand());
        $writer->writeObjectValue('parent', $this->getParent());
        $writer->writeObjectValue('payment_settings', $this->getPaymentSettings());
        $writer->writeIntegerValue('period_end', $this->getPeriodEnd());
        $writer->writeIntegerValue('period_start', $this->getPeriodStart());
        $writer->writeIntegerValue('post_payment_credit_notes_amount', $this->getPostPaymentCreditNotesAmount());
        $writer->writeIntegerValue('pre_payment_credit_notes_amount', $this->getPrePaymentCreditNotesAmount());
        $writer->writeIntegerValue('starting_balance', $this->getStartingBalance());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeObjectValue('status_transitions', $this->getStatusTransitions());
        $writer->writeStringValue('subscription', $this->getSubscription());
        $writer->writeObjectValue('subscription_details', $this->getSubscriptionDetails());
        $writer->writeIntegerValue('subtotal', $this->getSubtotal());
        $writer->writeIntegerValue('subtotal_excluding_tax', $this->getSubtotalExcludingTax());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeIntegerValue('total_excluding_tax', $this->getTotalExcludingTax());
        $writer->writeIntegerValue('webhooks_delivered_at', $this->getWebhooksDeliveredAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the account_country property value. The account_country property
     * @param string|null $value Value to set for the account_country property.
    */
    public function setAccountCountry(?string $value): void {
        $this->account_country = $value;
    }

    /**
     * Sets the account_name property value. The account_name property
     * @param string|null $value Value to set for the account_name property.
    */
    public function setAccountName(?string $value): void {
        $this->account_name = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the amount_due property value. The amount_due property
     * @param int|null $value Value to set for the amount_due property.
    */
    public function setAmountDue(?int $value): void {
        $this->amount_due = $value;
    }

    /**
     * Sets the amount_overpaid property value. The amount_overpaid property
     * @param int|null $value Value to set for the amount_overpaid property.
    */
    public function setAmountOverpaid(?int $value): void {
        $this->amount_overpaid = $value;
    }

    /**
     * Sets the amount_paid property value. The amount_paid property
     * @param int|null $value Value to set for the amount_paid property.
    */
    public function setAmountPaid(?int $value): void {
        $this->amount_paid = $value;
    }

    /**
     * Sets the amount_remaining property value. The amount_remaining property
     * @param int|null $value Value to set for the amount_remaining property.
    */
    public function setAmountRemaining(?int $value): void {
        $this->amount_remaining = $value;
    }

    /**
     * Sets the amount_shipping property value. The amount_shipping property
     * @param int|null $value Value to set for the amount_shipping property.
    */
    public function setAmountShipping(?int $value): void {
        $this->amount_shipping = $value;
    }

    /**
     * Sets the application property value. The application property
     * @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value): void {
        $this->application = $value;
    }

    /**
     * Sets the attempt_count property value. The attempt_count property
     * @param int|null $value Value to set for the attempt_count property.
    */
    public function setAttemptCount(?int $value): void {
        $this->attempt_count = $value;
    }

    /**
     * Sets the attempted property value. The attempted property
     * @param bool|null $value Value to set for the attempted property.
    */
    public function setAttempted(?bool $value): void {
        $this->attempted = $value;
    }

    /**
     * Sets the auto_advance property value. The auto_advance property
     * @param bool|null $value Value to set for the auto_advance property.
    */
    public function setAutoAdvance(?bool $value): void {
        $this->auto_advance = $value;
    }

    /**
     * Sets the automatic_tax property value. The automatic_tax property
     * @param AutomaticTax|null $value Value to set for the automatic_tax property.
    */
    public function setAutomaticTax(?AutomaticTax $value): void {
        $this->automatic_tax = $value;
    }

    /**
     * Sets the billing_reason property value. The billing_reason property
     * @param string|null $value Value to set for the billing_reason property.
    */
    public function setBillingReason(?string $value): void {
        $this->billing_reason = $value;
    }

    /**
     * Sets the collection_method property value. The collection_method property
     * @param string|null $value Value to set for the collection_method property.
    */
    public function setCollectionMethod(?string $value): void {
        $this->collection_method = $value;
    }

    /**
     * Sets the created property value. The created property
     * @param int|null $value Value to set for the created property.
    */
    public function setCreated(?int $value): void {
        $this->created = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the customer property value. The customer property
     * @param string|null $value Value to set for the customer property.
    */
    public function setCustomer(?string $value): void {
        $this->customer = $value;
    }

    /**
     * Sets the customer_address property value. The customer_address property
     * @param CustomerAddress|null $value Value to set for the customer_address property.
    */
    public function setCustomerAddress(?CustomerAddress $value): void {
        $this->customer_address = $value;
    }

    /**
     * Sets the customer_email property value. The customer_email property
     * @param string|null $value Value to set for the customer_email property.
    */
    public function setCustomerEmail(?string $value): void {
        $this->customer_email = $value;
    }

    /**
     * Sets the customer_name property value. The customer_name property
     * @param string|null $value Value to set for the customer_name property.
    */
    public function setCustomerName(?string $value): void {
        $this->customer_name = $value;
    }

    /**
     * Sets the customer_tax_exempt property value. The customer_tax_exempt property
     * @param string|null $value Value to set for the customer_tax_exempt property.
    */
    public function setCustomerTaxExempt(?string $value): void {
        $this->customer_tax_exempt = $value;
    }

    /**
     * Sets the effective_at property value. The effective_at property
     * @param int|null $value Value to set for the effective_at property.
    */
    public function setEffectiveAt(?int $value): void {
        $this->effective_at = $value;
    }

    /**
     * Sets the ending_balance property value. The ending_balance property
     * @param int|null $value Value to set for the ending_balance property.
    */
    public function setEndingBalance(?int $value): void {
        $this->ending_balance = $value;
    }

    /**
     * Sets the object property value. The object property
     * @param string|null $value Value to set for the object property.
    */
    public function setEscapedObject(?string $value): void {
        $this->escapedObject = $value;
    }

    /**
     * Sets the hosted_invoice_url property value. The hosted_invoice_url property
     * @param string|null $value Value to set for the hosted_invoice_url property.
    */
    public function setHostedInvoiceUrl(?string $value): void {
        $this->hosted_invoice_url = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the invoice_pdf property value. The invoice_pdf property
     * @param string|null $value Value to set for the invoice_pdf property.
    */
    public function setInvoicePdf(?string $value): void {
        $this->invoice_pdf = $value;
    }

    /**
     * Sets the issuer property value. The issuer property
     * @param Issuer|null $value Value to set for the issuer property.
    */
    public function setIssuer(?Issuer $value): void {
        $this->issuer = $value;
    }

    /**
     * Sets the lines property value. The lines property
     * @param Lines|null $value Value to set for the lines property.
    */
    public function setLines(?Lines $value): void {
        $this->lines = $value;
    }

    /**
     * Sets the livemode property value. The livemode property
     * @param bool|null $value Value to set for the livemode property.
    */
    public function setLivemode(?bool $value): void {
        $this->livemode = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param DataMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?DataMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the number property value. The number property
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the paid property value. The paid property
     * @param bool|null $value Value to set for the paid property.
    */
    public function setPaid(?bool $value): void {
        $this->paid = $value;
    }

    /**
     * Sets the paid_out_of_band property value. The paid_out_of_band property
     * @param bool|null $value Value to set for the paid_out_of_band property.
    */
    public function setPaidOutOfBand(?bool $value): void {
        $this->paid_out_of_band = $value;
    }

    /**
     * Sets the parent property value. The parent property
     * @param DataParent|null $value Value to set for the parent property.
    */
    public function setParent(?DataParent $value): void {
        $this->parent = $value;
    }

    /**
     * Sets the payment_settings property value. The payment_settings property
     * @param PaymentSettings|null $value Value to set for the payment_settings property.
    */
    public function setPaymentSettings(?PaymentSettings $value): void {
        $this->payment_settings = $value;
    }

    /**
     * Sets the period_end property value. The period_end property
     * @param int|null $value Value to set for the period_end property.
    */
    public function setPeriodEnd(?int $value): void {
        $this->period_end = $value;
    }

    /**
     * Sets the period_start property value. The period_start property
     * @param int|null $value Value to set for the period_start property.
    */
    public function setPeriodStart(?int $value): void {
        $this->period_start = $value;
    }

    /**
     * Sets the post_payment_credit_notes_amount property value. The post_payment_credit_notes_amount property
     * @param int|null $value Value to set for the post_payment_credit_notes_amount property.
    */
    public function setPostPaymentCreditNotesAmount(?int $value): void {
        $this->post_payment_credit_notes_amount = $value;
    }

    /**
     * Sets the pre_payment_credit_notes_amount property value. The pre_payment_credit_notes_amount property
     * @param int|null $value Value to set for the pre_payment_credit_notes_amount property.
    */
    public function setPrePaymentCreditNotesAmount(?int $value): void {
        $this->pre_payment_credit_notes_amount = $value;
    }

    /**
     * Sets the starting_balance property value. The starting_balance property
     * @param int|null $value Value to set for the starting_balance property.
    */
    public function setStartingBalance(?int $value): void {
        $this->starting_balance = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param GetSubscriptionInvoicesSchemaData_status|null $value Value to set for the status property.
    */
    public function setStatus(?GetSubscriptionInvoicesSchemaData_status $value): void {
        $this->status = $value;
    }

    /**
     * Sets the status_transitions property value. The status_transitions property
     * @param StatusTransitions|null $value Value to set for the status_transitions property.
    */
    public function setStatusTransitions(?StatusTransitions $value): void {
        $this->status_transitions = $value;
    }

    /**
     * Sets the subscription property value. The subscription property
     * @param string|null $value Value to set for the subscription property.
    */
    public function setSubscription(?string $value): void {
        $this->subscription = $value;
    }

    /**
     * Sets the subscription_details property value. The subscription_details property
     * @param DataSubscriptionDetails|null $value Value to set for the subscription_details property.
    */
    public function setSubscriptionDetails(?DataSubscriptionDetails $value): void {
        $this->subscription_details = $value;
    }

    /**
     * Sets the subtotal property value. The subtotal property
     * @param int|null $value Value to set for the subtotal property.
    */
    public function setSubtotal(?int $value): void {
        $this->subtotal = $value;
    }

    /**
     * Sets the subtotal_excluding_tax property value. The subtotal_excluding_tax property
     * @param int|null $value Value to set for the subtotal_excluding_tax property.
    */
    public function setSubtotalExcludingTax(?int $value): void {
        $this->subtotal_excluding_tax = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

    /**
     * Sets the total_excluding_tax property value. The total_excluding_tax property
     * @param int|null $value Value to set for the total_excluding_tax property.
    */
    public function setTotalExcludingTax(?int $value): void {
        $this->total_excluding_tax = $value;
    }

    /**
     * Sets the webhooks_delivered_at property value. The webhooks_delivered_at property
     * @param int|null $value Value to set for the webhooks_delivered_at property.
    */
    public function setWebhooksDeliveredAt(?int $value): void {
        $this->webhooks_delivered_at = $value;
    }

}
