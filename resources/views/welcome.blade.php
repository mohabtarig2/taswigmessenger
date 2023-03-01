<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="#">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Site Title -->
	<title>Magic Hand</title>

	<!-- Fav Icon -->
	<link rel="icon" href="img/favicon.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
	<!-- Cube Portfolio -->
	<link rel="stylesheet" href="{{ URL::asset('css/cube-portfolio.min.css')}}">
	<!-- Maginific Popup -->
	<link rel="stylesheet" href="{{ URL::asset('css/maginific-popup.min.css')}}">
	<!-- Jquery UI -->
	<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css')}}">
	<!-- Slickslider CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/slickslider.min.css')}}">
	<!-- Bx Slider CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/bx-slider.min.css')}}">
	<!-- AOS CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/aos.min.css')}}">
	<!-- Nice Select -->
	<link rel="stylesheet" href="{{ URL::asset('css/nice-select.min.css')}}">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/datepicker.css')}}">
	<!-- Fontawesome -->
	<link rel="stylesheet" href="{{ URL::asset('css/all.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/responsive.css')}}">

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->



	<!-- Mobile Menu Modal -->
	<div class="modal offcanvas-modal fade" id="offcanvas-modal">
		<div class="modal-dialog offcanvas-dialog">
			<div class="modal-content">
			
			
				<!-- offcanvas-menu start -->
				<nav id="offcanvas-menu" class="offcanvas-menu">
					<ul class="list-none">
						<li class="menu-arrow"><a href="#">Home</a>
							<ul class="sub-menu list-none">
								<li class="active"><a href="index.html">Homepage V1</a></li>
								<li><a href="index2.html">Homepage V2</a></li>
							</ul>
						</li>
						<li><a href="about-us.html" >About</a></li>
						<li class="menu-arrow"><a href="#">Properties</a>
							<ul class="sub-menu">
								<li><a href="property-grid.html">Property Grid</a></li>
								<li><a href="property-list.html">Property List</a></li>
								<li><a href="property-details.html">Property Details</a></li>
							</ul>
						</li>
						<li class="menu-arrow"><a href="#">Agents</a>
							<ul class="sub-menu">
								<li><a href="agents-grid.html">Agents Grid</a></li>
								<li><a href="agents-list.html">Agents List</a></li>
								<li><a href="agents-details.html">Agents Details</a></li>
							</ul>
						</li>
						<li class="menu-arrow"><a href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog-list.html">Blog List</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>
						<li class="menu-arrow"><a href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="login.html">Log In</a></li>
								<li><a href="signup.html">Sign Up</a></li>
								<li><a href="mail-success.html">Mail Success</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
					<div class="offcanvas-social">
						<h4 class="follow-title">Follow Us:</h4>
						<ul class="list-none">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</nav>
				<!-- offcanvas-menu end -->
			</div>
		</div>
	</div>
	<!-- End Mobile Menu Modal -->



	<!-- Topbar Area -->
	<div class="topbar-area">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<!-- Topbar Content Left -->
					<div class="t-content-left">
						<div class="wlc-text t-border-line">
							<p class="mb-0">{{__('message.weclome')}}</p>
						</div>
						<div class="topbar-language">
							<i class="fa fa-globe"></i>

							<select class="selectbox" onchange="javascript:location.href = this.value;">
							
								
								<option value={{ url('/en') }} >English</option>
								<option value={{ url('/ar') }}>Arabic</option>
							
							</select>


						</div>
					</div>
				</div>
				<div class="col-auto">
					<!-- Topbar Content Right -->
					<div class="t-content-right">
						<div class="topbar-opening t-border-line">
							<p class="mb-0"><i class="fa fa-clock"></i> {{__('message.24Hours')}}</p>
						</div>
						<ul class="topbar-social list-none">
							<li><a href="https://www.instagram.com/magichand160"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Topbar Area -->

	<!-- Middle Header -->
	<div class="middle-header">
		<div class="container">
			<div class="row gx-0 justify-content-between align-items-center">
				<div class="col-auto">
					<!-- Logo -->
					<div class="logo two">
						<a href="index.html"><img src="img/logo.png" alt="#"></a>
					</div>
				</div>
				<div class="col-auto">
					<!-- Header Contact -->
					<div class="header-contact">
						<div class="single-h-contact">
							<i class="fa fa-map-marker-alt"></i>
							<div class="s-header-content">
								<span>
									{{__('message.Location')}}
								</span>
								<h4 class="title hs-5 c-font">{{__('message.Abudhabi')}} </h4>
							</div>
						</div>
						<div class="single-h-contact">
							<i class="fa fa-envelope-open-text"></i>
							<div class="s-header-content">
								<span>{{__('message.Online_Support')}}</span>
								<h4 class="title hs-5 c-font">Info@magichand.ae</h4>
							</div>
						</div>
						<div class="single-h-contact">
							<i class="fa fa-phone-volume"></i>
							<div class="s-header-content">
								<span>{{__('message.Call_Us')}} </span>
								<h4 class="title hs-5 c-font">+971501601473</h4>
							</div>
						</div>
						<div class="m-header-btn">
							<a href="https://wa.me/00971501601473" class="theme-btn rounde-circle" style="background:#0bb44c;">
                                <i class="fab fa-whatsapp" style="font-size:30px;color:rgb(255, 255, 255)"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ENd Middle Header -->

	<!-- Header Area -->
	<header class="header-style2" id="active-sticky">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-9 col-md-4 col-4">
					<button type="button" class="offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</button>
					<div class="main-menu">
						<div class="navbar">
							<div class="nav-item">
								<!-- Main Menu -->
								<ul class="nav-menu navigation list-none">
									<li class="active"><a href="#">{{__('message.Home')}}</a>
									
									</li>
									<li><a  href="#AboutUs">{{__('message.About')}}</a></li>	
									
									<li ><a href="#Mindest">{{__('message.How')}}</a></li>
									<li ><a href="#WhyUs">{{__('message.WhyUs')}}</a></li>
									<li ><a href="#Services">{{__('message.OurServices')}}</a></li>
						
									
{{-- 									
									<li ><a href="#contact">{{__('message.contact')}}</a> --}}
								</ul>
								<!-- End Main Menu -->
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-lg-3 col-md-8 col-8">
					<div class="header-details">
						<ul class="header-details-inner list-none">
							<li class="search-list"><a href="#" class="searchBoxTggler"><i class="fa fa-search"></i></a></li>
							<li class="t-border-line"><a href="login.html">Login</a></li>
							<li><a href="signup.html">Sign Up</a></li>
						</ul>
					</div>
				</div> --}}
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Hero Area -->
	<section class="hero-style2">
		<div class="hero-style2-slider">
			<!-- Single Slider -->
			<div class="single-hero2-slider" style="background-image:url('img/hero-slider/03.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-12">
							<!-- Hero Content -->
							<div class="hero2-slider-content">
								<span>{{__('message.safty1')}}...</span>
								<h1 class="hero-title">{{__('message.safty2')}}</h1>
								<p class="mb-0">
									{{__('message.safty3')}}</p>
								<div class="hero-content-btn">
									
									<a href="tel:+971501601473" class="theme-btn">
										
										{{__('message.Call_Now')}}
										<i class="fa fa-phone" aria-hidden="true"></i>
									</a>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single Slider -->
			<div class="single-hero2-slider" style="background-image:url('img/hero-slider/034.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-12">
							<!-- Hero Content -->
							<div class="hero2-slider-content">
								<span>{{__('message.maintenance1')}}...</span>
								<h1 class="hero-title">{{__('message.maintenance2')}}</h1>
								<p class="mb-0">
									{{__('message.maintenance3')}}</p>
								<div class="hero-content-btn">
									
									<a href="tel:+971501601473" class="theme-btn">
										
										{{__('message.Call_Now')}}
										<i class="fa fa-phone" aria-hidden="true"></i>
									</a>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single Slider -->
			<div class="single-hero2-slider" style="background-image:url('img/hero-slider/035.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-7 col-12">
							<!-- Hero Content -->
							<div class="hero2-slider-content">
								<span>{{__('message.team1')}}...</span>
								<h1 class="hero-title">{{__('message.team2')}}</h1>
								<p class="mb-0">
									{{__('message.team3')}}</p>
								<div class="hero-content-btn">
									
									<a href="tel:+971501601473" class="theme-btn">
										
										{{__('message.Call_Now')}}
										<i class="fa fa-phone" aria-hidden="true"></i>
									</a>
										
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slider -->
		</div>
	</section>
	<!-- End Hero Area -->

	<!-- About Us Area -->
	<section class="aboutus-area section-padding"  id="AboutUs">
		<div class="container">
			<div class="row g-0 align-items-center">
				<div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="200">	
					<!-- About Image -->
					<div class="aboutus-img">
						<img src="img/about-img.jpg" alt="#">
						<div class="about-years">
							<h1 class="a-years-title"><span class="counter">5</span>+</h1>
							<p class="m-0">{{__('message.Years_Experience')}} </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="300">
					<!-- About Content -->
					<div class="aboutus-content">
						<div class="about-top-content">
							<span class="small-title">{{__('message.About')}}</span>
							<h2 class="about-title hs-1">{{__('message.magic_hand')}}
								<span class="theme-color">{{__('message.magic_hand_slug')}}</span></h2>
							<p  class="mb-0">
								{{__('message.aboutP')}}
							</p>
						</div>
						<!-- About Us Contact -->
						<div class="aboutus-contact">
							<div class="s-aboutus-contact">
								<i class="fa fa-phone-volume"></i>
								<div class="aboutus-c-content">
									<span>{{__('message.Call_Us')}}</span>
									<p class="m-0">+971501601473</p>
								</div>
							</div>
							<div class="s-aboutus-contact">
								<i class="fa fa-envelope"></i>
								<div class="aboutus-c-content">
									<span>{{__('message.mail_us')}}</span>
									<p class="m-0">info@magichand.ae</p>
								</div>
							</div>
						</div>
						<!-- About Us Author -->
						<div class="about-author">
							<img src="img/about/04.png" alt="#">
							<div class="a-author-content">
								<p class="a-author-title"><a href="agents-details.html">Omar</a></p>
								<span>Co-Founder</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Us Area -->


	<section class="mindset-area section-padding" id="Mindest">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
					<div class="section-title">
						<span class="sub-heading">{{__('message.Find_out')}} </span>
						<h2 class="heading-title">{{__('message.How')}}</h2>
						<p>
							{{__('message.mindsetP')}}
							
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="mindset-slider" data-aos="fade-up" data-aos-delay="200">
						<!-- Single Mindset -->
						<div class="single-mindset">
							<div class="mindset-icon">
								<i class=" fa fa-trophy"></i>
							</div>
							<div class="s-mindset-content">
								<h3 class="mindset-c-title"> {{__('message.Mission')}}</h3>
								<p class="m-0">
									{{__('message.MissionP')}}
								</p>
							</div>
						</div>
						<!-- Single Mindset -->
						<div class="single-mindset">
							<div class="mindset-icon">
								<i class=" fa fa-eye"></i>
							</div>
							<div class="s-mindset-content">
								<h3 class="mindset-c-title">{{__('message.Vision')}}</h3>
								<p class="m-0">
									{{__('message.visionP')}}
								</p>
							</div>
						</div>
						<!-- Single Mindset -->
						<div class="single-mindset">
							<div class="mindset-icon">
								<i class=" fa fa-crosshairs"></i>
							</div>
							<div class="s-mindset-content">
								<h3 class="mindset-c-title">{{__('message.goals')}}</h3>
								<p class="m-0">
									{{__('message.goalsP')}}</p>
							</div>
						</div>
			
				</div>
			</div>
		</div>
	</section>

	<!-- Why Choose Area -->
	<section class="why-choose-area section-padding" id="WhyUs">
		<div class="why-choose-bg" style="background-image:url('img/why-choose-bg.jpg');"></div>
		<div class="container why-max-width">
			<div class="row g-0">
				<div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="200">
					<!-- Why Choose Slider -->
					<div class="why-choose-slider">
						<div class="single-choose-slider">
							<img src="img/why-choose-1.jpg" alt="#">
						</div>
						<div class="single-choose-slider">
							<img src="img/why-choose-2.jpg" alt="#">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="300">
					<!-- Faq Area -->
					<div class="faq-inner home">
						<div class="faq-top-content">
							<span class="small-title">{{__('message.Best_Services')}}</span>
							<h1 class="p-title m-0">{{__('message.Why_Choose_Us')}}</h1>
						</div>
						
						<div class="faq-main-content">
							<div class="accordion" id="accordionExample">
								<!-- Single Faq -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<span>{{__('message.qTitle1')}}</span>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="m-0">
												{{__('message.q1')}}
											</p>
										</div>
									</div>
								</div>
								<!-- Single Faq -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<span>{{__('message.qTitle2')}}</span>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="m-0">
												{{__('message.q2')}}
										</p>
										</div>
									</div>
								</div>
								<!-- Single Faq -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<span>{{__('message.qTitle3')}}</span>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="m-0">
												{{__('message.q3')}}
											</p>
											</div>
									</div>
								</div>
								<!-- Single Faq -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<span>{{__('message.qTitle4')}}</span>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="m-0">
												{{__('message.q4')}}

											</p>							
														</div>
									</div>
								</div>
								<!-- End Single Faq -->
							</div>
						</div>
					</div>
					<!-- End Faq Area -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Why Choose Area -->

	<!-- Property Option Area -->
	<section class="property-option-area p-top-110 p-btm-260">
		<div class="container">
			<div class="row g-0 justify-content-between">
				<div class="col-lg-4 col-xl-auto col-md-4 col-12" data-aos="fade-up" data-aos-delay="100">
					<!-- Single Option -->
					<div class="single-p-option">
						<i class="fa fa-cogs"></i>
						<div class="p-option-content">

						
							<h3 class="option-c-title">	{{__('message.Quality')}}</h3>
					
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-auto col-md-4 col-12" data-aos="fade-up" data-aos-delay="200">
					<!-- Single Option -->
					<div class="single-p-option">
						<i class="fas fa-headset"></i>
						<div class="p-option-content">
							<h3 class="option-c-title">{{__('message.Support')}}</h3>
				
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-auto col-md-4 col-12" data-aos="fade-up" data-aos-delay="300">
					<!-- Single Option -->
					<div class="single-p-option">
						<i class="fas fa-award"></i>
						<div class="p-option-content">
							<h3 class="option-c-title">{{__('message.Customer')}}</h3>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Property Option Area -->

	<!-- Popular Property Area -->
	<section class="popular-property-area p-btm-150" id="Services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="popular-property-inner">
						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
								<div class="section-title">
									<span class="sub-heading">{{__('message.OurServices')}}</span>
									<h2 class="heading-title">{{__('message.OurServices')}}</h2>
									<p>{{__('message.MissionP')}}</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="popular-p-slider">
									<!-- Single Slider -->
									<div class="single-popular-slider-main">
										<div class="single-popular-slider">
											<div class="popular-slider-img">
												<img src="img/popular-property/01.jpg" alt="#">
											</div>
											<h4 class="s-popular-content m-0"> {{__('message.installation')}}</h4>
										</div>
									</div>
									<!-- Single Slider -->
									<div class="single-popular-slider-main">
										<div class="single-popular-slider">
											<div class="popular-slider-img">
												<img src="img/popular-property/02.jpg" alt="#">
											</div>
											<h4 class="s-popular-content m-0"> {{__('message.supply')}}</h4>
										</div>
									</div>
									<!-- Single Slider -->
									<div class="single-popular-slider-main">
										<div class="single-popular-slider">
											<div class="popular-slider-img">
												<img src="img/popular-property/03.jpg" alt="#">
											</div>
											<h4 class="s-popular-content m-0">{{__('message.maintenance')}}</h4>
										</div>
									</div>
									<!-- Single Slider -->
									<div class="single-popular-slider-main">
										<div class="single-popular-slider">
											<div class="popular-slider-img">
												<img src="img/popular-property/04.jpg" alt="#">
											</div>
											<h4 class="s-popular-content m-0">{{__('message.Cleaning')}}</h4>
										</div>
									</div>
									<!-- End Single Slider -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Popular Property Area -->


	<!-- End Blog Area -->

	<!-- Footer Area -->
	<footer class="footer-area" >
		<div class="footer-top" style="background-image:url('img/footer-bg.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- Footer Inner -->
						<div class="footer-card-inner">
							<div class="row">
								<div class="col-lg-4 col-12">
									<!-- Single Widget -->
									<div class="single-f-widget">
										<h3 class="widget_title">{{__('message.About')}}</h3>
										<p class="mb-0">
											{{__('message.aboutP')}}</p>
										<ul class="footer-social list-none">
											<li class="active"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-12">
									<!-- Single Widget -->
									<div class="single-f-widget f-services-widget">
										<h3 class="widget_title">{{__('message.OurServices')}}</h3>
										<ul class="footer-services list-none">
											<li><a  href="#AboutUs">{{__('message.About')}}</a></li>	
									
											<li ><a href="#Mindest">{{__('message.How')}}</a></li>
											<li ><a href="#WhyUs">{{__('message.WhyUs')}}</a></li>
											<li ><a href="#Services">{{__('message.OurServices')}}</a></li>
										</ul>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12">
