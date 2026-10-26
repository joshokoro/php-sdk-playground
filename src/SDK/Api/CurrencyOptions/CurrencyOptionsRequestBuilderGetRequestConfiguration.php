<?php

namespace Salable\SDK\Api\CurrencyOptions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CurrencyOptionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CurrencyOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CurrencyOptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CurrencyOptionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CurrencyOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CurrencyOptionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CurrencyOptionsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $priceId Returns only currency options linked to this price ID.
     * @return CurrencyOptionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?string $priceId = null): CurrencyOptionsRequestBuilderGetQueryParameters {
        return new CurrencyOptionsRequestBuilderGetQueryParameters($after, $before, $expand, $limit, $priceId);
    }

}
