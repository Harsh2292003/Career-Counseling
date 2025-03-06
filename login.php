<?php
    session_start();

    include("db.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(!empty($email) && !empty($password))
        {
            $sql = "SELECT * FROM form WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password){
                     
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'>alert('Wrong email or password')</script>";
        } 
        else 
        {
            echo "<script type='text/javascript'>alert('Wrong email or password')</script>";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
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

                </ul>
            </nav>
        </header>
        <section>
            <form class="login-form" method="POST">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" title="email" required>
                </div><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" title="password" required>
                </div><br><br>
                <button type="submit" class="btn">Login</button>

                <p class="reg"><b>Don't have an account?</b> Register here to get started!
                    <br> </p>
                <a href="register.php" class="btn1">Register here</a>
            </form>
        </section>

    </body>

    </html>