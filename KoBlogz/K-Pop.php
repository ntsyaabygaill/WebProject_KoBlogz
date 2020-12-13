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
			  <a class="navbar-brand" href="index.html"><span>Ko</span>Blogz</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
		 
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
				  <li class="nav-item"><a href="K-Drama.php" class="nav-link">K-Drama</a></li>
				  <li class="nav-item active"><a href="K-Pop.php" class="nav-link">K-Pop</a></li>
				  <li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION["user"] ?></a></li>
              <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
			  </ul>
		  </div>
		 </div>
		 </nav>
		 <!-- END nav -->
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg__3.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span><i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">K-Pop</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idoll_1.jpeg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="nct-details.html">NCT</a></h3>
							<span class="position mb-2">Boy group</span>
							<div class="faded">
								<p>NCT (Hangul: 엔시티) adalah grup vokal pria asal Korea Selatan yang dibentuk oleh SM Entertainment. 
								NCT merupakan singkatan dari Neo Culture Technology</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/NCTsmtown" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/NCT" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/nct/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_2.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Red Velvet</a></h3>
							<span class="position mb-2">Girl Group</span>
							<div class="faded">
								<p>Red Velvet (Hangul: 레드벨벳) adalah grup musik Korea Selatan yang dibentuk oleh SM Entertainment pada tahun 2014 dan terdiri dari lima anggota. </p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/RVsmtown" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/Red_Velvet_(grup_musik)" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/redvelvet.smtown/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_3.jpeg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">BTS</a></h3>
							<span class="position mb-2">Boy Group</span>
							<div class="faded">
								<p>BTS (Hangul: 방탄소년단; RR: Bangtan Sonyeondan), dikenal sebagai Bangtan Boys,boy band beranggotakan tujuh orang asal Korea Selatan yang dibentuk oleh Big Hit Entertainment.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/BTS_twt" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/BTS" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/bts.bighitofficial/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_3.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Blackpink</a></h3>
							<span class="position mb-2">Girl Group</span>
							<div class="faded">
								<p>Black Pink (Hangul: 블랙핑크), ditulis bergaya sebagai BLACKPINK atau BLΛƆKPIИK, grup penyanyi perempuan Korea Selatan yang dibentuk oleh YG Entertainment, terdiri dari empat anggota.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/blackpink" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/Blackpink" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/blackpinkofficial/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_4.jpeg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">G-Friend</a></h3>
							<span class="position mb-2">Girl Group</span>
							<div class="faded">
								<p>GFriend (Hangul: 여자친구, Yeoja Chingu; Chosǒn'gŭl: 녀자친구, Nyǒcha Ch'ingu), grup penyanyi perempuan Korea Selatan yang dibentuk oleh Source Music pada 2015, beranggotakan enam orang</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/GFRDofficial" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/GFriend" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/gfriendofficial/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_6.jpeg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">Wanna One</a></h3>
							<span class="position mb-2">Boy Group</span>
							<div class="faded">
								<p>Wanna One (Hangul: 워너원) adalah grup vokal pria Korea Selatan yang dibentuk oleh CJ E&M melalui acara kompetisi survival Produce 101 Season 2 pada tahun 2017. Grup ini terdiri dari 11 anggota</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/WannaOne_twt" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/Wanna_One" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/wannaone.official/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/idol_7.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">IOI</a></h3>
							<span class="position mb-2">Girl Group</span>
							<div class="faded">
								<p>I.O.I (Hangul: 아이오아이; juga dikenal sebagai IOI atau Ideal of Idol) adalah girl grup Korea Selatan yang dibentuk oleh CJ E&M melalui acara survival tahun 2016, Produce 101 di Mnet. </p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/ioi_official_" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/I.O.I" target="_blank"><span class="fa fa-google"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/ioi_official_ig/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/solois_8.jpg);"></div>
						</div>
						<div class="text pt-3">
							<h3><a href="instructor-details.html">IU</a></h3>
							<span class="position mb-2">Soloist</span>
							<div class="faded">
								<p>Lee Ji-eun (bahasa Korea: 이지은; lahir 16 Mei 1993) atau yang biasa dikenal dengan IU (bahasa Korea: 아이유) adalah seorang penyanyi, komponis, aktris, gitaris, penari dan pembawa acara televisi.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="https://twitter.com/_IUofficial" target="_blank"><span class="fa fa-twitter"></span></a></li>
									<li class="ftco-animate"><a href="https://id.wikipedia.org/wiki/IU_(penyanyi)" target="_blank"><span class="fa fa-facebook"></span></a></li>
									<li class="ftco-animate"><a href="https://www.instagram.com/dlwlrma/?hl=en" target="_blank"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
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