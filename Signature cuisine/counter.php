<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="c.js"></script>
   <link rel="stylesheet" href="c.css">
   <style>
    #section_counter {
    position: fixed;
    top: 10%;
    width: 100%;
    
    z-index: 1;
}

   </style>
</head>
<body>
<section id="section_counter">
    <div class="container2">
      <h1 class="section-heading">We've Achived</h1>
    </div>
    <div class="container2">
      <div class="counter-grid">
        <div class="counter-item">
         <ion-icon name="restaurant-outline" class="counter-img" ></ion-icon>
          <h1 class="counter" data-target="10000">8000</h1>
          <p class="item-text">Servings</p>
        </div>
        <div class="counter-item">
          <ion-icon name="happy-outline" class="counter-img"></ion-icon>
          <h1 class="counter" data-target="8000">6000</h1>
          <p class="item-text">Happy Customers</p>
        </div>
        <div class="counter-item">
          <ion-icon name="fast-food-outline" class="counter-img"></ion-icon>
          <h1 class="counter" data-target="200">150</h1>
          <p class="item-text">Menu Items</p>
        </div>
        <div class="counter-item">
          <ion-icon name="star-outline" class="counter-img"></ion-icon>
          <h1 class="counter" data-target="5000">4000</h1>
          <p class="item-text">Five Stars</p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>