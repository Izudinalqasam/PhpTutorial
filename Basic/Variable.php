<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 6:32 AM
 */

$name = "Izud";
$age = 30;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Variable variable,
// you can naming a variable from value of another variable
$variable1 = "narjo";
$$variable1 = "pungku";

echo "Variable 1 : ";
echo $variable1;
echo "\n";

echo "Narjo : ";
echo $narjo;
echo "\n";

// Constant
// Variable is mutable but constant same with variable which cannot be edited
define("AUTHOR", "The softest programmer");
define("APP_VERSION", 100);

echo "AUTHOR : ";
echo AUTHOR;
echo "\n";

echo "APP VERSIOHN : ";
echo APP_VERSION;
echo "\n";


// check null value
echo "Is Name null : ";
echo var_dump(is_null($name));

// delete or remove variable
$willEmptyVar = "Removable Person";
unset($willEmptyVar);

// this code below will make error as Undefined Variable
//echo $willEmptyVar;

// this is alternative to cek null value or undefined variable instead of using is_null
echo "Is willEmptyVar defined or not null : ";
echo var_dump(isset($willEmptyVar));
echo "\n";

/*
 * Note :
 * Global scope function, variable which declare outside of the function, cannot be accessed from inside the function
 * by default global variable will be saved in array $GLOBALs by php
 * but you can access it from inside function by using global keyword before the name variable you want to use
 * e.g global $name;
 *
 * Local scope function, variable which declare inside of the function, cannot be accessed from outside the function
 * and only exist when variable is called, after function is called the local variable will be removed
 *
 * Static scope can only be set to local variable, so if local variable is set to static,
 * it will be persisted even though the function has been finished execute. so when you call the function again,
 * it will use the same variable as you call the function in the first time.
 * */

var_dump($GLOBALS);