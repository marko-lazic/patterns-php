<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 9:31 AM
 */

abstract class Lession
{
    private $duration;
    private $costStrategy;

    public function __construct(int $duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    public function cost(): int
    {
        return $this->costStrategy->cost($this);
    }

    public function changeType(): string
    {
        return $this->costStrategy->changeType();
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

}