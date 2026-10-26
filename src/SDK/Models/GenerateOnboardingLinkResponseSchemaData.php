<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GenerateOnboardingLinkResponseSchemaData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $completionUrl The completionUrl property
    */
    private ?string $completionUrl = null;
    
    /**
     * @var string|null $refreshUrl The refreshUrl property
    */
    private ?string $refreshUrl = null;
    
    /**
     * @var string|null $returnUrl The returnUrl property
    */
    private ?string $returnUrl = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Instantiates a new GenerateOnboardingLinkResponseSchemaData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GenerateOnboardingLinkResponseSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GenerateOnboardingLinkResponseSchemaData {
        return new GenerateOnboardingLinkResponseSchemaData();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completionUrl property value. The completionUrl property
     * @return string|null
    */
    public function getCompletionUrl(): ?string {
        return $this->completionUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completionUrl' => fn(ParseNode $n) => $o->setCompletionUrl($n->getStringValue()),
            'refreshUrl' => fn(ParseNode $n) => $o->setRefreshUrl($n->getStringValue()),
            'returnUrl' => fn(ParseNode $n) => $o->setReturnUrl($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the refreshUrl property value. The refreshUrl property
     * @return string|null
    */
    public function getRefreshUrl(): ?string {
        return $this->refreshUrl;
    }

    /**
     * Gets the returnUrl property value. The returnUrl property
     * @return string|null
    */
    public function getReturnUrl(): ?string {
        return $this->returnUrl;
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
        $writer->writeStringValue('completionUrl', $this->getCompletionUrl());
        $writer->writeStringValue('refreshUrl', $this->getRefreshUrl());
        $writer->writeStringValue('returnUrl', $this->getReturnUrl());
        $writer->writeStringValue('url', $this->getUrl());
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
     * Sets the completionUrl property value. The completionUrl property
     * @param string|null $value Value to set for the completionUrl property.
    */
    public function setCompletionUrl(?string $value): void {
        $this->completionUrl = $value;
    }

    /**
     * Sets the refreshUrl property value. The refreshUrl property
     * @param string|null $value Value to set for the refreshUrl property.
    */
    public function setRefreshUrl(?string $value): void {
        $this->refreshUrl = $value;
    }

    /**
     * Sets the returnUrl property value. The returnUrl property
     * @param string|null $value Value to set for the returnUrl property.
    */
    public function setReturnUrl(?string $value): void {
        $this->returnUrl = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
