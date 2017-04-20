<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 20-Apr-17
 * Time: 2:55 PM
 */
require_once("TileDecorator.php");

class DiamondDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}