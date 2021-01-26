<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 8:39 AM
 */

// Arrow function only available in PHP 7.4
// Arrow function is same with anonymous function
// Arrow function can access variable outside arrow function without using "use" function
// using fn keyword to use arrow function
// Arrow function should be used for function or anonymous function which return the value

$firstName = "Suha";
$lastName = "Budiman";

// you need IDE support php 7.4 to remove the error alert from the IDE
$arrowFunction = fn() => "Hello $firstName $lastName". PHP_EOL;

echo $arrowFunction();