<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Sum.php';

$server = new Zend_Json_Server();
$server->setClass('Sum');
// Faking a POST request to be able to test all frameworks uniformly
// Zend_Json_Server does not support anything but POST
$request = new Zend_Json_Server_Request_Http();
$request->setMethod($_GET['method']);
$request->setId('test');
$request->addParam((float) $_GET['op1'], 'op1');
$request->addParam((float) $_GET['op2'], 'op2');
$server->handle($request);
