<?php 
include 'db.php';
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$pwd= $_POST['pwd'];

if (empty($_POST['email'])) {
    echo "<h1>Please input your Email Address</h1>";
} 
if (empty($_POST['pwd'])) {
    echo "<h1>Please input your Password</h1>";
} 
    else {
$sql="insert into users (fname, lname, email, pwd)
values('$fname', '$lname', '$email', '$pwd')";

if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='homepage.html' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}













# -> this is single arrow operator known as object operator 
# -> it is used to access methods and properties of a class
# === it is known as identical operator and does a strict comparison 


?>
