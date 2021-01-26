<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 1:59 PM
 */


// for property in the class you have to use var
// you can add type declaration and default value if you want
// if you pass value with different data type, php will use type juggling (automatically covert value to match the data type)
// PHP 7.4 support nullable properties, to use nullable using ? before type declaration
// we can add constant variable in the class by using const keyword, you can use it if you use PHP 7.4
// Constant variable is owned by class not object, so many object can refer to constant variable with same value,
// because class has constant variable, you can access it using ClassName::VariableConstantName

include_once "model/Person.php";

$person = new Person("suha", null);

// Assigning null value
$person->address = null;

// Assigning Value
$person->address = "Jakarta";
$person->country = "Indonesia";

echo "Name : {$person->name}". PHP_EOL;
echo "Address : {$person->address}". PHP_EOL;
echo "Country : {$person->country}". PHP_EOL;

$person->sayHello();

// To access constant variable inside the class

echo "Access constant variable inside the class : ". Person::AUTHOR. PHP_EOL;