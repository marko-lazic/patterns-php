<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 10:25 AM
 */
require_once("Notifier.php");

class TextNotifier extends Notifier
{
    public function inform($message)
    {
        print "Text notification: {$message}";
        print "<BR>";
    }

}