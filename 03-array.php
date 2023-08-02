<?php

// Array Index & Associative

// Indexed
$arr = [
	1,
	'sdasd',
	true,
	null,
	function() {
		return 'hello';
	}
];

// $ascArr = [];
// $ascArr = array;

$ascArr = [
	'name' => 'SoniKa', 
	'email' => 'SoniKa@example.com',
	'mobile' => 9876543210,
	true
];

echo '<pre>';
var_dump($arr);
var_dump(gettype($arr[4]));
var_dump($arr[4] instanceof Closure); // check if element is function
var_dump($ascArr);

echo $ascArr['name']; // access by key
echo '<br>';

$ascArr['name'] = 'Monika';
echo $ascArr['name'];
echo '<br>';
// Array methods

// Check array length or nos of elements
echo count($ascArr);
echo '<br>';
// array_push(array, value_to_push) // add elements/values in to array at last (try to use only on indexed arrays)

array_push($arr, 'abcd@xyz.com');
print_r($arr);

array_pop($arr); // removes last element from arrays
print_r($arr);

echo '<br>';
var_dump(is_array($arr)); // checks that variable is an array

$arrNums = [1, 2, 3, 5, 75, 85, 62, 1, 20, 3, 6, 4, 100, 10, 15];
// $arrNums = ['a', 'c', 'b', 'e', 'z', 'b'];
sort($arrNums); // sorts array and make original array sorted
print_r($arrNums);

// asort($ascArr); // sort by ascending
// arsort($ascArr); // sort by reverse order
// ksort($ascArr); // sort by key

uksort($arrNums, function($accumulator, $currentElement) {
	return $currentElement - $accumulator;
});

echo 'uksort';
print_r($arrNums);
print_r($ascArr);

print_r(range(100, 120)); // creates an indexed array from start to end limit