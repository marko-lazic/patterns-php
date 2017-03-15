<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 03-Mar-17
 * Time: 3:05 PM
 */
require_once("TerrainFactory.php");
require_once("EarthSea.php");
require_once("EarthForest.php");
require_once("EarthPlains.php");

$factory = new TerrainFactory(
    new EarthSea(),
    new EarthForest(),
    new EarthPlains()
);

print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());
