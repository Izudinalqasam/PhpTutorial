<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 11:06 PM
 */


class Programmer
{
public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}


class BackendProgrammer extends Programmer
{

}

class FrontEndProgrammer extends Programmer
{

}

class Company
{
public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof FrontEndProgrammer):
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    elseif ($programmer instanceof BackendProgrammer):
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    else:
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    endif;
}


// this is implementation of Polymorphism of the properties
$ourCompany = new Company();
$ourCompany->programmer = new Programmer("Bedu");
echo "first programmer in this company is : " . $ourCompany->programmer->name . PHP_EOL;

$ourCompany->programmer = new BackendProgrammer("Aji aja");
echo "second programmer in this company is : " . $ourCompany->programmer->name . PHP_EOL;

$ourCompany->programmer = new FrontEndProgrammer("Suha");
echo "third programmer in this company is : " . $ourCompany->programmer->name . PHP_EOL;


// this is implementation of Polymorphism of the function
sayHelloProgrammer(new Programmer("Bedu 2"));
sayHelloProgrammer(new BackendProgrammer("Aji aja 2"));
sayHelloProgrammer(new FrontEndProgrammer("Suha 2"));