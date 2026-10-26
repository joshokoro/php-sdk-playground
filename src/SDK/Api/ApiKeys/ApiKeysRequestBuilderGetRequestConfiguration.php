<?php

namespace Salable\SDK\Api\ApiKeys;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ApiKeysRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ApiKeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ApiKeysRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ApiKeysRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApiKeysRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApiKeysRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApiKeysRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return ApiKeysRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null): ApiKeysRequestBuilderGetQueryParameters {
        return new ApiKeysRequestBuilderGetQueryParameters($after, $before, $limit);
    }

}
