<?php

namespace Salable\SDK\Api\Subscriptions\Item\Invoices;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvoicesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvoicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvoicesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvoicesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvoicesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvoicesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvoicesRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param string|null $id 
     * @return InvoicesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?string $id = null): InvoicesRequestBuilderGetQueryParameters {
        return new InvoicesRequestBuilderGetQueryParameters($expand, $id);
    }

}
