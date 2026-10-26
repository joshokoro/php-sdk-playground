<?php

namespace Salable\SDK\Api\Grantees;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GranteesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GranteesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GranteesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GranteesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GranteesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GranteesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GranteesRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $groupId Returns only grantees belonging to this group ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search 
     * @return GranteesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?string $groupId = null, ?int $limit = null, ?string $search = null): GranteesRequestBuilderGetQueryParameters {
        return new GranteesRequestBuilderGetQueryParameters($after, $before, $groupId, $limit, $search);
    }

}
