<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/20/21
 * Time: 10:15 PM
 */

// using var_dump to know data type
// This is int type data
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "underscore in number : ";
var_dump(1_123_123_123);


// This is float type data
echo "Floating point : ";
var_dump(1.234);

echo "Floating point with E Notation : (1.7 x 1000) ";
var_dump(1.7e3);

echo "Floating point with E Notation Minus : (1.7 x 0.001) ";
var_dump(1.7e-3);

echo "Underscore in floating point : ";
var_dump(1_123.123);


// This is bool type data
echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);


// This is string type data
echo 'Name : ';
var_dump('Pagi pak eco');

echo "String with double qute : ";
echo "Pak\t Eko\t pagi\n";

// this is heredoc string Type data
echo <<<POINT
ini adalah contoh string yang sangat panjang
dan lebar, gk perlu klik enter, tab and other secara manual
ini adalah contoh string heredoc
=======================================================

POINT;

// this is nowdoc string type data
echo <<<'POINT'
ini adalalah contoh string yang sangat panjang dan lebar
gk perlu klik enter, tab dan other secara normal 
dan ini menggunakan nowdoc

POINT;


// Type data null
// you can use to clear or delete value of variable by assigning it with null
$name = "Suha";

echo "Name before assigning null : ";
echo $name;
echo "\n";

$name = null;

echo "Name after assigning null : ";
echo $name;
echo "\n";