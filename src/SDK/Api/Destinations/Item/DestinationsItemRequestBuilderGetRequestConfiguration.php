<?php

namespace Salable\SDK\Api\Destinations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DestinationsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DestinationsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DestinationsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DestinationsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DestinationsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DestinationsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DestinationsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return DestinationsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): DestinationsItemRequestBuilderGetQueryParameters {
        return new DestinationsItemRequestBuilderGetQueryParameters($expand);
    }

}
