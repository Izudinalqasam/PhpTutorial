<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/22/21
 * Time: 8:45 AM
 */

// For Loop
for ($counter = 1; $counter <= 3; $counter++) {
    echo "This is a for loop at-$counter" . PHP_EOL;
}

for ($counter = 1; $counter <= 3; $counter++):
    echo "This is a for loop with alternative way at-$counter" . PHP_EOL;
endfor;


// While Loop
$counterWhile = 1;

while ($counterWhile <= 3) {
    echo "This is while loop at-$counterWhile". PHP_EOL;
    $counterWhile++;
}

$counterWhile = 1;
while ($counterWhile <= 3):
    echo "This is while loop with alternative way at-$counterWhile". PHP_EOL;
    $counterWhile++;
endwhile;


// Do While loop
$counterDoWhile = 1;

do {
    echo "This is a do while at-$counterDoWhile". PHP_EOL;
    $counterDoWhile++;
} while($counterDoWhile <=3 );