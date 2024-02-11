<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Course Assistant</title>

    <style>
        /* For screens narrower than 480px */
            @media (max-width: 480px) {
            /* Add some padding inside the card container */
            .container {
            padding: 0px;
            }

            video {
                width: 100%;
                height: auto;
            }
            }

            /* For screens between 480px and 768px */
            @media (min-width: 480px) and (max-width: 768px) {
            video {
                width: 80 %;
                height: auto;
            }
            }

            /* For larger screens */
            @media (min-width: 768px) {
            video {
                width: 768px00px;
                height: 380px;
            }
            }
    </style>

</head>
<body>

    <div class="hero text-center">
            <h1>Course Assistant</h1>
            <img src="assets/hero.png" alt="hero-img"/>
            <p>Brief information about the tool goes here.</p>
            <a class="btn btn-outline-light" href="main.php">Get Started</a>
    </div>

    <main>
        <div class="card">
        <div class="container">
            <video responsive controls width="640" height="300" style="border-radius: 10px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <source src="assets/video.mp4" type="video/mp4">
                <source src="path/to/alternative.webm" type="video/webm">
                <p>Your browser doesn't support HTML5 video.</p>
            </video>
        </div>
        </div> 
    </main>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Course Assistant. All rights reserved. <a href="404.php">Terms of Use</a> | <a href="404.php">Privacy Policy</a>: Powered by Flamintouch</p>
    </div>
</body>
</html>
