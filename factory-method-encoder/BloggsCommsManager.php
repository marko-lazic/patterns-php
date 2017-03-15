<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 02-Mar-17
 * Time: 11:06 AM
 */
require_once('BloggsApptEncoder.php');
require_once('BloggsContactEncoder.php');
require_once('BloggsTtdEncoder.php');
require_once('CommsManager.php');

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsCall header" . "<BR>";
    }

    public function make(int $flag_int): Encoder
    {
        switch ($flag_int) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }

    public function getFooterText(): string
    {
        return "BloggsCall footer" . "<BR>";
    }
}