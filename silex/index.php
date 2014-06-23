<?php
require __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();
$app->get('/sum/{op1}/{op2}', function($op1, $op2) {
    return json_encode((float) $op1 + $op2);
});
$app->run();
