<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: url('lock.jpg') no-repeat center center fixed;
            background-size: cover;
            text-align: center; /* Center-align the text */
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #fff; /* Set text color to white */
            background-color: #007BFF; /* Set background color for buttons */
            padding: 10px 20px; /* Add padding to the buttons for better appearance */
            display: inline-block; /* Make buttons inline-block to apply padding properly */
            border-radius: 5px; /* Add rounded corners to the buttons */
            transition: background-color 0.3s; /* Add a smooth transition effect */
        }

        a:hover {
            background-color: #0056b3; /* Darker color on hover */
        }
    </style>
</head>
<body>

    <h2>Available Courses</h2>

    <ul>
        <li><a href="data_protection.php">Data Protection Basics</a></li>
        <li><a href="view_course.php?course=Cybersecurity_Best_Practices">Cybersecurity Best Practices</a></li>
        <li><a href="phishingcourse.php">Phishing Awareness</a></li>
        <li><a href="view_course.php?course=Password_Security">Password Security</a></li>
    </ul>

</body>
</html>
