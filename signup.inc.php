<?php

if (isset($_POST ["submit"])){
    echo "works";
}
else {
    header("location: ../signup.php");
}