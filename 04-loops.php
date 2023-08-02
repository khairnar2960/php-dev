<?php


// Loops

/*
 for
 foreach
 while
 do while
 */

/**
 * Doc string
 * @param
 * @method
 * @var
 * @return
 **/

// for (initialization, condition, increment) {
// 	//
// }
echo '---printed using for----<br>';
for($i = 0; $i < 10; $i++) {
	echo $i.'<br>';
}

echo '---printed using while----<br>';
$j = 0;
while($j < 10) {
	echo $j.'<br>';
	$j++;
}
echo '---printed using foreach----<br>';
// foreach(range(100, 120) as $index => $element) { // with index
	// echo $index .' - '. $element.'<br>';
// }
foreach(range(100, 120) as $element) {
	echo $element.'<br>';
}

echo '---printed using do while----<br>';
$k = 10;
do {
	echo $k.'<br>';
	$k++;
} while ($k < 10);

// if (condition) {
// 	// code...
// } elseif () {
// 	// code
// } else {
// 	//
// }

$a = 3;
$b = 3;
// -1 small
// +1 greater
// 0 same
var_dump($a <=> $b); // equality check