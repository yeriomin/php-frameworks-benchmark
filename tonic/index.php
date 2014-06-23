<?php
require 'vendor/autoload.php';
require_once 'Sum.php';

$app = new Tonic\Application();
$request = new Tonic\Request();
$resource = $app->getResource($request);
$response = $resource->exec();
$response->output();