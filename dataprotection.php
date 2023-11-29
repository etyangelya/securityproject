<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Protection Basics</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        #dataProtectionInfo {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #dataProtectionInfo h2 {
            color: #333;
        }

        #dataProtectionInfo p {
            color: #555;
            line-height: 1.6;
        }

        canvas {
            display: block;
            margin: 20px auto;
            border: 1px solid #333;
            background-color: #eee;
        }

        h2 {
            color: #333;
        }
    </style>
</head>
<body>

    <div id="dataProtectionInfo">
        <h2>Data Protection Basics</h2>
        <p>
            Data protection involves safeguarding information from unauthorized access, use, disclosure, disruption, modification, or destruction. It is crucial to ensure the privacy, integrity, and availability of sensitive data. Common measures include encryption, access controls, regular backups, and user education.
        </p>
        <ul>
            <li><strong>Confidentiality:</strong> Protecting sensitive information from unauthorized access. Preserves the privacy of personal and sensitive data, preventing data breaches and identity theft.</li>
            <li><strong>Integrity:</strong> Ensuring the accuracy and reliability of data. Guarantees that data remains unaltered and trustworthy, maintaining its quality and reliability.</li>
            <li><strong>Availability:</strong> Ensuring timely and reliable access to data. Ensures that authorized users have access to the data they need when they need it, supporting business continuity.</li>
            <!-- Add more points as needed -->
        </ul>
    </div>

    <h2>Illustration: Data Protection</h2>

    <canvas id="dataProtectionCanvas" width="400" height="200"></canvas>

    <script>
        const canvas = document.getElementById('dataProtectionCanvas');
        const ctx = canvas.getContext('2d');

        // Draw a lock as a simple graphic illustration
        ctx.fillStyle = '#00F';
        ctx.fillRect(150, 75, 100, 100);

        ctx.fillStyle = '#FFF';
        ctx.beginPath();
        ctx.arc(200, 50, 30, 0, Math.PI * 2);
        ctx.fill();
    </script>

</body>
</html>
