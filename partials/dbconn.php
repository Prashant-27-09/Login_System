<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "loginsystem";

$conn = new mysqli($host, $username, $password, $database);

if(!$conn){
    echo "Connection Failed";
    exit();
}


?>