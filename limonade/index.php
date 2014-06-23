<?php
require __DIR__ . '/vendor/autoload.php';

dispatch('/sum/:op1/:op2', 'hello');
function hello() {
    return json_encode((float) params('op1') + (float) params('op2'));
}
run();