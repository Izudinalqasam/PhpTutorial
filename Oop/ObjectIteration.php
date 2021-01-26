<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/24/21
 * Time: 5:08 PM
 */

// using this way you can iterate to all public property of the object using foreach
// you can implement IteratorAggregate to make object iterable (we called this technique
// if your class has been implemented Iterator you can specify what property can be iterated using foreach
// mostly developer using this way to make object iterable manually
// even though we can iterate property object using foreach directly but only public property
// and just property not custom value or what you want

class Data implements IteratorAggregate
{
    public string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $fourth = "Fourth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth
        ];

        return new ArrayIterator($array);
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value". PHP_EOL;
}