<?php

namespace Salable\SDK\Api\Tokens;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TokensRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TokensRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TokensRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TokensRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TokensRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TokensRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TokensRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search Filter tokens by slug.
     * @return TokensRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $search = null): TokensRequestBuilderGetQueryParameters {
        return new TokensRequestBuilderGetQueryParameters($after, $before, $limit, $search);
    }

}
