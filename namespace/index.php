<?php

include_once __DIR__ . '/DB1.php';
include_once __DIR__ . '/DB2.php';

$db1 = new User\DB();
$db2 = new DB();

var_dump($db1);
echo '<br/>';
var_dump($db2);
