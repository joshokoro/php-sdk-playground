<?php

namespace Salable\SDK\Api\Owners\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OwnersItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OwnersItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OwnersItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OwnersItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OwnersItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OwnersItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OwnersItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return OwnersItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): OwnersItemRequestBuilderGetQueryParameters {
        return new OwnersItemRequestBuilderGetQueryParameters($expand);
    }

}
