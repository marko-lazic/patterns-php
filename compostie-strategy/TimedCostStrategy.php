<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 9:39 AM
 */
require_once("CostStrategy.php");

class TimedCostStrategy extends CostStrategy
{


    public function cost(Lession $lession): int
    {
        return ($lession->getDuration() * 5);
    }

    public function changeType(): string
    {
        return "hourly rate";
    }
}