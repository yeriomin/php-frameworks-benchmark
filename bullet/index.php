<?php
require __DIR__ . '/vendor/autoload.php';
 
$app = new Bullet\App();
$app->path('/sum', function($request) {
    return json_encode((float) $request->get('op1') + (float) $request->get('op2'));
});
echo $app->run(new Bullet\Request());