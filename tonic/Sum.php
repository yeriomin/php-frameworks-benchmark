<?php
/**
 * @uri /sum
 * @uri /sum/:op1/:op2
 */
class Sum extends Tonic\Resource {

    /**
     * @method GET
     * @provides application/json
     */
    function sumMethod($op1, $op2) {
        return new Tonic\Response(
            Tonic\Response::OK,
            json_encode((float) $op1 + (float) $op2)
        );
    }

}
