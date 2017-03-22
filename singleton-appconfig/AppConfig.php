<?php
/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 22-Mar-17
 * Time: 8:35 AM
 */
require_once('..\factory-method-encoder\CommsManager.php');
require_once('..\factory-method-encoder/BloggsCommsManager.php');
require_once('..\factory-method-encoder/BloggsCommsManager.php');
require_once('Settings.php');

class AppConfig
{
    private static $instance;
    private $commsManager;

    private function __construct()
    {
        // will run once only
        $this->init();
    }

    private function init()
    {
        switch (Settings::$COMMSTYPE) {
            case 'Mega':
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    /**
     * @return mixed
     */
    public static function getInstance() : AppConfig
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getCommsManager() : CommsManager
    {
        return $this->commsManager;
    }
}