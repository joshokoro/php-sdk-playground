<?php

namespace Salable\SDK\Api\Prices;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PricesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PricesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PricesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PricesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PricesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PricesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PricesRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return PricesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null): PricesRequestBuilderGetQueryParameters {
        return new PricesRequestBuilderGetQueryParameters($after, $before, $limit);
    }

}
