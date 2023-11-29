<?php
error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    session_start();
    $_SESSION['username'] = $username;

    if ($row["usertype"] == "worker") {
        header("location: homepage.php");
    } elseif ($row["usertype"] == "admin") {
        header("location: adminhome.php");
    } else {
        echo "Username or password do not match";
    }
}
?>
