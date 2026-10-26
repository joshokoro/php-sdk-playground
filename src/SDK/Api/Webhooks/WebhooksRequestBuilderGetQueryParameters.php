<?php

namespace Salable\SDK\Api\Webhooks;

/**
 * Response is sorted by createdAt in descending order. The pagination is cursor based.
*/
class WebhooksRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * Instantiates a new WebhooksRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
