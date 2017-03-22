<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 22-Mar-17
 * Time: 8:43 AM
 */

require_once ("AppConfig.php");

$commsMgr = AppConfig::getInstance()->getCommsManager();
$commsMgr->getAptEncoder()->encode();