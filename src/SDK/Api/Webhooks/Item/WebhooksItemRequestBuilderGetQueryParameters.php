<?php

namespace Salable\SDK\Api\Webhooks\Item;

/**
 * Response is sorted by createdAt in descending order. The pagination is cursor based.
*/
class WebhooksItemRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * Instantiates a new WebhooksItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
    */
    public function __construct(?array $expand = null) {
        $this->expand = $expand?? [];
    }

}
