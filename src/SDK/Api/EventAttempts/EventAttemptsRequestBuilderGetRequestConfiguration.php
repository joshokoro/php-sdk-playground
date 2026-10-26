<?php

namespace Salable\SDK\Api\EventAttempts;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventAttemptsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var EventAttemptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventAttemptsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EventAttemptsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EventAttemptsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventAttemptsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EventAttemptsRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $destinationId 
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return EventAttemptsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?string $destinationId = null, ?int $limit = null): EventAttemptsRequestBuilderGetQueryParameters {
        return new EventAttemptsRequestBuilderGetQueryParameters($after, $before, $destinationId, $limit);
    }

}
