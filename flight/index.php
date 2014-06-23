<?php
require __DIR__ . '/vendor/autoload.php';

// cli-server sapi workaround
putenv('REQUEST_URI='.$_SERVER['REQUEST_URI']);
Flight::route('/sum/@op1/@op2', function($op1, $op2){
    echo json_encode((float) $op1 + (float) $op2);
});
Flight::start();
