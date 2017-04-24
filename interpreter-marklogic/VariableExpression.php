<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 11:17 AM
 */
class VariableExpression extends Expression
{
    private $name;
    private $val;

    public function __construct($name, $val = null)
    {
        $this->name = $name;
        $this->val   - $val;
    }

    function interpret(InterpreterContex $context)
    {
        if (! is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    public function setValue($value)
    {
        $this->val = $value;
    }

    public function getKey()
    {
        return $this->name;
    }
}