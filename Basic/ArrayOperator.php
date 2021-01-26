<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 8:59 AM
 */

$first = [
    "first_name" => "Pak Eko",
    "second_name" => "Pak gugun"
];

$second = [
    "second_name" => "Budihaja",
    "first_name" => "Pak gugun gina"
];

// if you have same key in the 2 array, the second array will be removed when Uniting array
$fullName = $first + $second;
var_dump($fullName);

echo "Equal array both array has to have same key value and the size : ";
var_dump($first == $second);
echo "Identity array both array has to have same key value, size and the order : ";
var_dump($first === $second);


// Array Function
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn(int $value) => $value * 10;

$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));