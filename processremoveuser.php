<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $workid = $_POST["workid"];


    // Perform the delete operation in your database
    $sql = "DELETE FROM user WHERE workid = '$workid'";

    // Execute the query
    if ($data->query($sql) === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $data->error;
    }

    // Close the database connection
    $data->close();
}
?>
