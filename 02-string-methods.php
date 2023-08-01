<?php
// String Methods

$string = "quick brown fox jumps over the lazy dog.";

echo $string;
echo '<br>';
echo 'string length = '. strlen($string); // check length of string
echo '<br>';
echo strtoupper($string); // convert to upper case
echo '<br>';
echo strtolower($string); // convert to lower case
echo '<br>';
echo ucfirst($string); // convert first letter to upper case
echo '<br>';
echo ucwords($string); // convert to title case
echo '<br>';

$valueToFind = 'quick';
$ispresent = str_contains($string, $valueToFind); // check string exist inside another string
var_dump($ispresent);

echo '<br>';
echo $string[0]; // access characters by index
echo '<br>';
// substr(string, start, number_of_carecters_to_return)
echo substr($string, 5, 6); // get portion of string
echo '<br>';
echo substr($string, -2); // by using negative index
echo '<br>';

var_dump(strpos($string, 'brown')); // get starting index of first occurance or returns false.

echo '<br>';

echo '<pre>';
$exploded = explode(' ', $string);
var_dump($exploded); // converts string to array
echo '</pre>';

echo '<br>';
echo implode('-', $exploded); // join array and returns string
