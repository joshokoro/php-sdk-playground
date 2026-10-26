<?php

namespace Salable\SDK\Api\Subscriptions\Item\Invoices;

/**
 * Returns a list of invoices for the specified subscription, including an upcoming invoice preview if the subscription is active and not set to cancel at period end. Not available for Salable-only or perpetual subscriptions.
*/
class InvoicesRequestBuilderGetQueryParameters 
{
    /**
     * @var array<GetExpandQueryParameterType> $expand 
    */
    public array $expand;
    
    /**
     * @var string|null $id 
    */
    public ?string $id = null;
    
    /**
     * Instantiates a new InvoicesRequestBuilderGetQueryParameters and sets the default values.
     * @param array<GetExpandQueryParameterType>|null $expand 
     * @param string|null $id 
    */
    public function __construct(?array $expand = null, ?string $id = null) {
        $this->expand = $expand?? [];
        $this->id = $id;
    }

}
