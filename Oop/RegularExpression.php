<?php
/**
 * Created by PhpStorm.
 * User: izudin
 * Date: 1/26/21
 * Time: 8:39 AM
 */

// PHP support regular expression compatible with perl language
// this technique basically is used to find in string with a certain pattern

// i -> means incasesensitive, so it will match all the word match either capital or not
$matches = [];
$result = (bool) preg_match_all("/suh|awan|ning/i", "Suha Budiawan Ningrat", $matches);

var_dump($result);
var_dump($matches);

// you can insert one or more pattern, this method will replace match word found with the replacement ****
$resultReplace = preg_replace(["/gembel|ancol/i"], "****", "Dasar lu ancol gembel juga");
var_dump($resultReplace);

// this way will split every found space (\s), coma (,), and strip (-)
$resultSplit = preg_split("/[\s,-]/", "Suha Budi-awan,diningrat");
var_dump($resultSplit);