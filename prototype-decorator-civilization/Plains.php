<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 03-Mar-17
 * Time: 3:02 PM
 */
require_once("Tile.php");

class Plains extends Tile
{
    private $wealthFactor = 2;

    public function getWealthFactor(): int
    {
        return $this->wealthFactor;
    }
}