<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Salable\Salable;
use Salable\SDK\Models\GetProductListSchema;

$apiKey = getenv('SALABLE_API_KEY');
if (!is_string($apiKey) || $apiKey === '') {
    fwrite(STDERR, "Set SALABLE_API_KEY to run this example.\n");
    exit(1);
}

$salable = new Salable($apiKey);
$products = $salable->api->products()->get()->wait();
if (!$products instanceof GetProductListSchema) {
    fwrite(STDOUT, "No products returned.\n");
    exit(0);
}

$cursor = $products->getNextCursor();
fwrite(STDOUT, 'next cursor: ' . ($cursor ?? 'none') . PHP_EOL);
