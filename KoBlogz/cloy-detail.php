<?php

session_start();

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
			  <a class="navbar-brand" href="home.php"><span>Ko</span>Blogz</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
		 
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
				  <li class="nav-item active"><a href="K-Drama.php" class="nav-link">K-Drama</a></li>
				  <li class="nav-item"><a href="K-Pop.php" class="nav-link">K-Pop</a></li>
				  <li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION["user"] ?></a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
			  </ul>
		  </div>
		 </div>
		 </nav>
		 <!-- END nav -->
	
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/drama_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="index.html">K-Drama <i class="fa fa-chevron-right"></i></a></span></p>
       <h1 class="mb-0 bread">Crash Landing On You</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
        <h3 class="mb-3">Sinopsis</h3>
        <p>Yoon Se-ri (Son Ye-jin) adalah seorang pewaris konglomerat di Korea Selatan. Suatu hari, saat paralayang, kecelakaan yang disebabkan oleh angin kencang membuat Se-ri melakukan pendaratan darurat di Korea Utara. Di sana, ia bertemu dengan Ri Jeong-hyuk (Hyun Bin), seorang perwira tinggi Korea Utara. Jung-hyeok mencoba untuk melindungi dan menyembunyikannya. Segera setelah itu, ia jatuh cinta dengan Se-ri.</p>
        <p>
          <img src="images/cloy.jpg" alt="" class="img-fluid">
        </p>
        
          
      </p>
        <h3 class="mb-3 mt-5">Penghargaan</h3>
        <ul style="list-style-type:circle;">
          <li>Best Supporting Actress</li>
          <li>Tiktok Popularity Award (Male)</li>
          <li>Tiktok Popularity Award (Female)</li>
          <li>Bazaar Icon Award</li>
        </ul>
        <h3 class="mb-3">Main Actor</h3>
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="images/aktor23.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>Son Ye-jin</h3>
            <p>Yoon Se-ri</p>
            <p> Seorang wanita pewaris Korea Selatan dengan sejarah keluarga yang bermasalah karena ia adalah anak tidak sah Ayahnya. Meskipun demikian, dia adalah seorang pengusaha sukses yang mendirikan perusahaanya sendiri. Dia bertemu Ri Jeong-hyuk setelah kecelakaan pendaratan di Korea Utara karena kecelakaan paralayang.</p>
          </div>
        </div>

        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="images/aktor12.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>Hyun Bin</h3>
            <p>Ri Jeong-hyuk</p>
            <p>Seorang kapten yang terampil dan berdedikasi dalam tentara Korea Utara yang menyembunyikan dan melindungi Se-ri setelah dia secara tidak sengaja mendarat di negaranya. Jeong-hyuk adalah pianis berbakat yang harus kembali ke negara asalnya bergabung dengan Ayahnya dala militer.</p>
          </div>
        </div>

          <div class="about-author d-flex p-4 bg-light">
            <div class="bio mr-5">
              <img src="images/actor3.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
          <div class="desc">
            <h3>Kim Jung-hyun</h3>
            <p>Goo Seung-joon</p>
            <p>Seorang pengusaha muda dan kaya, yang juga mantan tunangan Seri (Kakaknya berharap untuk penyatuan melalui perjodohan ini). Dia menggelapkan uang dari perusahaan yang dijalankan oleh Ayah Se-ri dan melarikan diri ke Korea Utara.</p>
          </div>
          </div>

          <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="images/actor4.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>Seo Ji-hye</h3>
            <p>Seo Dan</p>
            <p>Seorang musisi bercita-cita tinggi yang berasal dari kalangan keluarga konglomerat di Korea Utara. Tunangan Ri Jeong-hyuk melalui perjodohan orang tuanya. Meskipun dia jatuh cinta dengan Jeong-hyuk, namun perasaannya tidak terbalas.</p>
          </div>
        </div>

        
      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate pl-md-4 py-md-5">
        
        <div class="sidebar-box ftco-animate">
          <div class="categories">
            <h3>Sountrack</h3>
            <li><a href="https://www.youtube.com/watch?v=jGGQyqohOaw" target="_blank">"But It's Destiny" (우연인 듯 운명) <span>(1)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=EeRDblN7EDc" target="_blank">Flower <span>(2)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=F7O3jftMaIA" target="_blank">"Sunset" (노을) <span>(3)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=FFmdTU4Cpr8" target="_blank">"Here I Am Again" (다시 난, 여기)" <span>(4)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=wrcUQkBrQ0A" target="_blank">"Someday" (어떤 날엔) <span>(5)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=4iox0NVHBAs" target="_blank">"Photo of My Mind" (내 마음의 사진)  <span>(6)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=1rqAAxAobdA" target="_blank">"The Hill of Yearning" (그리움의 언덕)  <span>(7)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=bFLMKECxUMY" target="_blank">"All of My Days" (나의 모든 날) <span>(8)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=TTB_pfo5GBI" target="_blank">"Good" (좋다)<span>(9)</span></a></li>
            <li><a href="https://www.youtube.com/watch?v=EXJfWc4JciQ" target="_blank">"Let Us Go" (둘만의 세상으로 가) <span>(10)</span></a></li>
          </div>
        </div>

        

        

        
      </div>

    </div>
  </div>
</section> <!-- .section -->	

<footer class="ftco-footer ftco-no-pt">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md pt-5">
        <div class="ftco-footer-widget pt-md-5 mb-4">
          <h2 class="ftco-heading-2">About</h2>
          <p>Blogs Seputar K-Pop idol dan K-Drama. Yang butuh foto HD bias, mampirnya kesini..</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="https://twitter.com/abeegell" target="_blank"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/natasyanelwan_/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>
<div class="col-md pt-5">
  <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
    <h2 class="ftco-heading-2">Fresh From The Oven!</h2>
    <ul class="list-unstyled">
      <li><a href="nct-details.html" class="py-2 d-block">NCT Album</a></li>
      <li><a href="cloy-detail.html" class="py-2 d-block">Soundtrack Crash Landing On You</a></li>
      <li><a href="nct-details.html" class="py-2 d-block">About Lee Jeno</a></li>
      <li><a href="cloy-detail.html" class="py-2 d-block">Kim Hyun Bin as Ri Jeong-hyuk</a></li>
    </ul>
  </div>
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