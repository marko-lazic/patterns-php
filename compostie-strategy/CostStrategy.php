<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 9:33 AM
 */
abstract class CostStrategy
{
    abstract public function cost(Lession $lession): int;
    abstract public function changeType(): string;
}