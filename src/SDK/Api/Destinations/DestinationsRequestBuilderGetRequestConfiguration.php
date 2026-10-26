<?php

namespace Salable\SDK\Api\Destinations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DestinationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DestinationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DestinationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DestinationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DestinationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DestinationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DestinationsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $eventId Returns only destinations linked to this event ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return DestinationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?string $eventId = null, ?int $limit = null): DestinationsRequestBuilderGetQueryParameters {
        return new DestinationsRequestBuilderGetQueryParameters($after, $before, $eventId, $limit);
    }

}
