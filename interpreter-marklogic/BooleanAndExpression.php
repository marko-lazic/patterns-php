<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 12:50 PM
 */
class BooleanAndExpression extends OperatorExpression
{

    protected function doInterpret(
        InterpreterContex $context,
        $result_l,
        $result_r
    )
    {
        $context->replace($this, $result_l && $result_r);
    }
}