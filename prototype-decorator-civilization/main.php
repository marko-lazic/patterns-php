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
    new EarthSea(-1),
    new EarthForest(),
    new EarthPlains()
);

print_r($factory->getSea());
print_r($factory->getForest());
print_r($factory->getPlains());

print "<BR>";
require_once("PollutedPlains.php");
require_once "DiamondDecorator.php";
require_once "PollutionDecorator.php";

$tile = new PollutedPlains();
print $tile->getWealthFactor();

print "<BR>";
$tile = new Plains();
print $tile->getWealthFactor(); // 2

print "<BR>";
$tile = new DiamondDecorator(new Plains());
print $tile->getWealthFactor(); // 4

print "<BR>";
$tile = new PollutionDecorator(new DiamondDecorator(new Plains()));
print $tile->getWealthFactor(); // 0