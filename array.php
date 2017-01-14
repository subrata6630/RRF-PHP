<?php
//$names = array(); // PHP 5.4.0 or lower
$names = [
    'Sumon', 'Selim', 25
]; // since PHP 5.4.0

//var_dump($names);
//echo $names[0];

// associative array
$students = [
    'name' => 'Sumon',
    'age' => 26,
    'location' => [
        'city' => 'Dhaka',
        'country' => 'Bangladesh'
    ]
];

// echo $students['name'];
// var_dump($students);

// echo $students['location']['city'] . ' - ' . $students['location']['country'];

// echo count($students);
