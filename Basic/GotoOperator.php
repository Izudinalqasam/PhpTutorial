<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 6:49 AM
 */


// you can use goto operator to jump to specific location or line number in the program
goto a;
echo "This line will be skipped. so this will not be executed" . PHP_EOL;

a:
echo "Hello from A Line" . PHP_EOL;


// The Complex Example
$counter = 1;

while (true) {
    echo "This is a while loop at-$counter". PHP_EOL;
    $counter++;

    if ($counter == 10) {
        goto end;
    }
}

end:
echo "This is the end of executed";