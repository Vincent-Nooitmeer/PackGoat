<?php

//Function database connect
function dbConnect()
{

    $host = 'localhost';
    $user = 'root';
    $password = '1234';
    $dbname = 'pack_goat';

    try {
        // variabele met object om de database connectie te maken
        $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}
?>
