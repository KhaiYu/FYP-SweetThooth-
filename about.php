<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetTooth - About Us</title>
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

    <style>
           body {
            font-family: 'Poppins', sans-serif;
            background-color: #2e1700;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 60px 20px;
        }

        h1 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 22px;
            max-width: 900px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }

        .about-section {
            background: #5D4037;
            padding: 25px;
            margin: 20px auto;
            width: 90%;
            max-width: 700px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .toggle-btn {
            background: #FFB74D;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            font-weight: bold;
            color: #3E2723;
            border-radius: 10px;
            width: 100%;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .toggle-btn:hover {
            background: #FFA726;
        }

        .hidden-text {
            display: none;
            margin-top: 15px;
            text-align: left;
            font-size: 18px;
            line-height: 1.5;
            animation: fadeIn 0.5s ease-in-out;
        }

        .highlight {
            color: #FFEB3B;
            font-weight: bold;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }


    </style>


</head>

<body>
<script>
                 
                 fetch("header.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("header").innerHTML = data;
        
        // Wait for the header to fully load before adding 'active'
        setTimeout(() => {
            let navAbout = document.getElementById("nav-about");
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

<div id="header"></div>

<div class="container">
    <h1>About Us - SweetTooth</h1>
    <p>Welcome to <span class="highlight">SweetTooth</span>, where indulgence meets creativity! We are a team of passionate dessert enthusiasts dedicated to bringing you the most delightful and mouth-watering treats. Our journey began with a shared love for sweets and a dream to create a dessert haven that brings joy to every bite. Whether you're celebrating a special occasion or simply treating yourself, SweetTooth is here to be your sweet companion in life.</p>

    <div class="about-section">
        <button class="toggle-btn">Our Story</button>
        <p class="hidden-text">The story of SweetTooth began with the shared dream of three friends. <span class="highlight">CHUAH WOON LONG</span>, <span class="highlight">TAN KHAI YU</span>, and <span class="highlight">LEE JIA SHENG</span> met during their studies at Multimedia University, bonding over their mutual love for desserts. After graduation, they decided to turn their passion into a business, and thus, SweetTooth was born. With their background in multimedia, they combined art and culinary craftsmanship to create desserts that are not only delicious but also visually stunning.</p>
    </div>
    <div class="about-section">
        <button class="toggle-btn">Our Mission</button>
        <p class="hidden-text">To deliver unforgettable dessert experiences using high-quality ingredients, innovative designs, and thoughtful service. We believe that desserts are more than just food. They are an expression of emotion and a small but essential joy in life.</p>
    </div>
    <div class="about-section">
        <button class="toggle-btn">Our Desserts</button>
        <p class="hidden-text">At SweetTooth, we specialize in a variety of delectable treats to satisfy every palate. Each dessert is crafted with care, blending classic flavors with our unique creative touch. Here are some of our signature offerings:<br>

        <br> 🍩 <span class="highlight">Donuts</span> : Soft, fluffy, and generously topped with a variety of glazes, sprinkles, and fillings, our donuts are a delightful surprise in every bite. From classic frosted donuts to innovative salted egg lava donuts, there’s something for everyone.<br>
 
        <br> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="25" height="25">
      <rect x="10" y="20" width="44" height="24" fill="#8B4513" />
      <rect x="10" y="30" width="44" height="6" fill="#F5DEB3" />
      <rect x="10" y="36" width="44" height="6" fill="#FFE4B5" />
      <circle cx="32" cy="33" r="4" fill="#654321" />
      <circle cx="20" cy="33" r="3" fill="#654321" />
      <circle cx="44" cy="33" r="3" fill="#654321" />
      <line x1="15" y1="25" x2="15" y2="45" stroke="#A0522D" stroke-width="2" />
      <line x1="25" y1="25" x2="25" y2="45" stroke="#A0522D" stroke-width="2" />
      <line x1="35" y1="25" x2="35" y2="45" stroke="#A0522D" stroke-width="2" />
      <line x1="45" y1="25" x2="45" y2="45" stroke="#A0522D" stroke-width="2" />
      <ellipse cx="32" cy="50" rx="26" ry="6" fill="#D3D3D3" />
    </svg> <span class="highlight">Tiramisu</span> : Our tiramisu is the perfect blend of tradition and innovation. Layers of coffee-soaked ladyfingers and rich mascarpone cream are topped with a dusting of cocoa powder, creating a harmonious balance of flavors.<br>

        <br> 🎂 <span class="highlight">Cakes</span> : From rich chocolate cakes to light and airy strawberry cream cakes, our cakes are baked to perfection and beautifully decorated. Whether it’s for a birthday, anniversary, or just a sweet treat, our cakes add a touch of magic to every moment.</p>
    </div>

    <div class="about-section">
        <button class="toggle-btn">Our Beverages</button>
        <p class="hidden-text">To perfectly complement our desserts, we’ve curated a selection of refreshing beverages, including coffee, to enhance your tasting experience:<br>
        <br> ☕ <span class="highlight">Coffee</span> : Our coffee is made from premium beans, freshly ground and brewed to deliver a rich aroma. Whether you prefer a classic espresso, a smooth latte, or a refreshing iced Americano, we’ve got you covered. We highly recommend pairing our tiramisu with an espresso for a perfect blend of bitter and sweet.<br>
        <br> 🍹 <span class="highlight">Sparkling Water</span> : For a light and refreshing option, our sparkling water is the perfect choice. It’s crisp, clean, and pairs wonderfully with our sweet treats, offering a refreshing contrast to balance the richness of our desserts.
        </p>
    </div>

    <div class="about-section">
        <button class="toggle-btn">Our Delivery Service</button>
        <p class="hidden-text">We understand that sometimes you want to enjoy our desserts in the comfort of your own home. That’s why we offer a reliable delivery service to ensure your treats arrive in perfect condition. We know the challenges of delivering desserts, such as melting or shifting, so we pay special attention to our packaging design and materials:<br>
        <br> ✅ <span class="highlight">Insulated Packaging</span> : To maintain the ideal temperature, we use high-quality insulated packaging to prevent melting and preserve the texture and flavor of our desserts.<br>
        <br> ✅ <span class="highlight">Secure Containers</span> : Each dessert is placed in secure, airtight containers to prevent movement during transit, ensuring your treats arrive intact and ready to enjoy.<br>
        <br> ✅ <span class="highlight">Eco-Friendly Materials</span> : We are committed to sustainability, which is why our packaging materials are eco-friendly and recyclable, allowing you to indulge guilt-free.<br>
        <br>Whether it’s a personal order or a large event, we offer flexible delivery options to ensure your desserts and beverages arrive on time and in perfect condition.

    </p>
    </div>

    <div class="about-section">
        <button class="toggle-btn">Our Values</button>
        <p class="hidden-text">At SweetTooth, we are more than just a dessert shop—we are a community of dessert lovers who believe in the power of sweets to bring people together. Our core values include:<br>
        <br> ⭐ <span class="highlight">Quality First</span> : We use only the freshest and highest-quality ingredients to ensure every dessert and beverage meets our strict standards.<br>
        <br> 🎨 <span class="highlight">Innovation</span> : We constantly explore new flavors and designs to bring you unique and exciting dessert experiences.<br>
        <br> ❤ <span class="highlight">Customer-Centric</span> : Your satisfaction is our priority. From our products to our service, we strive to exceed your expectations.<br>
        <br> 🌱 <span class="highlight">Sustainability</span> : We care about the environment and are committed to reducing waste by using eco-friendly packaging and practices.</p>
    </div>

    <div class="about-section">
        <button class="toggle-btn">Join Our Sweet Journey</button>
        <p class="hidden-text">Since our founding, SweetTooth has created countless sweet memories for our customers. We are grateful for everyone who has supported us and look forward to creating more joyful moments with you. Whether through our store, website, or delivery service, we hope to become an essential part of your life’s sweet moments.<br>
        <br>If you have any questions or suggestions, please feel free to contact us. We look forward to hearing from you and providing you with the best service possible.
        </p>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Load header and footer dynamically
    fetch("header.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("header").innerHTML = data;
        });

    fetch("footer.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("footer").innerHTML = data;
        });

    // Toggle effect for explanations
    document.querySelectorAll(".toggle-btn").forEach(button => {
        button.addEventListener("click", function () {
            let text = this.nextElementSibling;
            text.style.display = text.style.display === "none" || text.style.display === "" ? "block" : "none";
        });
    });
</script>

<!-- Load Footer (Matches Other Pages) -->
<div id="footer"></div>

</body>
</html>
