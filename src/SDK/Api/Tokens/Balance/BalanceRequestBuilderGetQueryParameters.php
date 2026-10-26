<?php

namespace Salable\SDK\Api\Tokens\Balance;

/**
 * Get the token balance for a specific owner, optionally filtered by token slug or source.
*/
class BalanceRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $owner Owner value to retrieve the active token balances for.
    */
    public ?string $owner = null;
    
    /**
     * @var string|null $source Receipt item or Subscription plan line item ID to retrieve the token balance for.
    */
    public ?string $source = null;
    
    /**
     * @var string|null $token Token slug to retrieve the balance for. If omitted all tokens will be returned for the specified owner.
    */
    public ?string $token = null;
    
    /**
     * Instantiates a new BalanceRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $owner Owner value to retrieve the active token balances for.
     * @param string|null $source Receipt item or Subscription plan line item ID to retrieve the token balance for.
     * @param string|null $token Token slug to retrieve the balance for. If omitted all tokens will be returned for the specified owner.
    */
    public function __construct(?string $owner = null, ?string $source = null, ?string $token = null) {
        $this->owner = $owner;
        $this->source = $source;
        $this->token = $token;
    }

}
