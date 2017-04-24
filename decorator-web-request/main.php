<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 9:00 AM
 */
require_once "AuthenticateRequest.php";
require_once "StructureRequest.php";
require_once "LogRequest.php";
require_once "MainProcess.php";
require_once "RequestHelper.php";

$process = new AuthenticateRequest(new StructureRequest(
    new LogRequest(
        new MainProcess()
    )
));

$process->process(new RequestHelper());