<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CaHXkfQobV2/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CaHXkfQobV2/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CaHXkfQobV2/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by magic hand (@magichand160)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>								</div>
							</div>
						</div>
						<!-- End Footer Inner -->
					</div>
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="mb-0">© 2022  By <a href="https://twitter.com/MohabTarig">mohab tarig</a>. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	
    <a href="https://wa.me/00971501601473" class=" rounde-circle scrollToTop">
        <i class="fab fa-whatsapp" style="font-size:30px;color:rgb(255, 255, 255)"></i>
	</a>
	<!-- Jquery JS -->
	<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('js/jquery-migrate.js')}}"></script>
	<script src="{{ URL::asset('js/jquery-ui.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
	<!-- Maginific Popup JS -->
	<script src="{{ URL::asset('js/magnific-popup.min.js')}}"></script>
	<!-- Aos JS -->
	<script src="{{ URL::asset('js/aos.min.js')}}"></script>
	<!-- Cube Portfolio JS -->
	<script src="{{ URL::asset('js/cube-portfolio.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{ URL::asset('js/easing.min.js')}}"></script>
	<!-- Slickslider JS -->
	<script src="{{ URL::asset('js/slickslider.min.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ URL::asset('js/waypoints.min.js')}}"></script>
	<!-- Counterup JS -->
	<script src="{{ URL::asset('js/jquery.counterup.min.js')}}"></script>
	<!-- Bx Slider JS -->
	<script src="{{ URL::asset('js/bx-slider.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{ URL::asset('js/nice-select.min.js')}}"></script>
	<!-- Datepicker JS -->
	<script src="{{ URL::asset('js/datepicker.js')}}"></script>
	<!-- Main JS -->
	<script src="{{ URL::asset('js/active.js')}}"></script>

	<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


window.onload = function(){
        location.href=document.getElementById("selectbox").value;
    }  
		</script>

</body>

</html>