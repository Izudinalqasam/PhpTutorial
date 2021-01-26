<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 4:21 PM
 */

// StdClass is PHP built-in empty class
// it is usually used to convert from other type to object, the most cases of using it is
// when we want to convert array data type to object automatically


$array = [
    "firstName" => "Suha",
    "middleName" => "Budi",
    "lastName" => "kurniawam"
];

// this is process convert an array to class called stdClass
$object = (object) $array;

var_dump($object);


echo "First Name $object->firstName". PHP_EOL;
echo "Middle Name $object->middleName". PHP_EOL;
echo "Last Name $object->lastName". PHP_EOL;

// you can convert another object to array also using this way
echo "Convert back to array". PHP_EOL;
$arrayCreated = (array) $object;
var_dump($arrayCreated);