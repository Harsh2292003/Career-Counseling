<?php
    session_start();

    include("db.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $role = $_POST["role"];
        $skills = $_POST["skills"];
        $education = $_POST["education"];

        if(!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($role) && !empty($skills) && !empty($education))
        {
            $sql = "INSERT INTO form (name, email, password, phone, role, skills, education) VALUES ('$name', '$email', '$password', '$phone', '$role', '$skills', '$education')";
            mysqli_query($conn, $sql);
            echo"<script>alert('Registered Successfully')</script>";
            header("Location: login.php");
        } 
        else 
        {
            echo "<script>alert('Enter the valid information')</script>";
        }
    }   

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            background: url(../images/login_bac.jpg);
            font-family: sans-serif;
        }
        
        .register-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        .register-form h2 {
            margin-bottom: 20px;
        }
        
        .register-form label {
            display: block;
            margin-bottom: 5px;
        }
        
        .register-form input,
        .register-form select,
        .register-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        
        .register-form button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form class="register-form" method="POST" enctype="multipart/form-data">
        <h2>Register</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="role">Role</label>
        <input type="text" id="role" name="role" required>

        <label for="skills">Skills</label>
        <textarea id="skills" name="skills" rows="3" required></textarea>

        <label for="education">Education</label>
        <textarea id="education" name="education" rows="3" required></textarea>

        <button type="submit">Register</button>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
</body>

</html> 