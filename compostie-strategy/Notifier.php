<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Feb-17
 * Time: 10:22 AM
 */

require_once("MailNotifier.php");
require_once("TextNotifier.php");

abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        // acquire concrete calss according to
        // configuration or other logic

        if (rand(1, 2) === 1 ){
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

    abstract public function inform($message);
}