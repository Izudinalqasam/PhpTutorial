<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 3:04 PM
 */

class Person
{
    // add constant variable in the class
    const AUTHOR = "Izudin";

    // add nullable and type declaration
    // Remember every variable inside the class should be declared with var in front of the type declaration
    var string $name;
    var ?string $address = null;
    var string $country = "indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $names = null)
    {
        if (is_null($names))
        {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else
        {
            echo "Hello $names, my name is {$this->name}" . PHP_EOL;
        }

        echo "Created by : ". Person::AUTHOR. PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed". PHP_EOL;
    }
}