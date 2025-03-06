<?php
session_start();

// Check if the user is logged in
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="#" class="logo">
                <img src="images/logo.jpg" alt="Career Planning Logo">
            </a>
            
            <ul class="nav-links">
                <li><a href="about.html">About</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="jobs.html">Jobs</a></li>
                <li><a href="mentorship.html">Mentorship</a></li>
                <li><a href="contact.html">Contact</a></li> 
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Welcome to your Dashboard</h1>
        <p>You are logged in as <?php echo $_SESSION['email']; ?></p>

    </section>
    <section class="hero">
        <div class="hero-content">
            <h1>Career planning <span>progress</span></h1>
            <p>Empower your career path with our tools, resources, and support to achieve success.</p>
            <!-- Update the button to open the signup modal -->
            <button class="cta-btn" onclick="openSignupModal()">Get started!</button>
        </div>
        <div class="hero-image">
            <img src="images/c.jpg" alt="Career Planning Illustration">
        </div>
    </section>
    <section class="main-content">
        <h2>Our Services</h2>
        <div class="services">
            <div class="service">
                <img src="images/Career-Guidance-1.png" alt="Service 1">
                <h3>Personalized Guidance</h3>
                <p>Explore different career paths with personalized guidance and expert advice.</p>
                <a href="select.html" class="explore-button">Explore</a>

            </div>
            <div class="service">
                <img src="images/college-woman-library.avif" alt="Service 2">
                <h3>Resource Library</h3>
                <p>Access a wide range of resources to enhance your skills and knowledge in your field.</p>
                <a href="ResourceLibrary.html" class="explore-button">Explore</a>
            </div>
            <div class="service">
                <img src="https://media.licdn.com/dms/image/v2/D4D12AQGzMac8oVfuXw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1706762567258?e=1736985600&v=beta&t=rMMIDE4cSb2JICEscycM7QdzTNcqSiW4WrXdjUbSVeE">

                <h3>Mentorship</h3>
                <p>Connect with mentors to gain real-world insights and grow your skills.</p>
                <a href="mentorship.html" class="explore-button">Explore</a>
            </div>
            <div class="service">
                <img src="https://www.shutterstock.com/image-photo/community-support-connection-togetherness-society-260nw-392406010.jpg" alt="Service 3">
                <h3>Community Support</h3>
                <p>Connect with like-minded individuals, mentors, and industry experts for guidance.</p>
                <a href="#career-counseling" class="explore-button">Explore</a>
            </div>



            <div class="service">
                <img src="https://www.globalcareercounsellor.com/blog/wp-content/uploads/2020/01/career.png">

                <h3>Restart Career</h3>
                <p>Get assistance and resources to successfully relaunch your career.</p>
                <a href="restart.html" class="explore-button">Explore</a>
            </div>

        </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Career Planning. All Rights Reserved.</p>
            <ul class="footer-links">
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms of Service</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </footer>
    <script>
        window.embeddedChatbotConfig = {
            chatbotId: "Nu83g-R-mNsYWnhnzkFdi",
            domain: "www.chatbase.co"
        }
    </script>
    <script src="https://www.chatbase.co/embed.min.js" chatbotId="Nu83g-R-mNsYWnhnzkFdi" domain="www.chatbase.co" defer>
    </script>
    <footer>
        <p>&copy; 2021 Career Planning</p>
    </footer>


    
</body>
</html>