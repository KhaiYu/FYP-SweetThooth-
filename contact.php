<?php
include 'db_connect.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- icons links -->
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animation links -->

</head>
<style>
body {
    font-family: 'Poppins', sans-serif;
    background-color: #3e1e00; /* Dark chocolate background */
    color: #fff; /* White text */
    margin: 0;
    padding: 0;
    text-align: center;
}
.contactUs
{
    position: relative;
    width: 100%;
    padding: 40px 100px;
}
.contactUs .title{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
}
.contactUs .title h2{
    color:rgb(193, 112, 50);
    font-weight: 500;
}
.form{
    grid-area: form;
}
.info{
    grid-area: info;
}
.contact{
    padding: 40px;
    background: #d5d1d1;
    box-shadow: 0 5px 35px rgba(0, 0, 0, 0.15);
    z-index: 0;
}
.box{
    position: relative;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 5fr 4fr;
    grid-template-areas: "form info";
    grid-gap: 20px;
    margin-top: 20px;
    margin-bottom: -400px
}
.contact h3{
    color: #000000;
    font-weight: 800;
    font-size: 1.4em;
    margin-bottom: 10px;
    text-align: left;
}
.formBox{
    position: relative;
    width: 100%;
}
.formBox .row50{
    display: flex;
    gap: 20px;
}
.inputBox{
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    width: 50%;
}
.formBox .row100 .inputBox{
    width: 100%;
}
.inputBox span{
    color:rgb(193, 112, 50);
    margin-top: 10px;
    margin-bottom: 5px;
    font-weight: 500;
    text-align:left;
}
.inputBox input{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid #000000;
}
.inputBox textarea{
    padding: 10px;
    font-size: 1.1em;
    outline: none;
    border: 1px solid #000000;
    resize: none;
    min-height: 320px;
    margin-bottom: 10px;
}
.inputBox input[type="submit"]{
    background:rgb(193, 112, 50);
    color: #3b3232;
    font-size: 1.1em;
    max-width: 120px;
    cursor: pointer;
    padding: 14px 15px;
}
.inputBox ::placeholder{
    color: #bbbbbb;
}
/----------------Info-----------------/
.infoBox div p{
    font-size: 20px;
    margin-top: 20px;
}
.infoBox span img{
    width: 25px;
    height: 25px; 
}
.info{
    background: #8d8181;
}
.info h3{
    color: #000000;
}
.info .infoBox div{
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}
.info .infoBox div span{
    min-width: 40px;
    height: auto;
    color: #121212;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5em;
    border-radius: 50%;
    margin-right: 15px;
}
.info .infoBox div p{
    color: #2a2929;
    text-align: left;
}
.info .infoBox div a{
    color: #2a2929;
}
/*-------WhatsApp-Button-------*/
button.whatsapp-button {
    background: #25D366 !important;
    border: none !important;
    border-radius: 24px !important;
    padding: 0 !important;
    overflow: hidden !important;
    transition: background 0.3s ease !important;
    text-align: left !important;
    margin-right: 160px !important;
}

a.whatsapp-link {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
    padding: 12px 24px !important;
    color: white !important;
    text-decoration: none !important;
}

button.whatsapp-button:hover {
    background: #128C7E !important;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2 !important);
}

/*-----------Social Links------------*/
.social-links {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    margin: 2rem 0;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 12px 20px;
    border-radius: 24px;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    width: 200px;
    white-space: nowrap;
    margin-right: 160px;
    background: #333;
    border: 1px solid rgba(198, 124, 110, 0.42);
}

.social-links a:hover {
    background: #666;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.social-links a[href*="instagram"] { color: #E1306C; }
.social-links a[href*="facebook"] { color: #1877F2; }
.social-links a[href*="twitter"] { color: #1DA1F2; }

.social-links i {
    font-size: 1.2rem;
    width: 24px;
    text-align: center;
}

@media (max-width: 768px) {
    .social-links {
        flex-direction: row;
        flex-wrap: wrap;
    }
    .social-links a {
        width: 100%;
    }
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

<div id="header"></div>
<body>
    <div class="contactUs">
        <div class="title">
            <h2>Contact Us</h2>
        </div>
        <div class="box">
            <!-------Form--------->
            <div class="contact form">
                <h3>Send a Message</h3>
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Username</span>
                                <input type="text" placeholder="">
                            </div>
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here ..."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-------Info Box--------->
            <div class="contact info">
                <h3>Contact No</h3>
                <div class="infoBox">
                    <div>
                     <span><img src="image/call.png"></span>
                     <p> 011 - 27687558</p>
                    </div>
                </div>
                <h3>Email Address</h3>
                <div class="infoBox">
                    <div>
                     <span><img src="image/mail.png"></span>
                     <p> Sweettooth@gmail.com</p>
                    </div>
                <h3>Click here ⬇</h3>
                <button class="whatsapp-button">
                    <a href="https://wa.me/601127687558" target="_blank" class="whatsapp-link">
                       <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </button>
                </div><br>
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="facebook"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
            </div>
        </div>
    </div>
    
</body>

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

<!-- Load Footer (Matches Other Pages) -->
<div id="footer"></div>
