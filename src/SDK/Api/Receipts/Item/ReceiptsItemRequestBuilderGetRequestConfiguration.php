<?php

namespace Salable\SDK\Api\Receipts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReceiptsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReceiptsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReceiptsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReceiptsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReceiptsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReceiptsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReceiptsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return ReceiptsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): ReceiptsItemRequestBuilderGetQueryParameters {
        return new ReceiptsItemRequestBuilderGetQueryParameters($expand);
    }

}
