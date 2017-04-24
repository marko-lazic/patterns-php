<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 6:22 AM
 */
class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": logging request\n";
        print "<BR>";
        $this->processrequest->process($req);
    }

}