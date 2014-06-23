<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/SumController.php';

$router = new Zaphpa_Router();
$router->addRoute(array(
    'path'  => '/sum/{op1}/{op2}',
    'get'   => array('SumController', 'getSum'),
));
$router->route();