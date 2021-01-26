<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 12:46 PM
 */

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

// Interface can inherit another interface
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

// Child class can inherit or implement multiple interface
class Avanza implements Car, IsMaintenance
{
    function drive(): void
    {
        echo "Drive Avanza". PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return true;
    }
}


$car = new Avanza();
$car->drive();

echo "The brand of Avanza is {$car->getBrand()}". PHP_EOL;
echo "The Avanza has tire : {$car->getTire()}". PHP_EOL;
echo "Is the avanza maintenance : ". $car->isMaintenance(). PHP_EOL;

