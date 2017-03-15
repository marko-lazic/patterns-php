<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 9:41 AM
 */
class FixedCostStrategy extends CostStrategy
{
    public function cost(Lession $lession): int
    {
        return 30;
    }

    public function changeType(): string
    {
        return "fixed rate";
    }


}