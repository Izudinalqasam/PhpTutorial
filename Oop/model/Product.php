<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 9:24 PM
 */

class Product
{
    protected string $name;
    protected int $price;

    // this is the example implementation of constructor
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function showProductDetail()
    {
        echo "Product name : $this->name, Product price : $this->price". PHP_EOL;
    }
}

class Electronic extends Product
{
    // Overriding constructor
    public function __construct(string $name, int $price)
    {
        // recommended but not must
        parent::__construct($name, $price);
    }

    // this is called as function overriding, because you override behavior of the function from the parent class
    public function showProductDetail()
    {
        // this is the way if you want to call function inside the parent class
        parent::showProductDetail();

        // this line is behavior of Electronic class
        echo "Detail Info \nElectronic name : " . $this->name. " Electronic price : $this->price". PHP_EOL;
    }
}