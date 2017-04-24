<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 10:17 AM
 */
abstract class Expression
{
    private static $keycount = 0;
    private $key;

    abstract function interpret(InterpreterContex $context);

    public function getKey()
    {
        if (! isset($this->key)) {
            self::$keycount++;
            $this->key = self::$keycount;
        }
        return $this->key;
    }

}