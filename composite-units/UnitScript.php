<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 18-Apr-17
 * Time: 12:57 PM
 */
class UnitScript
{
    public static function joinExisting(
        Unit $newUnit,
        Unit $occupyingUnit
    ): CompositeUnit {
            $comp = $occupyingUnit->getComposite();
            if (! is_null($comp)) {
                $comp->addUnit($newUnit);
            } else {
                $comp = new Army();
                $comp->addUnit($occupyingUnit);
                $ompt->addUnit($newUnit);
            }
    }
}