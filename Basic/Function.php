<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 6:58 AM
 */

// you can create function everywhere even in the block of if else
// function support default arguments
// if you want to use default arguments in the function parameter, make sure you put it in the last order,
// don't put it in the front, because the function will expect you fill the argument not use default function
// so the function expect you will fill the full function

// do this => function sayHello($teacher, $student = "Anonymous")
// don't do this => function sayHello($student = "Anonymous", $teacher)
/**
 * @param string $student
 */
function sayHello($student = "Anonymous")
{
    echo "Hello world bro $student".PHP_EOL;
}

$endSession = true;
if ($endSession)
{
    function sayGoodBye()
    {
        echo "Good bye guys". PHP_EOL;
    }
}

sayHello("Andi");
sayHello();
sayGoodBye();


// you can declare function with type declaration
// if you pass value to parameter except the type declaration, php will automatically convert it (type juggling)
// e.g true will be 1
function sum(int $first, int $second)
{
    $total = $first + $second;
    echo "Total $first + $second = $total". PHP_EOL;
}

sum(4, 6);

// Variable-Length Argument list
// same with default argument, it only put in the last order of parameter, or if only one you can put directly
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value)
    {
        $total += $value;
    }

    echo "Total ". implode("+", $values). " = $total". PHP_EOL;
}

$valuesParameterLength = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$valuesParameterLength); // For case array convert to variable-length list


// Return type declaration
// you declare return type in the last line of parameter like below
function getValueSquare(int $value): int
{
    return $value * $value;
}

$total = getValueSquare(4);
echo "the square of 4 is $total" .PHP_EOL;


// Variable Function
// this is useful if you want to passing function to parameter another function;
function foo()
{
    echo "this is Foo". PHP_EOL;
}

function boo()
{
    echo "this is Boo". PHP_EOL;
}

$functionWillBeInvoked = "foo";
$functionWillBeInvoked();

$functionWillBeInvoked = "boo";
$functionWillBeInvoked();

function sayHelloVariableFunction(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}


sayHelloVariableFunction("Suha", "sampleFunction");
sayHelloVariableFunction("Eko", "strtoupper");
sayHelloVariableFunction("Dona", "strtolower");


// is Function
$biasedData = I;

var_dump(is_bool($biasedData));
var_dump(is_string($biasedData));
var_dump(is_array($biasedData));
var_dump(is_float($biasedData));
var_dump(is_int($biasedData));
var_dump(is_integer($biasedData));
