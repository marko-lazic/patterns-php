<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 20-Apr-17
 * Time: 11:04 AM
 */
class PollutedPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() - 4;
    }
}