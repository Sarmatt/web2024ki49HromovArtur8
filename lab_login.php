<?php
session_start();


    include_once("lab_dbinitializer.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

$sql = "SELECT * FROM Users WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$response = mysqli_fetch_assoc($result);

if(empty($response))
{
    http_response_code(404);
    echo "Invalid login";
    exit;
}

if($type == "common"){
    
    $password = $_POST['password'];

    if($response["password"] != $password)
    {
        http_response_code(400);
        echo "Invalid Password";
        exit;
    }
}

 $_SESSION['ID'] = $response['Id'];
?>