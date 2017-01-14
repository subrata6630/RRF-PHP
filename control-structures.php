<?php
// $name = 'Sumon';
// $age = 18;

// if($age > 19) {
//     echo $name . ' is not a teen anymore.';
// } else {
//     echo $name . ' is a teen.';
// }

$day = date('l');

echo 'Using if else...<br/>';

if($day === 'Saturday') {
    echo 'One more day to start work.';
} elseif ($day === 'Friday') {
    echo 'We have one more holiday.';
} else {
    echo 'Today is a work day.';
}

echo 'Using switch case...<br/>';

switch ($day) {
    case 'Saturday':
        echo 'One more day to start work.';
        break;

    case 'Friday':
        echo 'We have one more holiday.';
        break;

    default:
        echo 'Today is a work day.';
        break;
}
