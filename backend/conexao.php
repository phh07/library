<?php


$dsn = "mysql:host=localhost;dbname=book-manegement";
$user="root";
$pass="";

return new PDO(
$dsn,
$user,
$pass
);


