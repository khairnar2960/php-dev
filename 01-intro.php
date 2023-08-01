<?php
// single line comment

/*
multi line comment
*/
// print something to browser
echo 'hello this line is printed in browser';
echo '<br>';
print 'hello this line is printed in browser';
echo '<br>';

// variable declaration
$name = 'Sonika'; // string

echo $name;

// DataTypes
/*
string
int
float
double
bool
null
array
function

OPP's
	class
	object

*/

$age = 21; // int

$float = 25.64; // float/double

$isfemale = true; // true/false
$array = []; // array & is mutable (can be resized & changed) & has index and order

echo '<br>';
function addNumbers($arg1, $arg2) {
	echo $arg1 + $arg2;
}
// $addition = addNumbers(5, 6);

echo '<br>';
// echo 'addition is '.$addition;

echo '<br>';

// check datatype
echo gettype($float);
echo '<br>';

// # type cast
// one datatype => another datatype
$float = (int) $float;
echo $float;

?>

<h1>This is </h1>heading