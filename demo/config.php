<?php

//host name
$host = "localhost";
//database name
$db_name = "curd";
//database username
$user = "root";
//database password
$pass = "";

try {
    //connect
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // If the connection is successful, the following line will be executed
//    echo "Connected successfully";
} catch (PDOException $e) {
    // If there is an error, the following line will
    echo "Connection failed: " . $e->getMessage();
}
?>