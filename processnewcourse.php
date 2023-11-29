<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";
$data = mysqli_connect($host, $user, $password, $db);

$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($data->connect_error) {
    die("Connection failed: " . $data->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST["coursename"];
    $description = $_POST["description"];
    $contentPath = $_POST["contentpath"];

    // Basic validation
    if (empty($courseName) || empty($description) || empty($contentPath)) {
        echo "Please fill in all the fields";
    } else {
        // SQL query to insert data into the "courses" table
        $sql = "INSERT INTO courses (coursename, description, contentpath) VALUES ('$courseName', '$description', '$contentPath')";

        if ($data->query($sql) === TRUE) {
            echo "Course added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $data->error;
        }
    }
}

// Close the database connection
$data->close();
?>
