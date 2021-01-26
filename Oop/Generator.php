<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 5:45 PM
 * @param int $max
 * @return Iterator
 */

// Make iterator using PHP built-in class iterator
function getEvenNumber(int $max): Iterator
{
    $array = [];

    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

// Make iterator using Generator by using keyword yield, this is another way and easiest way to make iterable object/value
function getOddNumber(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

foreach (getEvenNumber(10) as $item) {
    echo "Genap : $item" . PHP_EOL;
}

foreach (getOddNumber(10) as $item) {
    echo "Ganjil : $item" . PHP_EOL;
}


