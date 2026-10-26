<?php

namespace Salable\SDK\Api\Ai\Messages;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessagesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MessagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessagesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MessagesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MessagesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessagesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MessagesRequestBuilderGetQueryParameters.
     * @param string|null $after 
     * @param string|null $before 
     * @param string|null $conversationId Returns only messages belonging to this conversation ID.
     * @param int|null $limit The number of records returned in a response. Value between 1 and 100. Defaults to 25.
     * @return MessagesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $after = null, ?string $before = null, ?string $conversationId = null, ?int $limit = null): MessagesRequestBuilderGetQueryParameters {
        return new MessagesRequestBuilderGetQueryParameters($after, $before, $conversationId, $limit);
    }

}
