<?php

$st = $connection->query('SHOW TABLES');
var_dump($st->fetchAll());

