<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="shop111.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="//code.tidio.co/tbeicbcei8bldfygmhdcewwzidj6ahgl.js" async></script>
    <script src="//code.tidio.co/tbeicbcei8bldfygmhdcewwzidj6ahgl.js" async></script>
</head>
<body>
<header class="header">

<section class="flex">

<a href="#home" class="logo"><img src="images/logo2.png" alt=""></a>

<div class="navbar">
   <a href="index.php">home</a>
   <a href="shop1.php">shop</a>
   <a href="card.php"><i class="fas fa-shopping-cart"></i></a>
   <a href="acc.php"><i class="fas fa-user"></i></a>
</div>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
</header>
 
<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
         <h3>Order Now</h3>
         <p>Miamore Coffee Bar & Lounge</p>
         <a href="#about" class="btnn">about us</a>
      </div>

   </section>

</div>
<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> $1.5 - $2.5 </span>
            <img src="images/p-1.jpg" alt="">
            <h3>tasty burger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <!-- <a href="#" class="btnn">order now</a> -->
            <button class="btnn" onclick="showAlert()">order now</button>
        </div>
        <div class="box">
            <span class="price"> $20 - $25 </span>
            <img src="images/p-2.jpg" alt="">
            <h3>tasty cakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <button class="btnn" onclick="showAlert1()">order now</button>
        </div>
        <div class="box">
            <span class="price"> $2 - $3 </span>
            <img src="images/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <button class="btnn" onclick="showAlert2()">order now</button>
        </div>
        <div class="box">
            <span class="price"> $3 - $5 </span>
            <img src="images/p-4.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <button class="btnn" onclick="showAlert3()">order now</button>
        </div>
        <div class="box">
            <span class="price"> $1.5 - $2 </span>
            <img src="images/p-5.jpg" alt="">
            <h3>cold drinks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <button class="btnn" onclick="showAlert4()">order now</button>
        </div>
        <div class="box">
            <span class="price"> $1.5 - $2 </span>
            <img src="images/p-6.jpg" alt="">
            <h3>cold ice-cream</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <button class="btnn" onclick="showAlert5()">order now</button>
        </div> 

    </div>

</section>

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

    </div>

</section>

<section class="footer">
   <div class="credit"> &copy; copyright @ 2022 by <span>mrs. Vesa Susuri</span> | all rights reserved! </div>
</section>

<script src="script.js"></script>
</body>
</html>

<script>
  function showAlert() {
    var myText = "This product was added to your card!";
    alert (myText);
  }
  function showAlert1() {
    var myText = "This product was added to your card!";
    alert (myText);
  }
  function showAlert2() {
    var myText = "This product was added to your card!";
    alert (myText);
  }
  function showAlert3() {
    var myText = "This product was added to your card!";
    alert (myText);
  }

  function showAlert4() {
    var myText = "This product was added to your card!";
    alert (myText);
  }
  function showAlert5() {
    var myText = "This product was added to your card!";
    alert (myText);
  }
  </script>