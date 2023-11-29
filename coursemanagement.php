<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-image: url('lock.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        h2 {
            color: #fff;
            text-align: center;
        }
        h3{
            color: blue;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            font-size: xx-large;
        }

        li {
            margin-bottom: 10px;
        }

        select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: #aaffff;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Styles for the dialog box */
        .dialog-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>

    <h2>Course Management</h2>
    <h3>Available courses</h3>
    <ul>
        <!-- List of the available courses for reference -->
        <li><a href="#">Data Protection Basics</a></li>
        <li><a href="#">Cybersecurity Best Practices</a></li>
        <li><a href="#">Phishing Awareness</a></li>
        <li><a href="#">Password Security</a></li>
        <li><a href="DDOSATACK.php">DDOS ATTACK</a>
        
    </ul>
   <button> <li><a href="addcourse.php">Add New Course</a></li></button>
   <form id="courseForm" action="removecourse.php" method="POST">
    <label for="courses">Select Courses to Remove:</label>
    <select id="courses" name="courses[]" multiple required>
        <option value="Data_Protection_Basics">Data Protection Basics</option>
        <option value="Cybersecurity_Best_Practices">Cybersecurity Best Practices</option>
        <option value="Phishing_Awareness">Phishing Awareness</option>
        <option value="Password_Security">Password Security</option>
    </select>

    <button type="button" onclick="removeSelectedCourses()">Remove Selected Course</button>
</form>

<script>
    function removeSelectedCourses() {
        // Get the form element
        var form = document.getElementById('courseForm');

        // Submit the form
        form.submit();
    }
</script>
</html>
