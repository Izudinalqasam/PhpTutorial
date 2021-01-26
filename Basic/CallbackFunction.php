<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 9:06 AM
 * @param string $name
 * @param callable $filter
 */

// Callback function is same with ArrowFunction. Anonymous Function, and Variable Function
// This is only another way
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName". PHP_EOL;
}

sayHello("Suha", "strtoupper");
sayHello("Suha", function (string $name): string
{
   return strtoupper($name);
});

sayHello("Suha", fn($name) => strtoupper($name));