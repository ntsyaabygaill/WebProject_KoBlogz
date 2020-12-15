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
	 
	
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg__2.png');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>K-Drama<i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">K-Drama</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
		  <div class="row d-flex">
			<div class="col-lg-4 ftco-animate">
			  <div class="blog-entry">
				<a href="blog-single.html" class="block-20" style="background-image: url('images/drama_1.jpg');">
				</a>
				<div class="text d-block">
				 <div class="meta">
			   </div>
			   <h3 class="heading"><a href="#">Crash Landing On You</a></h3>
			   <p>Crash Landing on You (Hangul: 사랑의 불시착 ; RR: Sarangui Bulsichak; lit. Love's Emergency Landing) adalah seri televisi Korea Selatan tahun 2019 yang dibintangi oleh Hyun Bin, Son Ye-jin, Kim Jung-hyun, dan Seo Ji-hye</p>
			   <p><a href="cloy-detail.php" class="btn btn-secondary py-2 px-3">Read more</a></p>
			 </div>
		   </div>
		 </div>
	  
		 <div class="col-lg-4 ftco-animate">
		  <div class="blog-entry">
			<a href="blog-single.html" class="block-20" style="background-image: url('images/drama_2.jpg');">
			</a>
			<div class="text d-block">
			 <div class="meta">
		   </div>
		   <h3 class="heading"><a href="#">W</a></h3>
		   <p>W (Hangul: 더블유; RR: Deobeuryu) adalah serial televisi Korea Selatan yang mengudara di MBC pada 20 Juli 2016, dibintangi Lee Jong-suk dan Han Hyo-joo. Drama pertama Han Hyo Joo di layar kaca setelah 6 tahun.</p>
		   <p><a href="cloy-detail.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
		 </div>
	   </div>
	  </div>
	  <div class="col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="blog-single.html" class="block-20" style="background-image: url('images/drama__3.jpg');">
		  </a>
		  <div class="text d-block">
		   <div class="meta">
		 </div>
		 <h3 class="heading"><a href="#">Start-Up</a></h3>
		 <p>Start-Up (Hangul: 스타트업; RR: Seutateueob) adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Bae Suzy, Nam Joo-hyuk, Kim Seon-ho, dan Kang Han-na. Mulai 17 Oktober hingga 6 Desember 2020</p>
		 <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
	   </div>
	  </div>
	  </div>
	  <div class="col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="blog-single.html" class="block-20" style="background-image: url('images/drama_4.jpg');">
		  </a>
		  <div class="text d-block">
		   <div class="meta">
		 </div>
		 <h3 class="heading"><a href="#">Hotel Del Luna</a></h3>
		 <p>Hotel del Luna (Hangul: 호텔 델루나 ; RR: Hotel Delluna) adalah serial televisi Korea Selatan yang dibintangi oleh Lee Ji-eun dan Yeo Jin-goo. Drama ini disiarkan mulai tanggal 13 Juli hingga tanggal 1 September 2019 </p>
		 <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
	   </div>
	  </div>
	  </div>
	  
	  <div class="col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="blog-single.html" class="block-20" style="background-image: url('images/drama_5.jpg');">
		  </a>
		 <div class="text d-block">
		   <div class="meta">
		 </div> 
		 <h3 class="heading"><a href="#">Privates Lives</a></h3>
		 <p>Private Lives[a] (Hangul: 사생활; Hanja: 私生活; RR: Sasaenghwal) adalah seri televisi Korea Selatan tahun 2020 yang dibintangi oleh Seohyun, Go Kyung-pyo, Kim Hyo-jin, Kim Young-min, dan Tae Won-seok.</p>
		 <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
	   </div>
	  </div>
	  </div>
	  <div class="col-lg-4 ftco-animate">
		<div class="blog-entry">
		  <a href="blog-single.html" class="block-20" style="background-image: url('images/drama_6.jpeg');">
		  </a>
		  <div class="text d-block">
		   <div class="meta">
		 </div>
		 <h3 class="heading"><a href="#">Live On</a></h3>
		 <p>Live On (Hangul: 라이브온; RR: Laibeu On) adalah seri televisi Korea Selatan tahun 2020 dengan jumlah 8 episode dan akan dibintangi oleh Jung Da-bin, Hwang Min-hyun, Noh Jong-hyun, Yang Hye-ji, Yeonwoo, dan Choi Byung-chan.
		</p>
		 <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
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