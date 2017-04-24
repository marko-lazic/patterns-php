<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 10:19 AM
 */
require_once "Expression.php";

class LiteralExpression extends Expression
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    function interpret(InterpreterContex $contex)
    {
        $contex->replace($this, $this->value);
    }
}