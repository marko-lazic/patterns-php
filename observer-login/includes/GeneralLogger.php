<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 26-Apr-17
 * Time: 8:37 AM
 */
class GeneralLogger extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__.": adding login information to log ($status[1])!<br>".PHP_EOL;
    }
}