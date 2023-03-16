<?php

session_start();
$host = 'localhost';
$user = 'root';
$password = '1234';
$dbname = 'pack_goat';

// Set DSN
$dsn = 'mysql:host=' . $host . ';port=3306;dbname=' . $dbname;

// Create PDO Instance
try {
    $pdo = new PDO($dsn, $user, $password);
    $username = "SELECT * FROM username";
    $stmt = $pdo->prepare($username);
    $stmt->execute([$username]);
    $username = $stmt->fetch();
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Guest.</title>
</head>

<body>
    <form method="POST">
        <h1>Login or Register</h1><br><br><br>
        <h5>Username:</h5><br><br>
        <input type="text" name="username"><br><br>
        <h5>Password:</h5><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit"><br>
        <p>or</p><br>
    </form>
    <a href="register.php">Register here</a>

    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // login with existing username and password
        if ($_POST['username'] == $username && $_POST['password'] == $password) {
            $_SESSION['username'] = $_POST['username'];
            header('Location: register.php');
            // login with admin permissions
        } elseif ($_POST['username'] == "admin" && $_POST['password'] == "pass") {
            header('Location: admin.php');
            // incorrect password
        } else {
            echo "Incorrect username or password, please try again or make an account below";
        }
    }
    ?>
</body>

</html>