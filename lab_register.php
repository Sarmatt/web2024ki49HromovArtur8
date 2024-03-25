<?php

    include_once("lab_dbinitializer.php");
    
    $name = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $namecheckquery = "SELECT nickname FROM Users WHERE nickname ='".$name."';";
    $namecheck = mysqli_query($con, $namecheckquery) or die("Name check query failed");

    if(mysqli_num_rows($namecheck) > 0){
        header("Location: lab_register_form.php?error=username_exists");
        echo " Name already exists ";
        exit();
    }
echo "1";
    $sql = "INSERT INTO Users (nickname, password, email) VALUES ('".$name."','".$password."','".$email."');";

    if ($con->query($sql) === TRUE) {
        echo "User registered successfully!";
        header("Location: lab_login_form.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
echo "1";

$con->close();
?>