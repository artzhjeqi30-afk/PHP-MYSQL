<?php

$host = "localhost";
$user = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host";, $user, $password);
    echo "Connected successfully";
}catch(Exception $e){
    echo "Connection failed: ";
}

?>