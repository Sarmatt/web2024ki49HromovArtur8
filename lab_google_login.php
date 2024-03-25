<?php
session_start();

$clientID = '692669193045-h58qj081sl6evg8ls8ueoduuj3to6jnc.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURI = 'https://rustcraftgame.site/default.php';

$authEndpoint = 'https://accounts.google.com/o/oauth2/auth';
$tokenEndpoint = 'https://accounts.google.com/o/oauth2/token';
$userInfoEndpoint = 'https://www.googleapis.com/oauth2/v1/userinfo';

if (isset($_SESSION['access_token'])) {
    header('Location: default.php');
    exit();
}

    $tokenParams = array(
        'code' => $_GET['code'],
        'client_id' => $clientID,
        'client_secret' => $clientSecret,
        'redirect_uri' => $redirectURI,
        'grant_type' => 'authorization_code'
    );

    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    
    $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
    $full_name = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
    $email = mysqli_real_escape_string($db_connection, $google_account_info->email);
    $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);

    echo $id;
    echo "\n";
    echo $full_name;
    echo "\n";
    echo $email;
    echo "\n";
   echo $profile_pic;

?>