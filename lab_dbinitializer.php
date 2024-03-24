<?php

$servername = "localhost";
$username = "u237911781_main";
$password = "A2rwedf2tre";
$dbName = "u237911781_weblabs";

 $con = mysqli_connect($servername, $username, $password, $dbName);

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>