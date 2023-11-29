<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDoS Quiz</title>
</head>
<body>
<style>
        body {
            background-image: url("coded.jpg");
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h2 {
            color:red;
        }

        #quizForm {
            max-width: 600px;
            margin: auto;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .question {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
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

    <h2>DDoS Quiz</h2>

    <form id="quizForm" onsubmit="return false;">
        <div id="questionContainer">
            <div class="question">
                <p>1. What does DDoS stand for?</p>
                <label><input type="radio" name="q1" value="Distributed Denial of Service"> Distributed Denial of Service</label>
                <label><input type="radio" name="q1" value="Direct Denial of Service"> Direct Denial of Service</label>
                <label><input type="radio" name="q1" value="Digital Data on Servers"> Digital Data on Servers</label>
            </div>

            <div class="question">
                <p>2. Which of the following is a common DDoS attack method?</p>
                <label><input type="radio" name="q2" value="SQL Injection"> SQL Injection</label>
                <label><input type="radio" name="q2" value="Cross-Site Scripting (XSS)"> Cross-Site Scripting (XSS)</label>
                <label><input type="radio" name="q2" value="Syn Flood"> Syn Flood</label>
            </div>

            <div class="question">
                <p>3. What is the goal of a DDoS attack?</p>
                <label><input type="radio" name="q3" value="Data Encryption"> Data Encryption</label>
                <label><input type="radio" name="q3" value="Resource Consumption"> Resource Consumption</label>
                <label><input type="radio" name="q3" value="User Authentication"> User Authentication</label>
            </div>
        </div>

        <button onclick="checkAnswers()">Submit</button>
    </form>

    <script>
        const correctAnswers = ['Distributed Denial of Service', 'Syn Flood', 'Resource Consumption'];

        function checkAnswers() {
            const questions = document.querySelectorAll('.question');
            let score = 0;

            questions.forEach((question, index) => {
                const selectedOption = question.querySelector('input:checked');

                if (selectedOption && selectedOption.value === correctAnswers[index]) {
                    score++;
                }
            });

            alert("Quiz completed!\nYour score: " + score + " out of " + questions.length);
        }
    </script>

</body>
</html>
