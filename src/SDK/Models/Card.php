<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Card implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $request_three_d_secure The request_three_d_secure property
    */
    private ?string $request_three_d_secure = null;
    
    /**
     * Instantiates a new Card and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Card
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Card {
        return new Card();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'request_three_d_secure' => fn(ParseNode $n) => $o->setRequestThreeDSecure($n->getStringValue()),
        ];
    }

    /**
     * Gets the request_three_d_secure property value. The request_three_d_secure property
     * @return string|null
    */
    public function getRequestThreeDSecure(): ?string {
        return $this->request_three_d_secure;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('request_three_d_secure', $this->getRequestThreeDSecure());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the request_three_d_secure property value. The request_three_d_secure property
     * @param string|null $value Value to set for the request_three_d_secure property.
    */
    public function setRequestThreeDSecure(?string $value): void {
        $this->request_three_d_secure = $value;
    }

}
