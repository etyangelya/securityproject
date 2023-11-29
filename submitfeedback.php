<?php
// Assuming you have a database connection established
$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";

// Create connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs from the form
$userUsername = $_POST['username'];
$userFeedback = $_POST['feedback'];

// Insert the username and feedback into the database
$sql = "INSERT INTO userfeedback (username, feedback) VALUES ('$userUsername', '$userFeedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
