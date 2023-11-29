<?php
session_start(); // Start the session

if (isset($_POST['confirm_logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page you want
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .confirmation-box {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .confirmation-box p {
            margin: 10px 0;
        }

        .confirmation-box form {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h2>Logout Confirmation</h2>
        <p>Are you sure you want to log out?</p>
        <form method="post" action="logoutuser.php">
            <input type="submit" name="confirm_logout" value="Yes">
            <a href="homepage.php">No, go back to Dashboard</a>
        </form>
    </div>
</body>
</html>
