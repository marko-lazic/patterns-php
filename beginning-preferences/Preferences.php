<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 01-Mar-17
 * Time: 2:46 PM
 */
class Preferences
{
    private $props = [];
    private static $instance;

    /**
     * @return array
     */
    public function getProperty(string $key) : string
    {
        return $this->props[$key];
    }

    /**
     * @param array $props
     */
    public function setProperty(string $key, string $val)
    {
        $this->props[$key] = $val;
    }

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

}