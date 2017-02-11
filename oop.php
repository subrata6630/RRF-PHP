<?php
include_once __DIR__ . '/class.php';

$user1 = new User('me@sumonselim.com', '123456');
echo $user1->getEmail();
echo '<br/>';
echo $user1->getPassword();


