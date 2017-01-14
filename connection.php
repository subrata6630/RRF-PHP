<?php
$dsn = 'mysql:dbname=rrf;host=localhost';
try {
    $connection = new PDO($dsn, 'homestead', 'secret');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
