<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '1234';
$dbname = 'pack_goat';

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create PDO Instance
$pdo = new PDO($dsn, $user, $password);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <a href="login.php">temp</a>
</body>

</html>