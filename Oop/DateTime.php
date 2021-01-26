<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/26/21
 * Time: 7:43 AM
 */

$dateTime = new DateTime();
$dateTime->setDate(1996, 10, 2);
$dateTime->setTime(10, 10);

// add one years to current dateTime, remember to always include P in front of the what period you want to manipulate
$dateTime->add(new DateInterval("P1Y"));

var_dump($dateTime);
echo "=============================================". PHP_EOL;

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

// change timezone
$dateTime->setTimezone(new DateTimeZone("America/Toronto"));
// Change date format
$dateFormatResult = $dateTime->format("y-m-d H:i:s");
var_dump($dateTime);

echo "The format date is : $dateFormatResult". PHP_EOL;

// Parse string to date time
// remember you have to input format and the the string date matching, if not you will get bool false
$dateParsing = DateTime::createFromFormat("Y-m-d H:i:s", "2021-01-10 10:10:00",
    new DateTimeZone("Asia/Jakarta"));

var_dump($dateParsing);