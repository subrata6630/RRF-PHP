<?php
// declare a constant
define('LOCATION', 'DHAKA');
echo LOCATION;
echo '<br/>';

// declare a variable
$first_name = "Reaz Uddin";
$age = 24;
// string concatenation
$sentence = "My name is $first_name, age is $age and lives in " . LOCATION . " and time is " . time();
echo $sentence;
echo '<br/>';

echo '<br/>';
var_dump($first_name); // Dumps information about a variable
echo '<br/>';
var_dump($age); // Dumps information about a variable
