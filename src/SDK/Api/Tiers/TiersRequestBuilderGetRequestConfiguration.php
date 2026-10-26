<?php

namespace Salable\SDK\Api\Tiers;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TiersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TiersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TiersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TiersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TiersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TiersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TiersRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return TiersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null): TiersRequestBuilderGetQueryParameters {
        return new TiersRequestBuilderGetQueryParameters($after, $before, $limit);
    }

}
