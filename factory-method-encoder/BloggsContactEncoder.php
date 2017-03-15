<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 02-Mar-17
 * Time: 11:54 AM
 */
require_once('Encoder.php');

class BloggsContactEncoder extends Encoder
{
    public function encode(): string
    {
        return "Appointment data encode in BloggCal format" . "<BR>";
    }
}