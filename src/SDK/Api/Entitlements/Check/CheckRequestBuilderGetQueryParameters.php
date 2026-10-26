<?php

namespace Salable\SDK\Api\Entitlements\Check;

/**
 * Unlock features in your product by checking what the grantee has access to.
*/
class CheckRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $granteeId 
    */
    public ?string $granteeId = null;
    
    /**
     * @var string|null $owner 
    */
    public ?string $owner = null;
    
    /**
     * Instantiates a new CheckRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $granteeId 
     * @param string|null $owner 
    */
    public function __construct(?string $granteeId = null, ?string $owner = null) {
        $this->granteeId = $granteeId;
        $this->owner = $owner;
    }

}
