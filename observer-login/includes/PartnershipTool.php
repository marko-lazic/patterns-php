<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 26-Apr-17
 * Time: 8:39 AM
 */
class PartnershipTool extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        // check IP and set cookie if it is listed
        print __CLASS__.": creating cookie for ($status[2])!<br>".PHP_EOL;
    }
}