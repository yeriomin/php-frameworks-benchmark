<?php

class SumController {

    public function getSum($req, $res) {
        $res->setFormat("json");
        $res->add(json_encode((float) $req->params['op1'] + (float) $req->params['op2']));
        $res->send(301);    
    }

}