<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
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

        select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
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

    <h2>User Management</h2>
    
    <form method="POST">
        <label for="command">Select Command:</label>
        <select id="command" name="command" required>
            <option value="add">Add New User</option>
            <option value="remove">Remove User</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedCommand = $_POST["command"];
        
        // Set the form action based on the selected command
        switch ($selectedCommand) {
            case 'add':
                $formAction = 'adduserform.php';
                break;
            case 'remove':
                $formAction = 'removeuser.php';
                break;
            default:
        }

        // Redirect to the selected page
        if (!empty($formAction)) {
            header("Location: $formAction");
            exit();
        }
    }
    ?>

</body>
</html>
