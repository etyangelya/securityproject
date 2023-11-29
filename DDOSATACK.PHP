<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDoS Attack Simulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        canvas {
            border: 1px solid #333;
            background-color: #eee;
        }

        #attackButton {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }

        #attackInfo {
            margin-top: 20px;
            color: #333;
        }
        h1, h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        #mitigation {
            margin-top: 20px;
        }

        #mitigation h3 {
            color: #008000;
        }
    </style>
</head>
<body>

    <h2>DDoS Attack Simulation</h2>

    <canvas id="attackCanvas" width="400" height="200"></canvas>

    <button id="attackButton" onclick="simulateAttack()">Initiate Attack</button>

    <p id="attackInfo"></p>

    <script>
        const canvas = document.getElementById('attackCanvas');
        const ctx = canvas.getContext('2d');
        const packets = [];

        function simulateAttack() {
            document.getElementById('attackInfo').innerText = "DDoS attack simulation: Target website is overwhelmed with traffic.";

            // Simulate packets affecting the computer
            for (let i = 0; i < 20; i++) {
                packets.push({ x: Math.random() * canvas.width, y: Math.random() * canvas.height });
            }

            animatePackets();
        }

        function animatePackets() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Draw computer
            ctx.fillStyle = '#333';
            ctx.fillRect(150, 75, 100, 50);

            // Draw packets
            ctx.fillStyle = '#00F';
            for (const packet of packets) {
                ctx.beginPath();
                ctx.arc(packet.x, packet.y, 5, 0, 2 * Math.PI);
                ctx.fill();

                // Move packets towards the computer 
                packet.x += 0.6;
            }

            // Request next animation frame
            requestAnimationFrame(animatePackets);
        }
    </script>
    <h1>DDoS Attacks: A Brief Overview</h1>


<p text-align:center;>DDoS (Distributed Denial of Service) attacks are malicious attempts to disrupt the regular functioning of a network, service, or website by overwhelming it with a flood of internet traffic.</p>

<h2>Discovery of DDoS Attacks</h2>

<p>DDoS attacks were first recognized in the late 1990s as the internet became more widely used. The first notable case was the "Ping of Death," a technique that sent oversized packets to crash targeted systems.</p>

<h2>Stopping DDoS Attacks</h2>

<div id="mitigation">
    <h3>DDoS Attack Mitigation</h3>

    <p>Stopping DDoS attacks is a challenging task, but various mitigation techniques can help minimize their impact:</p>

    <ul>
        <li><strong>Firewalls:</strong> Implementing firewalls to filter and block malicious traffic.</li>
        <li><strong>Content Delivery Network (CDN):</strong> Using CDNs to distribute traffic across multiple servers and reduce the load on a single server.</li>
        <li><strong>Rate Limiting:</strong> Setting limits on the number of requests a server will accept from a single source.</li>
        <li><strong>DDoS Protection Services:</strong> Employing specialized services that detect and mitigate DDoS attacks.</li>
    </ul>
</div>
<button> <li><a href="ddos2.php">NEXT</a></li></button>

</body>
</html>
