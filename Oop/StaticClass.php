<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 4:07 PM
 */

class StaticClass
{
    public static string $name = "StaticClass";

    static function sum(int... $numbers): int
    {
        $total = 0;
        foreach ($numbers as $number)
        {
            $total += $number;
        }

        return $total;
    }
}

echo "The static variable is ". StaticClass::$name. PHP_EOL;
echo "The result total of variable : ". StaticClass::sum(1, 3, 4, 6, 7, 8). PHP_EOL;