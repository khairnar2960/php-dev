<?php
// Add these two lines to display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function printE() {
	// global $ascArr;
	print_r($ascArr);
}
print_r($ascArr);
printE();