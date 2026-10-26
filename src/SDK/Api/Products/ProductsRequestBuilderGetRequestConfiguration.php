<?php

namespace Salable\SDK\Api\Products;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProductsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProductsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProductsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProductsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProductsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProductsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProductsRequestBuilderGetQueryParameters.
     * @param string|null $after Return records after this cursor for forward pagination. Use the `nextCursor` from a previous response.
     * @param string|null $before Return records before this cursor for backwards pagination. Use the `previousCursor` from a previous response.
     * @param array<GetExpandQueryParameterType>|null $expand Expand related resources inline. Accepts a comma-separated list. Supported values: `plans`, `settings`.
     * @param bool|null $includeArchived When set to `true`, includes archived products in the results. Defaults to `false`.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param string|null $search Filter products by name.
     * @return ProductsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?bool $includeArchived = null, ?int $limit = null, ?string $search = null): ProductsRequestBuilderGetQueryParameters {
        return new ProductsRequestBuilderGetQueryParameters($after, $before, $expand, $includeArchived, $limit, $search);
    }

}
