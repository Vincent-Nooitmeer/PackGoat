<?php

include_once('/../functions.php');
$dsn = dbConnect();
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
    <form action="" method="POST">
        <h4>First name:</h4><br>
        <input type="text" name="firstName" required><br><br>
        <h4>Last name:</h4><br>
        <input type="text" name="lastName" required><br><br>
        <h4>Email:</h4><br>
        <input type="email" name="email" required><br><br>
        <h4>Username:</h4><br>
        <input type="text" name="userName" required><br><br>
        <h4>Password:</h4><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="REGISTER">
    </form>

    <?php 
    
    if (isset($_POST['submit'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['userName'];
        $password = $_POST['password'];

        $query = "INSERT INTO customers (username, password, email, firstName, lastName)
        VALUES ('$username', '$password', '$email', '$firstName', '$lastName')";
        
        $dsn->exec($query);
    }
    ?>
    <a href="login.php">Login Instead</a>
</body>

</html>