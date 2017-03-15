<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 9:42 AM
 */

require_once('Seminar.php');
require_once('TimedCostStrategy.php');
require_once("Lecture.php");
require_once("FixedCostStrategy.php");
require_once("RegistrationMgr.php");

$lessions[] = new Seminar(14, new TimedCostStrategy());
$lessions[] = new Lecture(14, new FixedCostStrategy());

foreach ($lessions as $lession) {
    print "lession charge {$lession->cost()}. ";
    print "Charge type: {$lession->changeType()}.\n";
    print "<BR>";
}

$lessions1 = new Seminar(4, new TimedCostStrategy());
$lessions2 = new Lecture(4, new FixedCostStrategy());

$mgr = new RegistrationMgr();
$mgr->register($lessions1);
$mgr->register($lessions2);