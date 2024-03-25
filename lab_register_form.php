<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>

<h1>User Registration Form</h1>

<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === 'username_exists') {
        echo '<p style="color: red;">Error: This username already exists. Please choose a different username.</p>';
    }
}
?>

<form action="lab_register.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Register</button>
</form>

</body>
</html>