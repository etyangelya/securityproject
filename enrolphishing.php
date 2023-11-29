<?php
// Include your database connection configuration
$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";
$conn = mysqli_connect($host, $user, $password, $db);

// Establish a database connection
$conn = new mysqli($host, $user, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assume you have a user authentication system, and the username is stored in a session
session_start();
$username = $_SESSION['username'];

if (isset($username)) {
    // Retrieve user information from the 'employees' table
    $userQuery = "SELECT * FROM employees WHERE name = '$username'";
    $userResult = $conn->query($userQuery);

    if ($userResult) {
        if ($userResult->num_rows > 0) {
            // Fetch user data
            $userData = $userResult->fetch_assoc();

            // Insert employees information into 'phishingcoursemembers' table
            $insertQuery = "INSERT INTO phishingcoursemembers (username, phone, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("iss", $userData['username'], $userData['phone'], $userData['email']);

            // Execute the insert query
            if ($stmt->execute()) {
                echo "Enrollment successful!";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "User not found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Username not set in the session.";
}

// Close the database connection
$conn->close();
?>
