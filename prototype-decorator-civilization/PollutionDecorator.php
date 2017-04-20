<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 20-Apr-17
 * Time: 2:56 PM
 */
class PollutionDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}