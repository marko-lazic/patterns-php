<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 18-Apr-17
 * Time: 8:16 AM
 */

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}