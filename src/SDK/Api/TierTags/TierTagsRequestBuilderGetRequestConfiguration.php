<?php

namespace Salable\SDK\Api\TierTags;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TierTagsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TierTagsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TierTagsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TierTagsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TierTagsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TierTagsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TierTagsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
     * @return TierTagsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?int $limit = null, ?string $search = null): TierTagsRequestBuilderGetQueryParameters {
        return new TierTagsRequestBuilderGetQueryParameters($after, $before, $limit, $search);
    }

}
