<?php

session_start();
function dbconnect()
{
    $host = 'localhost';
    $user = 'root';
    $password = '1234';
    $dbname = 'pack_goat';

    // Set DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    // Create PDO Instance
    $pdo = new PDO($dsn, $user, $password);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <title>HOME</title>
</head>

<body>
    <header class="navbar">
        <button><a href="/about-us/about-us.html">ABOUT US</a></button>
        <button><a href="/future-plans/future-plans.html">FUTURE PLANS</a></button>
        <button><a href="/subscription-plans/subscription.html">SUBSCRIPION PLANS</a></button>
    </header>

    <article class="body1">
        <h1>
            WHAT DO WE DO?
        </h1>

        <p>
            At PackGoat we put customer first. We manage your social media presence to ensure your AND our customer
            satisfaction and maximise your companies social media gain. To read more on this topic we suggest you to
            visit: <button><a href="/subscription-plans/subscription.html">SUBSCRIPION PLANS</a></button>
        </p>
    </article>


    <div>

    </div>

</body>

</html>