<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/22/21
 * Time: 9:24 PM
 */

$counter = 1;

// this is an example of break
while (true) {
    echo "This is  a while at-$counter". PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}


// this is a example of Continue
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }

    echo "Counter : $i" . PHP_EOL;
}


// this is foreach example
$names = ["Suha", "Jaya", "Laksamana"];

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Suha",
    "middle_name" => "Jaya",
    "last_name" => "Laksamana"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}