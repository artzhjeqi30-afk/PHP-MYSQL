<?php
session_start();

$username = "root";
$password = "";
$server = "localhost";
$dbname = "db_users";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>


<?php
