<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
     <!-- swiper css file link-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- custom css file link-->
    <link rel="stylesheet" href="css/project.css">
   
</head>
<body>
    <!--header section starts-->
   <section class="header">
    <a href="home.php" class="logo"><span style="color:#8e44ad">T</span>ravel</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

       <div id="menu-btn" class="fas fa-bars"></div>

   </section>
    <!--header section ends-->

    <!--home section starts-->

    <section class="home">
      <div class="swiper home-slider">

       <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide.jpg) no-repeat">
           <div class="content">
              <span>explore, discover, travel</span>
              <h3>travel arround the world</h3>
              <a href="package.php" class="btn">discover more</a>
           </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
           <div class="content">
              <span>explore, discover, travel</span>
              <h3>discover the new places</h3>
              <a href="package.php" class="btn">discover more</a>
           </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
           <div class="content">
              <span>explore, discover, travel</span>
              <h3>make your tour worthwhile</h3>
              <a href="package.php" class="btn">discover more</a>
           </div>
         </div>
       </div>
       <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

      </div>
    </section>
    <!--header section ends-->

    <!--services section starts-->

     <section class="services">
        <h2 class="heading-title">our services</h2>

        <div class="box-container">

            <div class="box">
              <img class="icons" src="images/icon-1.png" alt="">
              <h3>adventure</h3>
            </div>

            <div class="box">
              <img class="icons" src="images/icon-2.png" alt="">
              <h3>tour guide</h3>
            </div>

            <div class="box">
              <img class="icons" src="images/icon-3.png" alt="">
              <h3>trekking</h3>
            </div>

            <div class="box">
              <img class="icons" src="images/icon-4.png" alt="">
              <h3>camp fire</h3>
            </div>
  
            <div class="box">
              <img class="icons" src="images/icon-5.png" alt="">
              <h3>off road</h3>
            </div>

            <div class="box">
              <img class="icons" src="images/icon-6.png" alt="">
              <h3>camping</h3>
            </div>

        </div>

     </section>
    <!--services section ends-->

    <!--home about section starts-->

    <section class="home-about">

      <div class="image">
        <img src="images/home-about.jpg" alt="">
      </div>

      <div class="content">
        <h3>about us</h3>
        <p>We’re on a mission to help people discover the real value of travel — to inspire, to give more reasons, to make it easy — for you to go. Our company was founded back in 2005, 
          and since then, we’ve imagined and created some of the most well-loved products for travelers all around the world.</p>
          <a href="about.php" class="btn">read more</a>
      </div>

    </section>
   <!--home about section ends-->

   <!--home package section starts-->

   <section class="home-packages">

   <h1 class="heading-title">our packages</h1>

      <div class="box-container">
           <div class="box"> 
            <div class="image">
              <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
              <h3><i class="fas fa-map-marker-alt" style="color:#8e44ad;"></i>Agra tour</h3>
              <p>The ‘Land of Taj Mahal’ and the City of Pethas’, Agra is inarguably one of the most-visited travel destinations in India.
           Be it the historical sites that take tourists back to the rich Mughal history.</p>
           <div class="price">$99.00 <span>$150.00</span></div>
                 <a href="book.php" class="btn">book now</a>
            </div>
           </div>

           <div class="box"> 
            <div class="image">
              <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
              <h3><i class="fas fa-map-marker-alt" style="color:#8e44ad;"></i>Uttarakhand Tour</h3>
              <p>Devbhoomi Uttarakhand is the state in India one can easily fall in love with. The surreal landscape that comprises lofty Himalayas,
                 glistening streams, eye-catching meadows, imposing glaciers and surreal lakes.</p>
                 <div class="price">$99.00 <span>$150.00</span></div>
                 <a href="book.php" class="btn">book now</a>
            </div>
           </div>

           <div class="box"> 
            <div class="image">
              <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
              <h3><i class="fas fa-map-marker-alt" style="color:#8e44ad;"></i>Harnai Beach Tour</h3>
              <p>Located about 200 km away from Mumbai, Harnai is a calm and quiet beach gaining huge popularity
                 among the tourists and beach lovers from Mumbai and Pune during weekends.</p>
                 <div class="price">$99.00 <span>$150.00</span></div>
                 <a href="book.php" class="btn">book now</a>
            </div>
           </div>

     </div>

     <div class="load-more"><a href="package.php" class="btn">load more</a></div>

   </section>

   <!--home package section ends-->

    <!--home offer section starts-->

  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>summer special offer for your  tour journey</p>
      <p><span style="color:orange">see more,save more</span> without spending more on your <span style="color:red">summar vacation</span></p>
         <a href="book.php" class="btn">book now</a>
    </div>

  </section>

    <!--home offer section ends-->


<!--footer section starts-->
<section class="footer">
    <div class="box-container">

        <div class="box">
         <h3>quick links</h3>
         <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
         <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
         <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
         <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
         <h3>extra links</h3>
         <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
         <a href="#"><i class="fas fa-angle-right"></i>about us </a>
         <a href="#"><i class="fas fa-angle-right"></i>privvacy police</a>
         <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
         <h3>contact info</h3>
         <a href="#"><i class="fas fa-phone"></i>+91-7667******</a>
         <a href="#"><i class="fas fa-phone"></i>+91-9687******</a>
         <a href="#"><i class="fas fa-envelope"></i>ajaykumar****@gmail.com</a>
         <a href="#"><i class="fas fa-map"></i>motihari, bihar(india)-845401</a>
        </div>
       <div class="box">
         <h3>follow us</h3>
         <a href="#"><i class="fab fa-facebook"></i>facebook</a>
         <a href="#"><i class="fab fa-twitter"></i>twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>
         <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
       </div>
    </div>

    <div class="credit">created by <span>Ajay ku. gupta</span> | all right reserved! </div>

</section>


<!--footer section ends-->



<!-- swiper js file link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link-->
<script src="js/script.js"></script>
</body>
</html>