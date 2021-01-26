<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/25/21
 * Time: 10:13 PM
 */

// Overloading is dynamic technical to create properties or function
// this overloading is different from java
// if you access properties of an object and not exist, PHP will fallback to magic function
// if the magic function is not exist, PHP will make it Error
// so the fallback of magic function we call Properties Overloading

// the concept

class Zero
{
    private $properties = [];

    // this is fallback function when you try to access properties which this class doesn't have
    public function __get($name)
    {
      return $this->properties[$name];
    }

    // this function will be call when you try to set properties value which not exist yet
    public function __set($name, $value)
    {
       $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
       echo "Unset $name". PHP_EOL;
    }

    // Magic function for overloading
    // this method will be invoked if there is no function not existed in the home
    public function __call($name, $arguments)
    {
       $join = join(",", $arguments);
       echo "Call function $name with arguments $join". PHP_EOL;
    }

    // Magic function for overloading
    // this method will be invoked if there is no function static existed in the home
    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join". PHP_EOL;
    }
}


$zero = new Zero();
$zero->firstName = "Suha".PHP_EOL; // it will call the __set() from the class, cause the property doesn't exist
echo $zero->firstName . PHP_EOL; // it will call the __get() from the class, cause the property doesn't exist

//isset("firstName");
unset($zero->firstName);

$zero->sayHello("Suha", "Budiman");
Zero::sayHello("Budiman", "Suha");
