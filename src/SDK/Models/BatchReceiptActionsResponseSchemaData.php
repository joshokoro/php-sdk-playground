<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BatchReceiptActionsResponseSchemaData implements Parsable 
{
    /**
     * @var float|null $failed The failed property
    */
    private ?float $failed = null;
    
    /**
     * @var array<DataResults>|null $results The results property
    */
    private ?array $results = null;
    
    /**
     * @var float|null $skipped The skipped property
    */
    private ?float $skipped = null;
    
    /**
     * @var float|null $succeeded The succeeded property
    */
    private ?float $succeeded = null;
    
    /**
     * @var float|null $total The total property
    */
    private ?float $total = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BatchReceiptActionsResponseSchemaData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BatchReceiptActionsResponseSchemaData {
        return new BatchReceiptActionsResponseSchemaData();
    }

    /**
     * Gets the failed property value. The failed property
     * @return float|null
    */
    public function getFailed(): ?float {
        return $this->failed;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failed' => fn(ParseNode $n) => $o->setFailed($n->getFloatValue()),
            'results' => fn(ParseNode $n) => $o->setResults($n->getCollectionOfObjectValues([DataResults::class, 'createFromDiscriminatorValue'])),
            'skipped' => fn(ParseNode $n) => $o->setSkipped($n->getFloatValue()),
            'succeeded' => fn(ParseNode $n) => $o->setSucceeded($n->getFloatValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getFloatValue()),
        ];
    }

    /**
     * Gets the results property value. The results property
     * @return array<DataResults>|null
    */
    public function getResults(): ?array {
        return $this->results;
    }

    /**
     * Gets the skipped property value. The skipped property
     * @return float|null
    */
    public function getSkipped(): ?float {
        return $this->skipped;
    }

    /**
     * Gets the succeeded property value. The succeeded property
     * @return float|null
    */
    public function getSucceeded(): ?float {
        return $this->succeeded;
    }

    /**
     * Gets the total property value. The total property
     * @return float|null
    */
    public function getTotal(): ?float {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('failed', $this->getFailed());
        $writer->writeCollectionOfObjectValues('results', $this->getResults());
        $writer->writeFloatValue('skipped', $this->getSkipped());
        $writer->writeFloatValue('succeeded', $this->getSucceeded());
        $writer->writeFloatValue('total', $this->getTotal());
    }

    /**
     * Sets the failed property value. The failed property
     * @param float|null $value Value to set for the failed property.
    */
    public function setFailed(?float $value): void {
        $this->failed = $value;
    }

    /**
     * Sets the results property value. The results property
     * @param array<DataResults>|null $value Value to set for the results property.
    */
    public function setResults(?array $value): void {
        $this->results = $value;
    }

    /**
     * Sets the skipped property value. The skipped property
     * @param float|null $value Value to set for the skipped property.
    */
    public function setSkipped(?float $value): void {
        $this->skipped = $value;
    }

    /**
     * Sets the succeeded property value. The succeeded property
     * @param float|null $value Value to set for the succeeded property.
    */
    public function setSucceeded(?float $value): void {
        $this->succeeded = $value;
    }

    /**
     * Sets the total property value. The total property
     * @param float|null $value Value to set for the total property.
    */
    public function setTotal(?float $value): void {
        $this->total = $value;
    }

}
