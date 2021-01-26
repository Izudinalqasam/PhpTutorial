<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 10:18 PM
 */

// Magic Function is functions have been determined its use in PHP
// we cannot create the function except has been determined its use
// basically magic function is initially with double underscore e.g __string()

class StudentMagicFunction
{
    public string $id;
    public string $name;
    public int $value;

    // if you don't declare this, when you call object as string, it will cause error
    // because your object cannot be converted to string
    public function __toString()
    {
        return "id->$this->id, name->$this->name, value->$this->value";
    }

    // this function will be called if the variable of object this class is called like
    // $obj1 = new StudentMagicFunction -> $obj1()
    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join". PHP_EOL;
    }

    // by default if you call var_dump() it will call _debugInfo() if exist
    // by using declaring __debugInfo() in your class, so you let the var_damp() to echo what you declare in the __debugInfo()
    // make sure you have initialized all properties before using this magic function
    public function __debugInfo()
    {
       return [
           "id" => $this->id,
           "name" => $this->name,
           "value" => $this->value,
           "author" => "Suha Developer",
           "version" => 1
       ];
    }
}

$student = new StudentMagicFunction();
$student->id = "1";
$student->name = "Suha";
$student->value = 100;

// this is a way to call to string
$stringObj = (string) $student;
echo $stringObj. PHP_EOL;

// this is way to call invoke method in the class
$student(1, 2, 3, 5);

// by calling var_dump() it will call __debugInfo() in the class
var_dump($student);