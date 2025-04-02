<?php
include 'db_connect.php'; // Connect to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    $query = "INSERT INTO users (username, email, phonenumber, address, password) VALUES ('$username', '$email', '$phone', '$address', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>
/* Global Styles */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #3e1e00;
    color: #fff;
    text-align: center;
}
/* Container for layout */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
}
/* Left-side Image Section */
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
/* Right-side Registration Form */
.wrapper {
    width: 40%;
    height: 80%;
    background: rgba(255, 248, 220, 0.95);
    color: #3e1e00;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    border: 2px solid #f7c59f;
}
/* Title Styles */
.wrapper h1 {
    font-size: 36px;
    text-align: center;
}
/* Input Box Styles */
.input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 15px 0;
}

.input-box input {
    width: 100%;
    height: 100%;
    padding: 10px 20px;
    border: 2px solid #d3a588;
    border-radius: 25px;
    font-size: 16px;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #3e1e00;
}
/* Terms and Conditions Box */
.terms-box {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin: 10px 0 20px;
}

.terms-box input {
    margin-right: 8px;
    transform: scale(1.2);
}

.terms-box a {
    color: #8d6f6f;
    font-weight: 600;
    text-decoration: underline;
}

.terms-box a:hover{
    text-decoration: underline;
    color: rgb(0, 4, 255);
  }
/* Submit Button */
.btn {
    width: 100%;
    height: 45px;
    background: linear-gradient(135deg, #ffaf87, #ff8e72);
    border: none;
    border-radius: 25px;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    transition: 0.3s;
}

.btn:hover {
    background: linear-gradient(135deg, #ff8e72, #ff734d);
    box-shadow: 0px 4px 10px rgba(255, 115, 77, 0.4);
}

.login-link p {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
}

.login-link p a {
    font-size: 14.5px;
    color: #8d6f6f;
    text-decoration: underline;
    font-weight: 600;
}

.login-link p a:hover {
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
<!-- Include Header -->
<div id="header"></div>

<body>
<div class="container">
    <!-- Left-side Image -->
    <div class="image-box">
        <img src="register.png" alt="Delicious Cake">
    </div>

    <!-- Right-side Registration Form -->
    <div class="wrapper">
    <form method="POST">
        <h1>Register</h1>
        <div class="input-box">
          <input type="text" name="username" placeholder="Username" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Email" required>
          <i class='bx bxs-envelope'></i>
        </div>
        <div class="input-box">
          <input type="tel" name="phone" placeholder="Phone Number" required>
          <i class='bx bxs-phone'></i>
        </div>
        <div class="input-box">
          <input type="text" name="address" placeholder="Address" required>
          <i class='bx bxs-map'></i>
        </div>
        <div class="input-box">
          <input type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password">
          <i class='bx bxs-lock-alt' id="togglePassword" style="cursor: pointer;"></i>
        </div>

        <div class="terms-box">
          <label>
            <input type="checkbox" required>
            I agree to the <a href="terms.html">terms and conditions</a>
          </label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div class="login-link">
          <p>Already have an account? <a href="login.php">Login</a></p>
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

fetch("header.html").then(response => response.text()).then(data => {
    document.getElementById("header").innerHTML = data;
    setTimeout(() => {
        let navAbout = document.getElementById("nav-contact");
        if (navAbout) {
            navAbout.classList.add("active");
        }
    }, 100);
});

fetch("footer.html").then(response => response.text()).then(data => {
    document.getElementById("footer").innerHTML = data;
});
</script>
<!-- Include Footer -->
<div id="footer"></div>
</html>
