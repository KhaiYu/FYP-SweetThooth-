<?php
include 'db_connect.php'; // Connect to the database

// Check if the form was submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize it to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query the database to find the user by username
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // If the user exists, fetch the user details
        $user = mysqli_fetch_assoc($result);

        // Verify if the entered password matches the hashed password in the database
        if (password_verify($password, $user['password'])) {
            // If password matches, start a session and redirect to the logged-in page
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php"); // Redirect to the welcome page
            exit();
        } else {
            // If the password is incorrect, display an error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If the username doesn't exist, display an error message
        $error_message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetTooth - Contact Us</title>
    <link rel="shortcut icon" type="image" href="./image/logo.png">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <!-- icons links -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- icons links -->
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation links -->

</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #3e1e00; 
    color: #fff; 
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Container */
.container {
    display: flex;
    justify-content: center; 
    align-items: center; 
    height: 100vh; 
    width: 100%; 
    position: relative;
}

/* Image Section */
.image-box {
    width: 40%; 
    height: 80%; 
    display: flex;
    justify-content: center; 
    align-items: center; 
    overflow: hidden; 
}

.image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Wrapper for Login Form */
.wrapper {
    width: 40%; 
    height: 80%; 
    background: rgba(255, 248, 220, 0.95); 
    color: #3e1e00; 
    border-radius: 0;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center; 
    text-align: center;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); 
    border: 2px solid #f7c59f;
}

/* Header in Login Form */
.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

/* Input Fields */
.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 45px;
    background: #fff;
    border: 2px solid #d3a588;
    border-radius: 25px;
    padding: 10px 20px;
    font-size: 16px;
    color: #3e1e00;
    outline: none;
    transition: 0.3s;
}

.input-box input::placeholder {
    color: #a39090;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 30%;
    transform: translate(-50%);
    font-size: 20px;
}

/* Remember Me & Forgot Password */
.remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}

.remember-forgot label input {
    accent-color: #100f0f;
    margin-right: 3px;
}

.remember-forgot a {
    color: #8d6f6f;
    font-weight: 600;
    text-decoration: underline;
}

.remember-forgot a:hover {
    text-decoration: underline;
    color: rgb(0, 4, 255);
}

/* Login Button */
.btn {
    width: 100%;
    height: 45px;
    background: linear-gradient(135deg, #ffaf87, #ff8e72);
    border: none;
    outline: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    transition: 0.3s;
}

.btn:hover {
    background: linear-gradient(135deg, #ff8e72, #ff734d);
    box-shadow: 0px 4px 10px rgba(255, 115, 77, 0.4);
}

/* Register Link */
.register-link p {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.register-link p a {
    font-size: 14.5px;
    color: #8d6f6f;
    text-decoration: underline;
    font-weight: 6000;
}

.register-link p a:hover {
    text-decoration: underline;
    color: #0c00f9;
}
/* Hidden Password */
input::-ms-reveal,
input::-webkit-contacts-auto-fill-button,
input::-webkit-credentials-auto-fill-button {
    display: none !important;
}
</style>
<script>
                 
                 fetch("header.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("header").innerHTML = data;
fetch("footer.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("footer").innerHTML = data;
    });

    </script>  

<!-- Include Header -->
<div id="header"></div>

<body>
<div class="container">
        <!-- Left-side Image -->
        <div class="image-box">
            <img src="login.jpg" alt="Delicious Cake">
        </div>

        <!-- Right-side Login Form -->
        <div class="wrapper">
            <h1>Login</h1>
            <form method="POST">
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                    <i class='bx bxs-lock-alt' id="togglePassword" style="cursor: pointer;"></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="forgot.html">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    if (passwordInput && togglePassword) {
        togglePassword.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePassword.classList.remove("bxs-lock-alt");
                togglePassword.classList.add("bxs-lock-open-alt");
            } else {
                passwordInput.type = "password";
                togglePassword.classList.remove("bxs-lock-open-alt");
                togglePassword.classList.add("bxs-lock-alt");
            }
        });
    }
});
</script>
<script>
    // Load header and footer dynamically
               
    fetch("header.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("header").innerHTML = data;
        
        // Wait for the header to fully load before adding 'active'
        setTimeout(() => {
            let navAbout = document.getElementById("nav-contact");
            if (navAbout) {
                navAbout.classList.add("active");
                console.log("✅ nav-about is now active:", navAbout.classList.contains("active"));
            } else {
                console.log("❌ nav-about not found");
            }
        }, 100); // 200ms delay to ensure header loads
    })
    .catch(error => console.error("Error loading header:", error));


    fetch("footer.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer").innerHTML = data;
        });
</script>

<!-- Include Footer -->
<div id="footer"></div>
</html>
