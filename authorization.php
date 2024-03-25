<?php
 if (isset($_POST["login"])) {
    include_once("lab_dbinitializer.php");

    $email = $_POST["email"];
    $type = $_POST["type"];

$sql = "SELECT * FROM Users WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$response = mysqli_fetch_assoc($result);

if(empty($response))
{
    http_response_code(404);
    echo "Invalid login";
    exit;
}

if($type != "gmail"){
    
    $password = $_POST['password'];

    if($response["password"] != $password)
    {
        http_response_code(400);
        echo "Invalid Password";
        exit;
    } 
}

 $_SESSION["user"] = $email;
 header("Location: default.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="AuthorizationStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Metal Mania' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Koulen' rel='stylesheet'>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
</head>
<body>

    <header>
        <div class="company-data">
            <img class="company-data-logo" src="img/CompanyLogo.png" alt="Logo">
            <h1 class="company-data-title">LITERALNEST</h1>
        </div>  
    </header>

    <div class="auth-form">
    <h2>Login</h2>
      <form action="login.php" method="post">
        <label for="email">Email:</label><br>
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" id="email" class="form-control">
        </div>
        <label for="password">Password:</label><br>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" id="password" class="form-control">
        </div>
        <div id="errors">
            
        </div>
        <div class="update-btn">
            <input type="submit" class="btn btn-primary" id="login"></button>
        </div>
      </form>

            <!-- Sign In With Google button with HTML data attributes API -->
<div id="g_id_onload"
    data-client_id="692669193045-h58qj081sl6evg8ls8ueoduuj3to6jnc.apps.googleusercontent.com"
    data-context="signin"
    data-ux_mode="popup"
    data-callback="handleCredentialResponse"
    data-auto_prompt="false">
</div>

<div class="g_id_signin"
    data-type="standard"
    data-shape="rectangular"
    data-theme="outline"
    data-text="signin_with"
    data-size="large"
    data-logo_alignment="left">
</div>
        </div>
    </section>
</body>
<script>
function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
}

// Credential response handler function
async function handleCredentialResponse(response){
    const response123= parseJwt(response.credential)
    var formData = new FormData();
    formData.append("email",response123.email)
     formData.append("type","gmail")
            var xhr = new XMLHttpRequest();
            xhr.open('Post', 'auth-google.php', true);
            xhr.onload = function(test) {
            window.location.href = test.target.responseURL;
            };
            xhr.send(formData);
}
</script>

</html>