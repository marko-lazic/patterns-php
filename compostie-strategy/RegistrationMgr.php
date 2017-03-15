<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 10:27 AM
 */
require_once("Lession.php");
require_once("Notifier.php");


class RegistrationMgr
{
    public function register(Lession $lession)
    {
        // do something with this lession

        // now tell someone
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lession: cost ({$lession->cost()})");
    }
}