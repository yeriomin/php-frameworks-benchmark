<?php
/**
* Calculator - sample class to expose via JSON-RPC
*/
class Sum
{
    /**
     * Return sum of two variables
     *
     * @param  float $op1
     * @param  float $op2
     * @return float
     */
    public function getSum($op1, $op2)
    {
        return (float) $op1 + (float) $op2;
    }
}
