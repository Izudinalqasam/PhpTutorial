<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 9:15 AM
 */


// Recursive is not recommended if too nested, because when calling function PHP will save into stack,
// if the function call another function, so stack will accumulate steadily, so it needs big memory which lead to memory leak
function factorialRecursive(int $value): int
{
    if ($value == 1)
    {
        return 1;
    } else
    {
        return $value * factorialRecursive($value -1);
    }
}

var_dump(factorialRecursive(5));