<?php
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'courses' parameter is set
    if (isset($_POST['courses'])) {
        // Get the selected courses from the form
        $selectedCourses = $_POST['courses'];

        // Loop through selected courses and execute the DELETE query
        foreach ($selectedCourses as $courseName) {
            $sql = "DELETE FROM courses WHERE coursename = '$courseName'";
            $result = $conn->query($sql);

            // Check for errors
            if (!$result) {
                echo "Error removing course: " . $conn->error;
                break; // Stop processing if an error occurs
            }
        }

        echo "Selected courses removed successfully.";
    } else {
        echo "No courses selected for removal.";
    }
}

// Close the database connection
$conn->close();
?>
