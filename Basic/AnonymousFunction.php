<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 8:18 AM
 */

$sayHello = function (string $name)
{
    echo "Hello $name". PHP_EOL;
};

$sayHello("Eko");
$sayHello("Budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Goodbye $name" . PHP_EOL;
}

sayGoodBye("Suha",function ($name)
{
    return strtoupper($name);
});


// Anonymous Function using outside variable from anonymous function by use function
$firstName = "Suha";
$lastName = "Budiman";

// use function will copy the value of firstName and lastName before the function declaration
// so if you change the value of the variable in the future of line number or after the function has been declared,
// this function will not be affected
$sayVariableOutside = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName". PHP_EOL;
};

$sayVariableOutside();

// this will not affected result the $sayVariableOutside()
$firstName ="another Suha";
$lastName = "another Budiman";
$sayVariableOutside();