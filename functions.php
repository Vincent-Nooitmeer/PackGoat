<?php

//Function database connect
function dbConnect()
{

    $servername = "localhost";
    $database = "netland";
    $username = "bit_academy";
    $password = "bit_academy";

    try {
        // variabele met object om de database connectie te maken
        $conn = new PDO("mysql:host=$servername;dbname=$database;", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}
?>
