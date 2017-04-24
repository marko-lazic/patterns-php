<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 10:21 AM
 */
class InterpreterContex
{
    private $expressionstore = [];

    public function replace(Expression $exp, $value)
    {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionstore[$exp->getKey()];
    }
}