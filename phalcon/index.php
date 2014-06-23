<?php
$app = new Phalcon\Mvc\Micro();
$app->get('/sum/{op1:[0-9]+}/{op2:[0-9]+}', function($op1, $op2) {
    echo json_encode((float) $op1 + (float) $op2);
});
$app->handle();
