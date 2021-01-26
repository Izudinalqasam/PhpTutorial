<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 11:58 AM
 */

// Encapsulation means your sensitive data will be hidden from outside class or object
// using getter setter method to receive action get or modify data
class Category
{
private string $name;
private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        if (trim($name) != "") {
            $this->name = $name;
        }

    }

    public function setExpensive(bool $expensive)
    {
        $this->expensive = $expensive;
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }
}


$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;