<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 11:58 AM
 */

require_once "ProductFacade.php";

$facade = new ProductFacade(__DIR__ . '/test2.txt');
$object = $facade->getProduct("234");