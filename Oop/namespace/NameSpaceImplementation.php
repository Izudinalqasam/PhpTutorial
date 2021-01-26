<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 4:43 PM
 */


// you must declare require or include syntax before you access namespace
require_once "NameSpace.php";

// you can use class, function and constant in a namespace by using declaring path
$conflict1 = new \Space\One\Conflict();
$conflict2 = new \Space\Two\Conflict();

\Space\One\resolve();
echo \Space\One\AUTHOR . PHP_EOL;


echo "Using another way to access class, function and constant in the different namespace" . PHP_EOL;

// or you can use class, function and constant in a namespace by using import
// using this way you cannot import 2 class with the same name, but you can utilise alias using as keyword
use Space\One\Conflict as Conflict1;
use Space\Two\Conflict as Conflict2;
use function Space\One\resolve;
use const Space\One\AUTHOR;

$conflict3 = new Conflict1();
$conflict4 = new Conflict2();

resolve();
echo AUTHOR . PHP_EOL;


// you can group import using one line by utilise {}
use Space\One\{Conflict as ConflictGroup1, Sample, Dummy};

$conflictGroup1 = new ConflictGroup1();
$sample = new Sample();
$dummy = new Dummy();