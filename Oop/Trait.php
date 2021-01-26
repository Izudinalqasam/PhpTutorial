<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 1:05 PM
 */

// Trait is same with abstract class, we can create abstract or concrete function, and we can add properties
// Trait can be added into class more than one
// Trait is alike extension, which we can add concrete or abstract function,
// Trait basically can save function which can be used in several class
// to use trait in the class we can utilize use keyword

trait  SayGoodBye
{
    public ?string $name;

    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye " . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello". PHP_EOL;
        } else {
            echo "Hello $name". PHP_EOL;
        }
    }
}

trait CanRun
{
    abstract function run(): void;
}


// Trait can inherit from more than one other Trait, it is like interface which can only inherit from another trait
// to inherit another Trait you can utilise "use" keyword
trait All
{
    use SayGoodBye, SayHello, CanRun {
        // this is the trait visibility overriding, uncomment it
//        sayHello as private;
    }
}

class ParentPersonTrait
{
    // this method will be overridden by trait, so the body of the method will not be executed
    // because the method is same with the trait has
    function sayHello(?string $name): void
    {
        echo "Hello from Parent Person trait";
    }
}

// if parent class has same method with trait has, the trait will overriding that same function automatically
// if parent function == trait function => use trait function (or will be overridden)
// if child function == trait function => use child function (or will be overridden by child)

// trait visibility overriding override the method modifier from the trait to specific modifier, e.g public -> private
class PersonTrait extends ParentPersonTrait
{
    public string $job;

    use All;

    function run(): void
    {
        echo "Person {$this->name} is running, and his job is $this->job". PHP_EOL;
    }

    // it will override function in trait
    function goodBye(?string $name): void
    {
        echo "Good bye in Person". PHP_EOL;
    }
}


// Implementation trait
$person = new PersonTrait("suha");
$person->goodBye("Joko");
$person->sayHello("Dedy");

$person->name = "Budi";
$person->job = "Programmer";
$person->run();

var_dump($person);

