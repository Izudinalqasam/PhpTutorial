<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/23/21
 * Time: 11:17 AM
 */

// this function is used to get file php in another file
// require => get file, if not exist you will get the error
// include => get file, if not exist your program will be still running and you only get the warning message
// make sure you use this function before you call the function

// include_once => to make sure the file you want is loaded once, if you don't use this, you will get the error says
// there is redeclaration of content file you get

require "Lib/CommonFunction.php";
include_once "Lib/CommonFunction.php";

echo sayCommonGreeting("Suha");