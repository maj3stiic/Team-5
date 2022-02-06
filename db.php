<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "123";
$dbname = "loginsystem";

$conn = new mysqli_connect($servername, $dbname, $dbpassword,$dbname);

if ($conn -> mysqli_connect_error){
    die("Connection failed : " .$conn->connect_error);
}