<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p> Did you ever imagine that the freshest of fruits and vegetables and hundreds of items could be handpicked and delivered to your home, all at the click of a button....</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>No more getting stuck in traffic jams, paying for parking, standing in long queues and carrying heavy bags – get everything you need, when you need, right at your doorstep....</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I never go to local markets. I always choose BigBasket.com to buy eatables. I am very pleased with the quality of the products and the timely delivery of the products. The customer service is also very good and polite.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>As a working woman, it is definitely a helping hand for me. I can find all items here which is not even available easily in market.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Katty</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I never go to local markets. I always choose groco.com to buy eatables. I am very pleased with the quality of the products and the timely delivery of the products. The customer service is also very good and polite.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>As a working woman, it is definitely a helping hand for me. I can find all items here which is not even available easily in market.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>annie</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I never go to local markets. I always choose BigBasket.com to buy eatables. I am very pleased with the quality of the products and the timely delivery of the products. The customer service is also very good and polite.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>wick</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>As a working woman, it is definitely a helping hand for me. I can find all items here which is not even available easily in market.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carl</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>