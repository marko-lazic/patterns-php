<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 26-Apr-17
 * Time: 8:33 AM
 */
require_once("LoginObserver.php");

class SecurityMonitor extends LoginObserver
{

    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            print __CLASS__.": sending mail to sysadmin, failed login ($status[1])!<br>".PHP_EOL;
        }
    }
}