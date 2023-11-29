<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybersecurity Best Practices</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f8f8f8;
        }

        #cybersecurityInfo {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        #cybersecurityInfo h2 {
            color: #333;
        }

        #cybersecurityInfo p {
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

    <div id="cybersecurityInfo">
        <h2>Cybersecurity Best Practices</h2>
        <p>
            Cybersecurity best practices are essential for protecting digital assets and sensitive information from cyber threats. Implementing robust security measures helps mitigate risks and ensures a secure online environment.
        </p>
        <ul>
            <li><strong>Use Strong Passwords:</strong> Create complex and unique passwords for each account to enhance security.</li>
            <li><strong>Enable Two-Factor Authentication (2FA):</strong> Add an extra layer of security by using 2FA wherever possible.</li>
            <li><strong>Keep Software Updated:</strong> Regularly update operating systems, software, and applications to patch security vulnerabilities.</li>
            <li><strong>Be Wary of Phishing:</strong> Avoid clicking on suspicious links or providing sensitive information in response to emails or messages.</li>
            <li><strong>Use Antivirus Software:</strong> Install reputable antivirus software to protect against malware and other cyber threats.</li>
            <!-- Add more points as needed -->
        </ul>
    </div>

    <h2>Illustration: Cybersecurity</h2>

    <canvas id="cybersecurityCanvas" width="400" height="200"></canvas>

    <script>
        const canvas = document.getElementById('cybersecurityCanvas');
        const ctx = canvas.getContext('2d');

        // Draw a shield as a simple graphic illustration
        ctx.fillStyle = '#F00';
        ctx.fillRect(150, 75, 100, 100);

        ctx.fillStyle = '#FFF';
        ctx.beginPath();
        ctx.moveTo(150, 75);
        ctx.lineTo(200, 25);
        ctx.lineTo(250, 75);
        ctx.closePath();
        ctx.fill();
    </script>

</body>
</html>
