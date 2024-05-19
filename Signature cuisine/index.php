<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index/res3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="./c.js"></script>
    <link rel="stylesheet" href="c.css">
   <link rel="stylesheet" href="index/res6.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
     <section class="first-sec">
        <!-- <iframe src="first.php" width="100%" height="100%" frameborder="0" class="shop-menu"></iframe> -->
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
                    <a class="nav-link" id="active" href="#">Home</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="page.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Our Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testomon.php">Customer Feedbacks</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn-hide btn-primary" href="#"></a>
                </li> -->
                <li class="nav-item">
                    <a class="btn btn-success ml-4" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="1000">
        <img src="img/main.avif" alt="Los Angeles" class="d-block w-100" style="height: 650px; width: 100%;">  
    
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type of="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
    
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <p class="welllcomecarosel">
            <h4>Welcome to Signature cuisine,</h4>
            <p> We're your gateway to culinary delight. Our menu is a symphony of flavors, <br> from tempting appetizers to satisfying entrees and sweet endings. <br> Our team is here to make your dining experience exceptional. Thank you for choosing us. Enjoy every bite!</p>
            <button class="callBtn"><a href="#"><i class='bx bxs-store'>Explore</i></a></button>
            </p>
                
            </div>
            <div class="carousel-item">
              <p class="welllcomecarosel">
                <h4>Come And Enjoy foods</h4>
                <p> Book Your Table Now <br> With Your Lovers Our team is here to make your dining experience exceptional. <br> Thank you for choosing us. Enjoy every bite!</p>
                <button class="callBtn"><a href="#"><i class='bx bxs-bowl-hot' >Book Table</i></a></button>
                </p>
            </div>
            <div class="carousel-item">
                  <h4>We Delivery Your Favotite foods</h4>
                  <p> Take bites your Favotite foods <br> in your home Our team is here to make your dining experience exceptional. <br> Thank you for choosing us. Enjoy every bite!</p>
                  <button class="callBtn"><a href="#"><i class='bx bxs-phone-call'>Call us</i></a></button>
                  </p>
            </div>
        </div>
    </div>
    </section>
     <section class="box-item">
        <iframe src="box-item.php" width="100%" height="100%" frameborder="0" class="shop-menu"></iframe>
    </section>
    <section class="about-us">
        <iframe src="about.php" width="100%" height="100%" frameborder="0" class="shop-menu"></iframe>
   </section>
    <section class="shop-section"> 
    <iframe src="counter.php" width="100%" height="100%" frameborder="0" class="shop-menu"></iframe>
    </section>
   <section class="market">
    <iframe src="products.php" width="100%" height="100%" frameborder="0" class="shop-menu"></iframe>
   </section>
   <section class="contact-us">
   <iframe src="testomon.php" width="100%" height="90%" frameborder="0" class="shop-menu"></iframe>
   </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="/c.js"></script>
</body>
</html>