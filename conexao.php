<?php

$dsn = "mysql:host=localhost;dbname=book-manegement";
$user = "root";
$password = "";

return new PDO(
    $dsn,
    $user,
    $password
);