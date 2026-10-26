<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetTokenBalanceListSchemaData implements Parsable 
{
    /**
     * @var float|null $balance The balance property
    */
    private ?float $balance = null;
    
    /**
     * @var array<Records>|null $records The records property
    */
    private ?array $records = null;
    
    /**
     * @var string|null $token The token property
    */
    private ?string $token = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetTokenBalanceListSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetTokenBalanceListSchemaData {
        return new GetTokenBalanceListSchemaData();
    }

    /**
     * Gets the balance property value. The balance property
     * @return float|null
    */
    public function getBalance(): ?float {
        return $this->balance;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'balance' => fn(ParseNode $n) => $o->setBalance($n->getFloatValue()),
            'records' => fn(ParseNode $n) => $o->setRecords($n->getCollectionOfObjectValues([Records::class, 'createFromDiscriminatorValue'])),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the records property value. The records property
     * @return array<Records>|null
    */
    public function getRecords(): ?array {
        return $this->records;
    }

    /**
     * Gets the token property value. The token property
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
        $writer->writeFloatValue('balance', $this->getBalance());
        $writer->writeCollectionOfObjectValues('records', $this->getRecords());
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the balance property value. The balance property
     * @param float|null $value Value to set for the balance property.
    */
    public function setBalance(?float $value): void {
        $this->balance = $value;
    }

    /**
     * Sets the records property value. The records property
     * @param array<Records>|null $value Value to set for the records property.
    */
    public function setRecords(?array $value): void {
        $this->records = $value;
    }

    /**
     * Sets the token property value. The token property
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
