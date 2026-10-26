<?php

namespace Salable\SDK\Api\Receipts;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReceiptsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReceiptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReceiptsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReceiptsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReceiptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReceiptsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReceiptsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @param array<string>|null $lineItems 
     * @param array<string>|null $owner 
     * @param string|null $search 
     * @param string|null $sort 
     * @param string|null $subscriptionId Returns only receipts linked to this subscription ID.
     * @return ReceiptsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?array $expand = null, ?int $limit = null, ?array $lineItems = null, ?array $owner = null, ?string $search = null, ?string $sort = null, ?string $subscriptionId = null): ReceiptsRequestBuilderGetQueryParameters {
        return new ReceiptsRequestBuilderGetQueryParameters($after, $before, $expand, $limit, $lineItems, $owner, $search, $sort, $subscriptionId);
    }

}
