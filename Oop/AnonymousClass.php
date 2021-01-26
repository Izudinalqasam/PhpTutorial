<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 3:24 PM
 */

// Make a implementation class without name, means you create implementation directly without has to make a class
// anonymous class in php can be added constructor
interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("Budi") implements HelloWorld
{
    public string $name;

    // add constructor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();