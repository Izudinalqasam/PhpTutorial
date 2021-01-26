<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 1:31 PM
 */

// Access and modify same variable by different variable name
// so when we modify the name of the reference we have made, the value of the real variable will be changed
// you can use Reference by using & symbol

$name = "Suha";

$otherName = &$name;
echo "Variable name before be changed by reference : " . $name . PHP_EOL;

$otherName = "Budi";
echo "Variable name after be changed by reference : " . $name . PHP_EOL;


// Pass by reference, you can pass the the parameter to function by reference
// so if the reference value has been changed inside the function, the real variable will be changed also

function increment(int &$value)
{
    $value++;
}

$counter = 1;
echo "Variable counter before call the function increment : $counter" . PHP_EOL;
increment($counter);

echo "Variable counter after call the function increment : $counter" . PHP_EOL;


// Returning reference
// using this way is not recommended, because we can modify variable inside the function

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo "getValue after we change the value : ". $b . PHP_EOL;