<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 9:17 AM
 */


// Abstract function cannot have private access modifier
// Implementation of abstract class or Child class only extend one parent or abstract class
abstract class Location
{
    public string $name;

    abstract public function sayHello(): void ;
}

class City extends Location
{

    public function sayHello(): void
    {
       echo "Hello from City". PHP_EOL;
    }
}

class Province extends Location
{

    public function sayHello(): void
    {
        echo "Hello from Province". PHP_EOL;
    }
}

class Country extends Location
{

    public function sayHello(): void
    {
       echo "Hello from Country". PHP_EOL;
    }
}

$city = new City();
$city->sayHello();

$province = new Province();
$province->sayHello();

$country = new Country();
$country->sayHello();