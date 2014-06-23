<?php
require __DIR__ . '/vendor/autoload.php';

$f3 = require(__DIR__ . '/vendor/bcosca/fatfree/lib/base.php');
$f3->route('GET /sum/@op1/@op2', function($f3, $params) {
    echo json_encode((float) $params['op1'] + (float) $params['op2']);
});
$f3->run();