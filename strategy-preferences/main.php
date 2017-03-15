<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 01-Mar-17
 * Time: 2:51 PM
 */
include "Preferences.php";

$pref = Preferences::getInstance();
$pref->setProperty("name", "sima");
unset($pref);
$pref2 = Preferences::getInstance();
print $pref2->getProperty("name") . "\n";