<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 21-Apr-17
 * Time: 12:04 PM
 */
require_once "Product.php";
require_once "utility-func.php";

class ProductFacade
{
    private $products = [];

    public function __construct(string $file)
    {
        $this->file = $file;
        $this->compile();
    }

    public function compile()
    {
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line) {
            $id = getIDFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFromID($id, $name);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProduct(string $id): \Product
    {
        if (isset($this->products[$id])) {
            return $this->products[$id];
        }
        return null;
    }
}