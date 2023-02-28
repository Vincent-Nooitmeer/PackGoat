<?php

session_start();
$username = $_SESSION['username'];
$host = 'localhost';
$user = 'root';
$password = '1234';
$dbname = 'pack_goat';

// Set DSN
$dsn = 'mysql:host=' . $host . ';port=4306;dbname=' . $dbname;

// Create PDO Instance
$pdo = new PDO($dsn, $user, $password);

$firstName = "SELECT first_name FROM users WHERE id = 1";
$stmt = $pdo->prepare($firstName);
$stmt->execute([$username]);
$lastName = "SELECT last_name FROM users WHERE id = 1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome $firstName $lastName";?></title>
</head>
<body>
    <a href="login.php">temp</a>
</body>
</html>