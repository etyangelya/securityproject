<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Course</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Add New Course</h2>
    
    <form action="processnewcourse.php" method="POST">
        <label for="coursename">Course Name:</label>
        <input type="text" id="coursename" name="coursename" required>

        <label for="description">Course Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="contentpath">Course content path:</label>
        <textarea id="contentpath" name="contentpath" rows="4" required></textarea>

        <button type="submit">Add Course</button>
    </form>

</body>
</html>
