<?php

namespace Salable\SDK\Api\Ai\Conversations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConversationsItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConversationsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConversationsItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConversationsItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConversationsItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConversationsItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConversationsItemRequestBuilderGetQueryParameters.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @return ConversationsItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null): ConversationsItemRequestBuilderGetQueryParameters {
        return new ConversationsItemRequestBuilderGetQueryParameters($expand);
    }

}
