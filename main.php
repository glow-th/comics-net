<?php 
session_start();

if (!isset($_SESSION['id'])) {
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>

    <!-- google fonts css file link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo">COMICS NET</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#core">core</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#features">features</a></li>
            <li><a href="#product">product</a></li>
            <li><a href="#profile">profile</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>fast and reliable middle man</h1>
        <p>We buy and sell all kinds of social media and Gaming accounts, We render Gaming Account top ups like Free fire Monthly membership....</p>
        <a href="#"><button class="btn">order now</button></a>
    </div>

    <div class="image">
        <img src="images/logo.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- core features section starts  -->

<section class="core" id="core">

<h1 class="heading">Outstanding Core Features of our Services</h1>

<div class="row">

    <div class="image">
        <img src="images/core_img.jpg" alt="">
    </div>

    <div class="box-container">

        <div class="box">
            <h3> <i class="fas fa-user"></i> user friendly </h3>
            <p>Middlemen enhance distribution efficiency, save time, and provide convenience.
                They play a vital role in reaching dispersed customers and managing specialized tasks.</p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-shield-alt"></i> high security </h3>
            <p>we provide risk free payment gateways for all our customers to avoid fruad, we prevent the sales of counterfeit products overall 
we value your security concern<span class="white">🔒</span></p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-sync-alt"></i> Zero hidden charges </h3>
            <p>we do not charge you indirectly, all related charges are included before transactions are carried out</p>
        </div>

        <div class="box">
            <h3> <i class="fas fa-magic"></i> face paced transactions</h3>
            <p>we strike a balance—accurate transaction system enough to inspire trust and fast enough to meet your demands. 🚀🎯</p>
        </div>

    </div>

</div>

</section>

<!-- core features section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading">about our services</h1>

<div class="row">

    <div class="image">
        <img src="images/core_img.jpg" alt="">
    </div>

    <div class="content">
        <h3>Top 1 Middle man service in Nigeria.</h3>
        <p>We Buy And Sell All Kinds Of Social Media And Gaming Accounts, We Render Gaming Account Top Ups Like Free Fire Monthly Membership....</p>
        <p> <i class="fas fa-check-circle"></i> Attractive customer service with cool activity </p>
        <p> <i class="fas fa-check-circle"></i> Live Chat and Instant response </p>
        <p> <i class="fas fa-check-circle"></i> try us now to experience Unlimited secure transactions</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

<h1 class="heading">Key featuers of our services</h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-rocket"></i>
        <h3>fast and reliable</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div>

    <div class="box">
        <i class="fas fa-comments"></i>
        <h3>24/7 live chat</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div>

    <div class="box">
        <i class="fas fa-gamepad"></i>
        <h3>tested and trusted</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div>

    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Whole Nigeria</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div>

    <!-- <div class="box">
        <i class="fas fa-wifi"></i>
        <h3>wifi facility</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div>

    <div class="box">
        <i class="fas fa-cloud-sun"></i>
        <h3>weather updates</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit vel repellendus necessitatibus amet doloribus aut quia ad asperiores deserunt ullam!</p>
    </div> -->

</div>

</section>

<!-- features section ends -->

<!-- product section starts  -->

<section class="product" id="product">

<h1 class="heading">ORDER ONE OF OUR SERVICES TODAY</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/account-1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Middle Man</h3>
            <p>Want to Purchase or sell a social media or gaming account in a secure way? don't worry we have you covered</p>
            <div class="price">₦2,000</div>
            <a href="#"><button class="btn">ORDER</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/topup.jpg" alt="">
        </div>
        <div class="content">
            <h3>Top up</h3>
            <p>want to top up your gaming or social media account? You are in the right place we can help you do that with ease, no need to worry</p>
            <div class="price">N/A</div>
            <a href="#"><button class="btn">ORDER</button></a>
        </div>
    </div>

    <!-- <div class="box">
        <div class="image">
            <img src="images/w3.jpg" alt="">
        </div>
        <div class="content">
            <h3>smart Watch</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, velit adipisci. Tempore, dolor dicta. Aspernatur quisquam voluptas natus ex laudantium?</p>
            <div class="price">$60/-</div>
            <a href="#"><button class="btn">ORDER</button></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/w4.jpg" alt="">
        </div>
        <div class="content">
            <h3>smart Watch</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, velit adipisci. Tempore, dolor dicta. Aspernatur quisquam voluptas natus ex laudantium?</p>
            <div class="price">$55/-</div>
            <a href="#"><button class="btn">add to cart</button></a>
        </div>
    </div> -->

</div>

</section>

<!-- product section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<form action="">

    <input class="box" type="text" placeholder="name">
    <input class="box" type="email" placeholder="your email">
    <input class="box" type="number" placeholder="your number">

    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

    <input type="submit" class="btn" value="send message">

</form>

<div class="content">

    <h3>Need Help? Don't Forget to Contact With Us</h3>
    <p>need support or do you want to make some enquires? you can contact us throught the below methods </p>
    <div class="icons"> <i class="fas fa-map-marker-alt"></i> <p>lagos, Nigeria</p> </div>
    <div class="icons"> <i class="fas fa-globe"></i> <p>www.yourwebsite.com</p> </div>
    <div class="icons"> <i class="fas fa-phone"></i> <p>234-8025-6002-16</p> </div>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="share">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/ndupum.blessing" class="fab fa-facebook-f"></a>
        <!-- <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-pinterest"></a> -->
    </div>

    <h1 class="credit">created by <a href="#">Goodness tech</a> | all rights reserved </h1>

</div>

<!-- footer section ends -->

















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="dashboard.js"></script>



</body>
</html>
