<?php
    $host = "localhost";
    $dbname = "u700127750_as";
    $user = "u700127750_as";
    $pass = "9027931212Aa@";

    try {
        $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
        echo "connected";
    } catch (\Throwable $th) {
        echo "Error: ".$th->getMessage();
    }
?>
