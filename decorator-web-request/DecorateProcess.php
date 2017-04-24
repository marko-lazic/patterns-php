<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 6:18 AM
 */
require_once "ProcessRequest.php";

abstract class DecorateProcess extends ProcessRequest
{
    protected $processrequest;

    public function __construct(ProcessRequest $pr)
    {
        $this->processrequest = $pr;
    }
}