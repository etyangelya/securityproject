<?php
// Remove error_reporting(0) during development
// error_reporting(0);

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
    // Retrieve employee data from the form
    $workid = $_POST["workid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $usertype = $_POST["usertype"];
    $password = $_POST["password"];

    // Basic validation
    if (empty($name) || empty($workid) || empty($email) || empty($phone) || empty($usertype) || empty($password)) {
        echo "Please fill in all the fields";
    } else {
        // SQL query to insert data into the "employees" table
        $sql = "INSERT INTO employees (name, workid, email, phone, usertype, password) VALUES ('$name','$workid','$email', '$phone', '$usertype', '$password')";

        if ($data->query($sql) === TRUE) {
            echo "Employee data added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $data->error;
        }
    }
}

// Close the database connection
$data->close();
?>
