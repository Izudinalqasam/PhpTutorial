<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/21/21
 * Time: 8:25 AM
 */

$a = 4;
$b = 6;

echo "Additional Operator : ";
echo $a + $b;
echo "\n";

echo "Modulus Operator : ";
echo $b % $a;
echo "\n";

echo "Quadrat operator : ";
echo $a ** $b;
echo "\n";

echo "Negative and positive value : ";
$result = $a + $b;
var_dump(-$result);
var_dump(+$result);


// Assignment Operator
echo "This is an assignment operator : ";
$result += 20;
var_dump($result);

// Comparision Operator
echo "This is an Comparision Operator : ";
echo "Comparison same value";
var_dump(1 == "1");
echo "\n";

echo "Comparison identical object, including value and the data type : ";
var_dump(1 === 1);
echo "And not identical ";
var_dump(1 !== 1);
echo "\n";

echo "This is not equal just value : ";
var_dump(1 != "2");
echo "Another way to do same : ";
var_dump(1 <> "2");


// Logical Operator
// basically logical operator is same with another language but you can also define it with name and, or, xor
echo "is both side true: ";
var_dump(1 === 1 && 2 === 2);
echo "Another way to do same : ";
var_dump(1 === 1 and 2 === 2);


// Incremental and decremental
// same with java
$incNumber = 1;
echo "This is post incremental : ";
echo $incNumber++;
echo "\nThis is pre incremental : ";
echo ++$incNumber;
