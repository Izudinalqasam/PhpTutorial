<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 9:59 PM
 */

require_once "model/Product.php";

$product = new Product("Primary item", 1000);
$product->showProductDetail();

$electronic = new Electronic("Laptop", 12000);
$electronic->showProductDetail();
