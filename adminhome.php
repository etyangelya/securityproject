<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Awareness Training Module</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>uzima bank Security Awareness Training module</h1>
        <p>Empowering you to protect your data and information</p>
    </header>
    <nav>
        <ul>
            <li><a href="#">Help</a></li>
            <li><a href="usermanagement.php">manage users</a></li>
            <li><a href="coursemanagement.php">manage courses</a></li>
            <li><a href="#">Manage Account</a></li>
            <li><a href="#">community forum</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="logoutadmin.php">logout</a></li>
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
            <?php
            // PHP code to dynamically generate course links
            $courses = ['Data Protection Basics', 'Cybersecurity Best Practices', 'Phishing Awareness', 'Password Security', 'DDOS attack'];
            foreach ($courses as $course) {
                echo '<li><a href="#">' . $course . '</a></li>';
            }
            ?>
        </ul>
       
    </div>
    
    </div>

    

            
        </section>
    </main>
    <footer>
        <p>&copy;  <?php echo date('Y'); ?> uzima bank Security Awareness Training Module</p>
    </footer>
</body>
</html>

