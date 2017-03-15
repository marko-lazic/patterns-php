<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 02-Mar-17
 * Time: 9:48 AM
 */
require_once('BloggsCommsManager.php');

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->make(CommsManager::APPT)->encode();
print $mgr->getFooterText();
