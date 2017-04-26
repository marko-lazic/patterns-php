<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 26-Apr-17
 * Time: 8:48 AM
 */
class RawSecurityMonitor implements \SplObserver {
    function update(SplSubject $observable) {
        $status = $observable->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            print __CLASS__.": sending mail to sysadmin, failed login ($status[1])!<br>".PHP_EOL;
        }
    }
}