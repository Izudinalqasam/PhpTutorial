<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 2:06 PM
 */

trait A
{
    function doA(): void
    {
        echo "a from Trait A". PHP_EOL;
    }

    function doB(): void
    {
        echo "b from Trait A". PHP_EOL;
    }
}

trait B
{
    function doA(): void
    {
        echo "a from Trait B".PHP_EOL;
    }

    function doB(): void
    {
        echo "b from Trait B". PHP_EOL;
    }
}

class ConflictTraitSample
{
    // this is the way to solve the conflict same function in trait you use
    use A, B {
        A::doA insteadof B; // => this means if you call doA, you will use doA from Trait A, not from Trait B
        B::doB insteadof A; // => this means if you call doB, you will use doB from Trait B, not from Trait A
    }
}

$sample = new ConflictTraitSample();
$sample->doA();
$sample->doB();