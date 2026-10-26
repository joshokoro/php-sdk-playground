<?php

namespace Salable\SDK\Api\Carts;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CartsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CartsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CartsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CartsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CartsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CartsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CartsRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `owner`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $ownerId Filter by owner ID. Accepts a comma-separated list of owner IDs.
     * @param string|null $search Search carts by ID.
     * @param array<GetStatusQueryParameterType>|null $status Filter by cart status. Accepts a comma-separated list. One of `active`, `abandoned`, `complete`.
     * @return CartsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?array $ownerId = null, ?string $search = null, ?array $status = null): CartsRequestBuilderGetQueryParameters {
        return new CartsRequestBuilderGetQueryParameters($after, $before, $expand, $limit, $ownerId, $search, $status);
    }

}
