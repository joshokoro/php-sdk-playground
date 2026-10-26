<?php

namespace Salable\SDK\Api\CurrencyOptions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrencyOptionsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrencyOptionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrencyOptionsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrencyOptionsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrencyOptionsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrencyOptionsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrencyOptionsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return CurrencyOptionsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): CurrencyOptionsItemRequestBuilderGetQueryParameters {
        return new CurrencyOptionsItemRequestBuilderGetQueryParameters($expand);
    }

}
