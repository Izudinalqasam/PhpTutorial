<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 4:37 PM
 */

// you can use Namespace to group classes, it is useful when you want to make 2 class with same name,
// this is useful too when you want to tidy up your class
// by default if we don't tell or declare namespace it will use Global namespace, Global namespace is namespace with no name

namespace Space\One {
    class Conflict
    {

    }

    class Sample
    {

    }

    class Dummy
    {

    }

    function resolve() {
        echo "Conflict has been resolved". PHP_EOL;
    }

    const AUTHOR = "Suha";
}

namespace Space\Two {
    class Conflict
    {

    }

    const AUTHOR = "Bobi";
}