<?php

namespace Salable\SDK\Api\Events\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EventsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EventsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EventsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EventsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return EventsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): EventsItemRequestBuilderGetQueryParameters {
        return new EventsItemRequestBuilderGetQueryParameters($expand);
    }

}
