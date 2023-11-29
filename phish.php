<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Illustration</title>
</head>
<body text-align:center>

    <a href="phishing.mp4" id="playVideoLink">Play Video</a>

    <div id="videoContainer" style="display: none;">
        <video controls width="640" height="360" id="exampleVideo">
            <source src="phishing.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <script>
        document.getElementById('playVideoLink').addEventListener('click', function() {
            // Show the video container
            document.getElementById('videoContainer').style.display = 'block';

            // Play the video
            var video = document.getElementById('exampleVideo');
            video.play();
        });
    </script>
    

</body>
</html>
