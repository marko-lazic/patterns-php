<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 6:08 AM
 */
class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": doing something useful with request\n";
        print "<BR>";
    }
}