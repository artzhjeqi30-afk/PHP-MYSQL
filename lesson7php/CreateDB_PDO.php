<?php

$host = "localhost";
$user = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host";, $user, $password);
    $sql = "CREATE DATABASE TESTDB";
    $conn->exec($sql);
    echo "Database created successfully";
}catch(Exception $e){
    echo "Connection failed: ";
}

?>