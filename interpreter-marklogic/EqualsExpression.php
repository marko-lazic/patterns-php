<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 12:42 PM
 */
class EqualsExpression extends OperatorExpression
{


    protected function doInterpret(
        InterpreterContex $contex,
        $result_l,
        $result_r
    )
    {
        $contex->replace($this, $result_l == $result_r);
    }
}