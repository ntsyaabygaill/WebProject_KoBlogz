<?php

include("connection.php");

session_start();

// if (!isset($_SESSION["user"])) {
//     header("Location:signin.php");
// }

// $_SESSION["user"] = "Aby";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>🦄KoBlogz🦄</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html"><span>Ko</span>Blogz</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
     
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="K-Drama.php" class="nav-link">K-Drama</a></li>
              <li class="nav-item"><a href="K-Pop.php" class="nav-link">K-Pop</a></li>
              <li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION["user"] ?></a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
          </ul>
      </div>
     </div>
     </nav>
     <!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.png');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">Welcome to Ko-Blogz</span>
        <h1 class="mb-4">Lift your day with your bias!</h1>
    </div>
</div>
</div>
</div>

<!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Register Now</h3>

              <form action="verify_register.php" class="signup-form" method="POST">
                 <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" placeholder="Masukin ya namanya.." name="fullname">
                </div>
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="text" class="form-control" placeholder="email juga tolong diisi.." name="email">
                </div>
                <div class="form-group">
                 <label class="label" for="password">Password</label>
                 <input id="password-field" type="password" class="form-control" placeholder="sutt..password" name="password">
             </div>
             <div class="form-group d-flex justify-content-end mt-4">
                 <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
             </div>
         </form>
         <p class="text-center">Already have an account? <a href="signin.php">Sign In</a></p>
     </div>
 </div>
</div>
</div>
</section> -->

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpeg);">
 <div class="overlay"></div>
 <div class="container">
    <div class="row">
       <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
         <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
             <strong class="number" data-number="400">0</strong>
             <span>User</span>
         </div>
     </div>
 </div>
 <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
     <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-graduated"></span></div>
        <div class="text">
         <strong class="number" data-number="4500">0</strong>
         <span>K-Pop Content</span>
     </div>
 </div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-tools"></span></div>
    <div class="text">
     <strong class="number" data-number="300">0</strong>
     <span>K-Drama Content</span>
 </div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section testimony-section bg-light">
   <div class="overlay" style="background-image: url(images/bg_2.jpeg);"></div>
   <div class="container">
    <div class="row pb-4">
      <div class="col-md-7 heading-section ftco-animate">
         <span class="subheading">Testimonial</span>
         <h2 class="mb-4">What They Says</h2>
     </div>
 </div>
</div>
<div class="container container-2">
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                 <p class="star">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </p>
                <p class="mb-4">Gilaa,blognya lengkap banget...foto-foto bias disini juga HD semuaa,nomuuu ccuuaaa >.< </p>
                <div class="d-flex align-items-center">
                   <div class="user-img" style="background-image: url(images/testi_1.jpg)"></div>
                   <div class="pl-3">
                      <p class="name">IstriJeno</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">Daebakk!! Gw ngehalu mulu tiap hari kalo buka KoBlogz..Makasih min,semogaa jodoh sama biasnya..</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/testi_2.jpg)"></div>
           <div class="pl-3">
              <p class="name">NomuLonely</p>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">Makasih Ko-Blogz,gw jadi bisa ngikutin cewe gw kalo lagi ngomongin biasnya..nambah pengetahuan..</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/testi_5.jpg)"></div>
           <div class="pl-3">
              <p class="name">DahTaken</p>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">Woiii,tanggung jawab!!! Gw jadi K-Ppopers akutt!! Sampe subuh streaming rekomendasi K-Drama..</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/testi_3.jpg)"></div>
           <div class="pl-3">
              <p class="name">Jomblo</p>
          </div>
      </div>
  </div>
</div>
</div>
<div class="item">
    <div class="testimony-wrap py-4">
      <div class="text">
         <p class="star">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </p>
        <p class="mb-4">pip pip pip pip calon pacar~~ makasih Ko-blogz Info tentang dunia per K-pop an,jadi punya cewe deh..</p>
        <div class="d-flex align-items-center">
           <div class="user-img" style="background-image: url(images/testi_4.jpg)"></div>
           <div class="pl-3">
              <p class="name">BaruJadian</p>
              
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
         <div class="w-100 mb-4 mb-md-0">
            <span class="subheading">Welcome to KoBlogz!</span>
            <h2 class="mb-4">KoBlogz in your area~~</h2>
            <p>KoBlogz adalah Blog berisi informasi seputar dunia industri Hiburan Korea. Mulai dari Informasi K-Drama hingga K-Pop.</p>
            <p>Semoga informasi yang kami sampaikan seputar biasmu dapat bermanfaat! Annyeong >< </p>
           
     </div>
 </div>
 <div class="col-md-6">
     <div class="row">
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
          <div class="services">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Quality Content</h3>
              <p>Kontennya gausah diraguin lagi.. ahh mantap!!</p>
          </div>
      </div>      
  </div>
  <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
      <div class="services">
        <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
        <div class="media-body">
          <h3 class="heading mb-3">r</h3>
          <p>A small river named Duden flows by their place and supplies</p>
      </div>
  </div>    
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">World Class &amp; Quiz</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">Get Certified</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
</div>
</div>
</div>
</div>
</section>

<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
      <h2 class="ftco-heading-2">Help Desk</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Customer Care</a></li>
        <li><a href="#" class="py-2 d-block">Legal Help</a></li>
        <li><a href="#" class="py-2 d-block">Services</a></li>
        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
        <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
        <li><a href="#" class="py-2 d-block">Call Us</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
   <div class="ftco-footer-widget pt-md-5 mb-4">
      <h2 class="ftco-heading-2">Recent Courses</h2>
      <ul class="list-unstyled">
        <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Web Design</a></li>
        <li><a href="#" class="py-2 d-block">Business Studies</a></li>
        <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
        <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
        <li><a href="#" class="py-2 d-block">Web Developer</a></li>
    </ul>
</div>
</div>
<div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
           <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
       </ul>
   </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12 text-center">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
  </div>
</div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>