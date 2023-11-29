<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bankproject";
$conn = mysqli_connect($host, $user, $password, $db);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $currentPassword = mysqli_real_escape_string($conn, $_POST['currentPassword']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['newPassword']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    // Check if new password and confirm password match
    if ($newPassword != $confirmPassword) {
        echo "New password and confirm password do not match.";
    } else {
        // Update the password in the database
        $sql = "UPDATE employees SET password = '$newPassword' WHERE name = '$username'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
