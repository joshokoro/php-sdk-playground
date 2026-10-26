<?php

namespace Salable\SDK\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Post_cardPrefillPreference extends Enum {
    public const NONE = "none";
    public const ALWAYS = "always";
    public const CHOICE = "choice";
}
