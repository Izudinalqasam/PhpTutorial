<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 7:41 AM
 */

// Array in php is dynamic and can be combine with multiple Type data in the same array
// even you can add array inside the array variable
$values = array(1, 2, 3, "suha");
var_dump($values);

// this is another way to declare array
$buyReceipt = ["Drug 1", 2000, "Administration", 90.92];
var_dump($buyReceipt);

// Manipulate array
echo "Akses data array posisi ke 2 dari buyReceipt: ";
echo $buyReceipt[1];
echo "\n";

echo "Nambah data ke array by default add to the end of array : \n";
$buyReceipt[] = array(8.9, 9.9);
$buyReceipt[] = "the end list of the array";
echo var_dump($buyReceipt);

echo "Total array item : ";
echo count($buyReceipt);

// you can remove index array but it is not recommended, if you want to remove in the middle position
unset($buyReceipt[1]);


// Map
// Map is also an array, so you can declare using array() or [] directly
// with additional key when assign a value into array
echo "The map content is like this : ";
$myMap = array(
    "firstName" => "Suha",
    "secondName" => "Atmaja"
);
var_dump($myMap);

// this is an array inside array
$myMap["nested"] = array(
    "className" => "Kelas 1",
    "classSerial" => "kelasi"
);
var_dump($myMap);
echo "Akses the one value of the array inside another array : ";
echo $myMap["nested"]["classSerial"];