<?php
echo "0";

require 'google-api/vendor/autoload.php';
echo "1";
$clientID = '692669193045-h58qj081sl6evg8ls8ueoduuj3to6jnc.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURI = 'https://rustcraftgame.site/default.php';
echo "2";
$client = new Google_Client();
$client->addScope('https://mail.google.com/');
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURI);
echo "3";

$authURL = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Form</title>
</head>
<body>

<h1>User Login Form</h1>

<?php

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    if ($error === 'invalid_credentials') {
        echo '<p style="color: red;">Error: Invalid username or password.</p>';
    }
}
?>

<form action="lab_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Login</button>
</form>

 <?php
    echo "<a href='$authURL'>Login with Google</a>";
    ?>

</body>
</html>