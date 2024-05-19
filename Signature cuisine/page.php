<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="about/about.js"></script>
    <script defer src="c.js"></script>
   <!-- <link rel="stylesheet" href="/about/about.css"> -->
   <link rel="stylesheet" href="about/c.css">
   <link rel="stylesheet" href="about/about.css">
   <link rel="stylesheet" href="about/page.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom  sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><ion-icon  name="home-sharp"></ion-icon>Signature cuisine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="index.php">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link"id="active" href="page.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Our shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testomon.php">Customer Feedbacks</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="btn btn-primary" href="#">Sign Up</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="btn btn-success ml-4" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="setion">
        <div class="main-name">
            <h1 class="heading-txt">About Us</h1>
            <img src="img/main.avif" alt="" class="img">
        </div>
    </div>
    <section class="containre">
        <div class="container-box">
            <img src="img/clock.png" alt="">
            <h3>11:00am-8:00pm</h3>
            <a href="#">Working Hour</a>
        </div>
        <div class="container-box">
            <img src="img/location.png" alt="">
            <h3>Colombo 04</h3>
            <a href="#">Get Direction</a>
        </div>
        <div class="container-box">
            <img src="img/call.png" alt="">
            <h3>077-23079060</h3>
            <a href="#">Call us Now</a>
        </div>
    </section>
    <section class="about-us">
        <section class="about">
            <div class="pic-sec">
                 <img src="img/about-1.jpg" alt="" srcset="" class="first-pic">
                 <img src="img/about-2.jpg" alt="" srcset="" class="second-pic">
                <img src="img/about-3.jpg" alt="" srcset="" class="third-pic"> 
                 <img src="img/about-4.jpg" alt="" srcset="" class="fourth-pic">  
          </div>
          <div class="word-sec">
             <h1 class="about-word">about us</h1>
             <h1 class="Welcome-about">Wellcome to <ion-icon name="restaurant-outline"></ion-icon>Signature cuisine</ion-icon</h1>
             <p class="sub-words">
                 Signature Cuisine is a restaurant that specializes in serving fast foods and traditional Italian cuisine. <br>
         
         Operating hours: 11am to 8pm, providing customers with a convenient dining experience throughout the day. <br>
         
         The restaurant aims to offer a diverse menu that caters to various tastes and preferences.
             </p>
             <ion-icon name="fast-food-outline" class="burger-icon"></ion-icon>
            </section>  
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
