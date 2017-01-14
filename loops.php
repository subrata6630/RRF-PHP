<?php
$i = 1;

echo 'Using while loop...<br/>';
// while loop
while ($i <= 10) {
    echo '3 x '. $i . ' = '. 3 * $i .'<br/>';
    $i++;
}

$i = 1;
echo '<br/>Using do while loop...<br/>';
// do while loop
do {
    echo '3 x '. $i . ' = '. 3 * $i .'<br/>';
    $i++;
} while ($i <= 10);

echo '<br/>Using for loop...<br/>';
// for loop
for($i=1; $i<=10; $i++) {
    echo '3 x '. $i . ' = '. 3 * $i .'<br/>';
}

echo '<br/>Using foreach loop...<br/>';
// foreach loop
$variable = [
    'name' => 'Sumon',
    'age' => 26,
    'location' => [
        'city' => 'Dhaka',
        'country' => 'Bangladesh'
    ]
];

foreach ($variable as $key => $value) {
    if(is_array($value)) {
        foreach ($value as $key => $value) {
            echo 'Key: ' . $key . ', Value: ' . $value;
            echo '<br/>';
        }
    } else {
        echo 'Key: ' . $key . ', Value: ' . $value;
        echo '<br/>';
    }
}
