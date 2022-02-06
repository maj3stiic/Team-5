<?php

$servername ="db";
$username= "root";
$password ="password";
$dbname = "loginsystem";

 //creating connection


 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection

 if ($conn -> connect_error)
 die ("Connection failed ". $conn->connect_error);


?>