<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body background="coded.jpg" class="body_deg">
    <center>
        <form action="login_check.php" method="POST"class="login_form">
            <div class="form1">
                <div>
                    <label class="label"for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                </div>

                <label class="label" for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
    </center>

        

    </form>
</body>
</html>