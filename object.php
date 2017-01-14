<?php
include_once __DIR__ . '/class.php';

$user1 = new User();
var_dump($user1);

$user1->email = 'smseleem@gmail.com';
$user1->password = '123456';
$user1->photo = 'photo.jpg';

var_dump($user1);

$user2 = new User();
var_dump($user2);

$user2->email = 'hasan@gmail.com';
$user2->password = '09876';
$user2->photo = 'photo.jpg';

var_dump($user2);

