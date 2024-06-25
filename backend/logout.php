<?php

session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
$b = DIRECTORY_SEPARATOR;
header("location:..{$b}src{$b}login{$b}index.php");