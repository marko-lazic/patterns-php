<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 6:26 AM
 */
class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        print __CLASS__ . ": structuring request data\n";
        print "<BR>";
        $this->processrequest->process($req);
    }

}