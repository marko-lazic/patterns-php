<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 6:24 AM
 */
require_once "DecorateProcess.php";

class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": authenticating request\n";
        print "<BR>";
        $this->processrequest->process($req);
    }

}