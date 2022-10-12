<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmlguru.net/intimate/assets/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 18:45:35 GMT -->
<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Specific Meta
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="CTHostel Services" />
	<meta name="keywords"
		content="CTHostel Services" />

	<!-- Titles
    ================================================== -->
	<title>CTHostel Service</title>

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="assets/images/bg/fav.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/bg/fav.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/bg/fav.png" />

	<!-- Custom Font
	================================================== -->
	<link
		href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
		rel="stylesheet">

	<!-- CSS
    ================================================== -->
	<link rel="stylesheet" href="{{asset('serviceasset/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="{{asset('serviceasset/css/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('serviceasset/css/simple-scrollbar.css')}}" />
	<link rel="stylesheet" href="{{asset('serviceasset/css/odometer-theme-default.css')}}" />
	<link rel="stylesheet" href="{{asset('serviceasset/css/fontawesome.all.min.css')}}" />
	<link rel="stylesheet" href="{{asset('serviceasset/css/style.css')}}" />

	<script src="{{asset('serviceasset/js/modernizr.min.js')}}"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navigation-area">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
		Start Site Header
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<header class="site-header default-header-style">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="navigation-area">
						<!-- Site Branding -->
						<div class="site-branding">
							<a href="/">
								<img src="{{asset('serviceasset/images/bg/logo.png')}}" style='height:30px;width:100px' alt="Site Logo" />
							</a>
						</div><!--  /.site-branding -->

						<!-- Site Navigation -->
						<div class="site-navigation">
							<nav class="navigation">
								<!-- Main Menu -->
								<div class="menu-wrapper">
									<div class="menu-content">
										<ul class="mainmenu">
											<li>
												<a class="nav-link" href="#hero-block">Home</a>
											</li>
											<li>
												<a class="nav-link" href="/services">Services</a>
											</li>
											<li>
												<a class="nav-link" href="#about-block">My Works</a>
											</li>
											
											<li>
												<a class="nav-link" href="#contact-block">Contact</a>
											</li>
										</ul> <!-- /.menu-list -->
									</div> <!-- /.hours-content-->
								</div><!-- /.menu-wrapper -->
							</nav>
						</div><!-- /.site-navigation -->
						<div class="hamburger-menus">
							<span></span>
							<span></span>
							<span></span>
						</div><!-- /.hamburger-menus -->
					</div><!-- /.navigation-area -->
				</div><!-- /.col-12 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<div class="mobile-sidebar-menu sidebar-menu">
			<div class="overlaybg"></div>
		</div>
	</header>
	<!--~~./ end site header ~~-->

	<!--********************************************************-->
	<!--********************* SITE CONTENT *********************-->
	<!--********************************************************-->
	<div class="site-content">
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Hero Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="hero-block" class="hero-block personal-home bg-image"
			style="background-image: url('serviceasset/images/bg/hero-bg-10.png');">
			<div id="particles-js"></div>
			<div class="waves-effect bottom" style="background-image: url('serviceasset/images/others/shape.png');">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="hero-content-area">
							<div class="hero-desc">
								Hello <span></span> I am an approved {{$agent->type}}
							</div>
							<h2 class="hero-title">
								 {{$agent->name}}
							</h2><!-- /.hero-title -->
							<!-- <ul class="hero-services">
								<li>Ux/UI Designed</li>
								<li>Developing</li>
								<li>Marketing</li>
							</ul> -->
							<a href="#" class="btn btn-primary" style='background-color:#003553'>My Works</a>
						</div><!-- /.hero-content-area -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.hero-block -->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Services Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--~~./ end services block ~~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start About Us Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="about-block" class="about-us-block pd-t-170">
			<div class="container container-1200">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2 class="title-main">
								01<span>About</span>
							</h2><!-- /.title-main -->
							<p class="sub-title">We work with you, Not for you</p>
						</div><!-- /.section-title -->
					</div><!-- /.col-lg-8 -->
				</div><!-- /.row -->

				<div class="row align-items-center flex-column-reverse flex-lg-row mrb-55">
					<div class="col-lg-6">
						<div class="about-content">
							<h3 class="heading">About Me</h3>
							<p class="description">I am a Dynamic Approved CTHostel Technician</p>
							
							
							
							<p>			
								I am a fully licensed Master {{$agent->type}} (Class A) with over 3 years’ experience as a residential {{$agent->type}} contractor. Apart from my technical skills, I am reliable, trustworthy, and punctual student of {{$agent->school->name}} in particular. I work with cthostel to deliver quality home service speedily and accurately. 
                              
												</p>
							<div class="author-sign">
								<img src="{{asset('serviceasset/images/bg/cthostelsign.png')}}" alt="Author Sign" />
							</div>
						</div><!-- /.about-content -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="mock-up-thumb">
							<img src="{{asset('serviceasset/images/about/engineer.png')}}" alt="About Mock" />
						</div><!-- /.mock-up-block -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->

			
			</div><!-- /.container -->
		</div>
		<!--~~./ end about us block ~~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Portfolio Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		
		<!--~~./ end portfolio block ~~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Testimonial Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="testimonial-block" class="testimonial-block pd-t-170">
			<div class="container container-1200">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2 class="title-main">
								02 <span>Testimonial</span>
							</h2><!-- /.title-main -->
							<p class="sub-title">People's  Comment about CTHostel Services</p>
						</div><!-- /.section-title -->
					</div><!-- /.col-lg-8 -->
				</div><!-- /.row -->

				<div class="row justify-content-center">
					<div class="col-lg-11">
						<!-- Testimonial Slider -->
						<div class="owl-carousel testimonial-slider carousel-nav-circle carousel-nav-center">
							<div class="testimonial-item">
								<div class="client-area">
									<div class="client-thumb">
										<img src="serviceasset/images/bg/boluwatife.jpg" alt="Boluwatife" />
									</div><!-- /.client-thumb -->
									<div class="client-info">
										<h4 class="client-name">Sotonwa Boluwatife</h4>
										<p class="client-designation">
											Student
										</p>
									</div><!-- /.client-info -->
								</div>
								<div class="details">
									<p>
										Every techinician at CTHostel service are well educated and are very honest
									</p>
								</div><!-- /.details -->
							</div><!-- /.testimonial-item -->
							<div class="testimonial-item">
								<div class="client-area">
									<div class="client-thumb">
										<img src="serviceasset/images/bg/khadjat.jfif" alt="Khadjat" />
									</div><!-- /.client-thumb -->
									<div class="client-info">
										<h4 class="client-name">Tajudeen Khadjat</h4>
										<p class="client-designation">
											Student
										</p>
									</div><!-- /.client-info -->
								</div>
								<div class="details">
									<p>
										When talking about speed and meeting target, I think they are the best, they respond to complains as
										fast as possible.
									</p>
								</div><!-- /.details -->
							</div><!-- /.testimonial-item -->
						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!--~~./ end testimonial block ~~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Latest News Block
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="blog-block" class="latest-news-block pd-t-170 pd-b-170">
			<div class="container container-1200 ml-b-30">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section-title text-center">
							<h2 class="title-main">
								03 <span>My Works</span>
							</h2><!-- /.title-main -->
							<p class="sub-title">List of my project/works done</p>
						</div><!-- /.section-title -->
					</div><!-- /.col-lg-8 -->
				</div><!-- /.row -->

				<div class="row latest-news-list gutters-30">
					@if($projects)
					@foreach($projects as $project)
					<div class="col-lg-4 col-md-6">
						<article class="post post-grid">
							<figure class="post-thumb">
								<a href="blog-single.html">
									<img src="{{asset('serviceasset/images/blog/grid/1.jpg')}}" alt="Blog Image" />
									
								</a>
							</figure><!-- /.post-thumb -->
							<div class="post-details">
								<div class="entry-meta">
									<div class="entry-date">Dec 25, 2021</div>
									<!--./ entry-date -->
									<div class="entry-category">
										<a class="cat" href="#">{{$project->title}}</a>
									</div>
									<!--./ entry-category -->
								</div><!-- /.entry-meta -->
								<h2 class="entry-title">
									<a href="single-post.html">{{$project->description}}</a>
								</h2><!-- /.entry-title -->
							</div><!-- /.post-details -->
						</article> <!-- /.post -->
					</div>
					@endforeach
					@else
					<h4>I don't have any work/project to show yet, you can check back or message me to know more about my works and projects I have worked on.</h4>
					@endif

				
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
		<!--~~./ end latest news block ~~-->



		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Site Footer
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<footer id="contact-block" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="contact-block">
							<div class="section-title">
								<h2 class="title-main">
									04 <span>Contact</span>
								</h2><!-- /.title-main -->
								<p class="sub-title">Don’t Hesitate To Contact With Us</p>
							</div><!-- /.section-title -->
							<div class="contact-form-area">
								<form id="contact_form" class="contact-form" action="#">
									<div class="row gx-4">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input id="name" name="name" type="text" class="form-control" placeholder="Your Name*">
											</div>
										</div>
										<!--./ col-lg-6-->
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input class="form-control" id="email" name="email" type="email" placeholder="Your Email*">
											</div>
										</div>
										<!--./ col-lg-6 -->
										<div class="col-12">
											<div class="form-group">
												<textarea id="message" name="message" class="form-control" rows="4"
													placeholder="Anything that we can help you?"></textarea>
											</div>
										</div><!-- /.col-12 -->
										<div class="col-12">
											<button type="submit" class="btn btn-primary">Send Me</button>
										</div>
										<!--./ col-lg-6 -->
									</div><!-- /.row -->
								</form><!-- /.contact-form -->
							</div><!-- /.contact-form-area -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-content-wrapper">
							<div class="footer-widget-area">
								<div class="row">
									<!--~~~~~ Start Widget Links ~~~~~-->
									<div class="col-lg-6 col-md-6">
										<aside class="widget widget_links">
											<h2 class="widget-title"><span>Quick Link</span></h2>
											<div class="widget-content">
												<ul>
													<li><a href="/egbamiregistration">Egbami Of CTHostel</a></li>
													<li><a href="/">Hostel Accomodation</a></li>
													<li><a href="/services">Services</a></li>
													<li><a href="/faq">faq</a></li>
												</ul>
											</div>
										</aside>
									</div>
									<!--~./ end links widget ~-->
									<!--~~~~~ Start Widget Links ~~~~~-->
									<div class="col-lg-6 col-md-6">
										<aside class="widget widget_contact">
											<div class="widget-content">
												<div class="single-contact-info">
													<div class="icon">
                                                      <a href="mailto:{{$agent->email}}"><i class="fas fa-envelope"></i></a>
													</div>
													<p><a href="mailto:{{$agent->email}}">{{$agent->email}}</a></p>
												</div><!-- /.single-contact-info -->
												<div class="single-contact-info">
													<div class="icon">
                                                      <a href='tel:{{$agent->phone}}'><i class="fas fa-phone-alt"></i></a>
													</div>
													<p>{{$agent->phone}}</p>
												</div><!-- /.single-contact-info -->
											</div>
										</aside>
									</div>
									<!--~./ end links widget ~-->
								</div>
							</div>
							<!--~./ end footer widgets area ~-->
							<div class="copyright-text text-center">
								<p>Copyright @ <a href="/">CTHOSTEL </a> 2021</p>
							</div>
							<!--~./ end copyright text ~-->
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--~./ end site footer ~-->
	</div>
	<!--~~./ end site content ~~-->

	<!-- All The JS Files
			================================================== -->
	<script src="{{asset('serviceasset/js/jquery.js')}}"></script>
	<script src="{{asset('serviceasset/js/popper.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/plugins.js')}}"></script>
	<script src="{{asset('serviceasset/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/simple-scrollbar.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/background-parallax.js')}}"></script>
	<script src="{{asset('serviceasset/js/theia-sticky-sidebar.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/ResizeSensor.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/packery-mode.pkgd.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/scrolla.jquery.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/odometer.min.js')}}"></script>
	<script src="{{asset('serviceasset/js/isInViewport.jquery.js')}}"></script>
	<script src="{{asset('serviceasset/js/contact.js')}}"></script>
	<script src="{{asset('serviceasset/js/main.js')}}"></script>
	<!-- main-js -->
</body>


<!-- Mirrored from htmlguru.net/intimate/assets/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Nov 2021 18:46:23 GMT -->
</html>