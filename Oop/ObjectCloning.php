<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 6:03 PM
 */

// using clone keyword will clone object even for private or protected property of the object
// using this way will clone all property even you don't want it
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }

    public function __clone()
    {
        // you can remove property you dont want to clone by using unset()
        // you can do anything else if you want to modify cloning result here
        unset($this->sample);
    }
}

$student = new Student();
$student->id = "1";
$student->name = "Suha";
$student->value = 100;
$student->setSample("XXX");

echo "This is main Object ". PHP_EOL;
var_dump($student);

echo PHP_EOL. "This is the cloning of main object". PHP_EOL;
$studentCloning = clone $student;
var_dump($studentCloning);


// there is another way to clone object using __clone()
// if you want to modify way php clone the object, we can make a function __clone() in the class of object
// the __clone() will be called on object duplication result after duplication process
// one of the action you can do is remove a property of object cloning result

