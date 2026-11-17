<?php
session_start();

$username = "root";
$password = "";
$server = "localhost";
$dbname = "db";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}




?>
