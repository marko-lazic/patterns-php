<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 20-Apr-17
 * Time: 2:54 PM
 */
abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}