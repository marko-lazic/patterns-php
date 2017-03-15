<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 10:23 AM
 */
require_once("Notifier.php");

class MailNotifier extends Notifier
{
    public function inform($message)
    {
        print "MAIL notification: {$message}";
        print "<BR>";
    }

}