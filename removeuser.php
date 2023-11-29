<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff; /* Form background color */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional box shadow for a subtle effect */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff3b3b; /* Red color for delete */
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d63030; /* Darker red on hover */
        }
    </style>
</head>
<body>

    <h2>Delete User</h2>
    
    <form method="POST" action="processremoveuser.php">
        <label for="workid">Enter Work ID:</label>
        <input type="text" id="workid" name="workid" required>

        <button type="submit">Delete User</button>
    </form>

</body>
</html>
