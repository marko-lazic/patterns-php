<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 12:10 PM
 */
class Product
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

}