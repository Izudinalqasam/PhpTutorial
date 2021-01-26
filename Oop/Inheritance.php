<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 4:19 PM
 * @property string name
 */

// Child class only has one parent, so the child class cannot extend more than 1 parent class
class Manager
{
    public string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }
}

/**
 * @property string name
 */
class VicePresident extends Manager
{

}

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Danu");

$vicePresident = new VicePresident();
$vicePresident->name = "Suha";
$vicePresident->sayHello("Boby");