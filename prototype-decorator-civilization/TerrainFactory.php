<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 03-Mar-17
 * Time: 3:03 PM
 */
require_once "Sea.php";
require_once "Forest.php";
require_once "Plains.php";

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    /**
     * TerrainFactory constructor.
     * @param $sea
     * @param $forest
     * @param $plains
     */
    public function __construct($sea, $forest, $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    /**
     * @return mixed
     */
    public function getSea() : Sea
    {
        return $this->sea;
    }

    /**
     * @return mixed
     */
    public function getForest() : Forest
    {
        return $this->forest;
    }

    /**
     * @return mixed
     */
    public function getPlains() : Plains
    {
        return $this->plains;
    }




}