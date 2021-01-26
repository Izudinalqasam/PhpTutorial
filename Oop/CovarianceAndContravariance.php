<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/26/21
 * Time: 7:21 AM
 */

abstract class Animal
{
    public string $name;

    abstract public function run(): void;

    abstract public function eat(AnimalFood $animalFood);
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running". PHP_EOL;
    }

    public function eat(AnimalFood $animalFood)
    {
       echo "Cat is eating". PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running". PHP_EOL;
    }

    // this is contravariance because we change from instead of using child we use its parent,
    // another word, we change from specific to general data type
    public function eat(Food $animalFood)
    {
        echo "Dog is eating". PHP_EOL;
    }
}

class Food
{

}

class AnimalFood extends Food
{

}

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}


class DogShelter implements AnimalShelter
{

    // change animal return type with child class of animal called covariance, which means you change from general to specific
    function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

$catShalter = new CatShelter();
$cat = $catShalter->adopt("Luna");
$cat->eat(new AnimalFood());
$cat->run();

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Jula");
$dog->eat(new Food());
$dog->run();
