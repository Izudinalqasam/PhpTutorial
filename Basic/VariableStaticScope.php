<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 1:24 PM
 */

// Static scope can be only set to local variable

function increment() {
    static $number = 1;

    echo "Counter = $number" . PHP_EOL;

    $number++;
}

increment(); // 1
increment(); // 2
increment(); // 3
increment(); // 4
increment(); // 5
increment(); // 6