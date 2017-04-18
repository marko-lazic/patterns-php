<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 18-Apr-17
 * Time: 1:02 PM
 */
class TroopCarrier extends CompositeUnit
{

    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new UnitException("Can't get a horse on the vehicle");
        }
        parent::addUnit($unit);
    }

    public function bombardStrength(): int
    {
        return 0;
    }
}