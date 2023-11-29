<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Awareness Training Module</title>
    <style>
        body {
            background-image: url('lock.jpg');
            background-size: cover; /* Make sure the background image covers the entire body */
            color: #fff; /* Set text color to white for better visibility on the background */
            font-family: 'Arial', sans-serif; /* Choose an appropriate font-family */
            margin: 0; /* Remove default margin to utilize the entire viewport */
            padding: 0; /* Remove default padding */
        }

        header {
            text-align: center;
            padding: 20px;
        }

        header img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            margin: 10px 0;
        }

        nav {
            background-color: #333; /* Dark background color for the navigation bar */
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        nav a {
            text-decoration: none;
            color: #fff; /* Set text color to white */
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            background-image: url('coded.jpg'); /* Add the background image for h2 */
            background-size: cover; /* Make sure the background image covers the entire h2 element */
            color: #fff; /* Set text color to white for better visibility on the background */
            padding: 20px;
            text-align: center;
            margin: 0; /* Remove default margin to ensure the h2 fills the width */
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333; /* Dark background color for the footer */
            color: #fff; /* Set text color to white */
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img src="C:\xampp\htdocs\student\security.jpg" alt="Security Awareness Training Image">
        <h1>uzima bank Security Awareness Training module</h1>
        <p>Empowering you to protect your data and information</p>
    </header>
    <nav>
        <ul>
            <li><a href="help.php">Help</a></li>
            <li><a href="courses.php">New Course</a></li>
            <li><a href="#">Community Forum</a></li>
            <li><a href="manageaccount.php">Manage Account</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logoutuser.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>About Security Awareness Training</h2>
            <p>Learn how to safeguard sensitive information and protect against cyber threats with our comprehensive security awareness training module. We provide the knowledge and skills you need to maintain a secure online environment.</p>
        </section>
        <section>
            <h2>Available Courses</h2>
            <div class="section1">
                <ul>
                    <!-- List of the available courses-->
                    <li><a href="dataprotection.php">Data Protection Basics</a></li>
                    <li><a href="cybersecbestpractices.php">Cybersecurity Best Practices</a></li>
                    <li><a href="phish.php">Phishing Awareness</a></li>
                    <li><a href="#">Password Security</a></li>
                    <li><a href="DDOSATACK.php">DDOS ATTACK</a></li>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> uzima bank Security Awareness Training Module</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
