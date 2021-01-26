<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 9:22 AM
 */

// to print multiple string you can use .(dot)
$name = "Kurnianto Aziz";
echo "Name : " . $name .PHP_EOL;

// Conversion String to another data type
// if the conversion is missing, it will return 0
$stringValue = (string) 100;
echo "Conversion int to string -> " . $stringValue .PHP_EOL;

$intValue = (int) "10";
echo "Conversion string to int -> " . $intValue . PHP_EOL;

$floatValue = (float) "1.1";
echo "Conversion String to float -> " .$floatValue .PHP_EOL;

// Access Character using string index
echo "The index 1 of the name is " . $name[0] . PHP_EOL;
echo "The index 2 of the name is " . $name[2] . PHP_EOL;

// This is variable parsing
echo "The name is $name, and Have a good study" .PHP_EOL;

// if you want to append a character right after variable parsing you can do like this
echo "The name is ${name}s, and Have a good study" .PHP_EOL;


// String function
var_dump(join(",", [10, 11, 12, 13, 14, 15]));
var_dump(explode(" ", "Suha Budi Idaman"));
var_dump(strtolower("Suha Budi Idaman"));
var_dump(strtoupper("Suha Budi Idaman"));
var_dump(trim("     Suha     "));
var_dump(substr("Suha Budi Idaman", 0, 3));
