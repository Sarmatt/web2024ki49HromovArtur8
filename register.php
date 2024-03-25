<!DOCTYPE html>
<html>
<head>
  <title>LiteralNest Rustcraft</title>
  <link rel="stylesheet" type="text/css" href="registerStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Metal Mania' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
</head>
<body>

  <header>
    <div class="company-data">
      <img class="company-data-logo" src="img/CompanyLogo.png" alt="Logo">
      <h1 class="company-data-title">LITERALNEST</h1>
    </div>  
  </header>

<?php
 if (isset($_POST["submit"])) {
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
        header("Location: authorization.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
echo "1";

$con->close();
}
?>

<div class="register-form" id ="register-form">
  <h2>Register</h2>
  <form action="register.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password"><br>

 <div class="registerButton">
     <input type="submit" name="submit" id="submit" class="btn btn-primary">

    </div>

  </form>

 
  <p>Already have an account? <a href="/authorization.php">Login here</a></p>
</div>

<div id="errors" class="errors">
               <p> Errors: </p> 
</div>

</body>
</html>