<?php
// var_dump(TRUE);

// var_dump(0b11);

// var_dump(100000776756464646460.8989);

// heredoc syntax
$heredoc_string = <<<EOT
here is a multi-line
heredoc string example.
EOT;

//echo $heredoc_string;

//var_dump(null);

$null_variable = NULL;
var_dump($null_variable);
var_dump(is_null($null_variable));

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo $value.'<br/>';
}

$number = (int)10.8989;
var_dump($number);

$number = (bool) 1;
var_dump($number);

