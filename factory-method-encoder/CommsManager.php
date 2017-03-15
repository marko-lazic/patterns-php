<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 02-Mar-17
 * Time: 9:45 AM
 */
require_once('Encoder.php');

abstract class CommsManager
{
    const APPT     = 1;
    const TTD      = 1;
    const CONTACT  = 1;

    abstract public function getHeaderText(): string;
    abstract public function make(int $flag_int): Encoder;
    abstract public function getFooterText(): string;
}