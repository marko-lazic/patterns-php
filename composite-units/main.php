<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 18-Apr-17
 * Time: 8:22 AM
 */
require_once('Archer.php');
require_once('LaserCannonUnit.php');
require_once('Army.php');

$unit1 = new Archer();
$unit2 = new LaserCannonUnit();
$army  = new Army();
$army->addUnit($unit1);
$army->addUnit($unit2);
print $army->bombardStrength();

$main_army = new Army();

$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

$sub_army = new Army();

$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

$main_army->addUnit($sub_army);

print "attacking with strength: {$main_army->bombardStrength()}\n";

