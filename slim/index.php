<?php
require 'vendor/autoload.php';
$app = new \Slim\Slim();
$app->get('/sum/:op1/:op2', function ($op1, $op2) {
    echo json_encode((float) $op1 + (float) $op2);
});
$app->run();