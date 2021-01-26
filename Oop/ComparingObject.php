<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 10:03 PM
 */

// if you want to compare the object by its properties, you can use == (equal), it will compare each property  with compared object
// if you want to compare the object by its identity, which is refers to same object or memory allocation
// you can use operator ===

class StudentCompare
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }

    public function __toString()
    {
      return "id->$this->id, name->$this->name, value->$this->value";
    }
}


$student1 = new StudentCompare();
$student1->id = "1";
$student1->name = "Suha";
$student1->value = 100;

$student2 = new StudentCompare();
$student2->id = "1";
$student2->name = "Suha";
$student2->value = 100;

var_dump($student1 == $student2); // true
var_dump($student1 === $student2);  // False, because 2 different object in memory