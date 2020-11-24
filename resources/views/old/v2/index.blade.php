<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from pxltheme.com/html/bako/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 03:22:58 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Adityacprtm.</title>
	<meta name="description" content="Bako - Personal Portfolio & Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/old/v2/images/logo.png') }}">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/jquery.mCustomScrollbar.min.css') }}" type="text/css"
		media="all">
	<link rel="stylesheet" href="{{ asset('assets/old/v2/css/style.css') }}" type="text/css" media="all">

	<style>
		.float-back {
			position: fixed;
			width: 50px;
			height: 50px;
			bottom: 100px;
			right: 25px;
			background-color: rgb(0, 0, 0);
			color: #FFF;
			border-radius: 50px;
			text-align: center;
		}
	</style>

	<script data-ad-client="ca-pub-7614452738762603" async
		src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- preloader -->
	<div id="preloader">
		<div class="outer">
			<div class="spinner">
				<div class="dot1"></div>
				<div class="dot2"></div>
			</div>
		</div>
	</div>

	<!-- site wrapper -->
	<div class="site-wrapper">

		<!-- mobile header -->
		<div class="mobile-header py-2 px-3 mt-4">
			<button class="menu-icon mr-2">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<a href="/" class="logo"><img src="{{ asset('assets/old/v2/images/logo.png') }}" alt="Bako Doe" /></a>
			<a href="/" class="site-title dot ml-2">Adityacprtm</a>
		</div>

		<!-- header -->
		<header class="left float-left shadow-dark" id="header">
			<button type="button" class="close" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="header-inner d-flex align-items-start flex-column">
				<a href="/"><img src="{{ asset('assets/old/v2/images/logo.png') }}" alt="Bako Doe" width="70"
						height="70" /></a>
				<a href="/" class="site-title dot mt-3">Adityacprtm.</a>
				<span class="site-slogan">Tech Enthusiast</span>

				<!-- navigation menu -->
				<nav>
					<ul class="vertical-menu scrollspy">
						<li><a href="#home" class="active"><i class="icon-home"></i>Home</a></li>
						<li><a href="#about"><i class="icon-user"></i>About</a></li>
						<li><a href="#services"><i class="icon-bulb"></i>Services</a></li>
						<li><a href="#resume"><i class="icon-graduation"></i>Resume</a></li>
						{{-- <li><a href="#works"><i class="icon-grid"></i>Works</a></li> --}}
						{{-- <li><a href="#blog"><i class="icon-pencil"></i>Blog</a></li> --}}
						<li><a href="#contact"><i class="icon-phone"></i>Contact</a></li>
					</ul>
				</nav>

				<!-- footer -->
				<div class="footer mt-auto">

					<!-- social icons -->
					<ul class="social-icons list-inline">
						<li class="list-inline-item" title="Facebook"><a target="_blank"
								href="https://facebook.com/adityacprtm"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item" title="Twitter"><a target="_blank"
								href="https://twitter.com/adityacprtm"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item" title="Instagram"><a target="_blank"
								href="https://instagram.com/adityacprtm"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item" title="Linkedin"><a target="_blank"
								href="https://linkedin.com/in/adityacprtm"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="list-inline-item" title="Github"><a target="_blank"
								href="https://github.com/adityacprtm"><i class="fab fa-github"></i></a></li>
					</ul>

					<!-- dark mode button -->
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox" />
							<div class="slider round"></div>
						</label>
						<em class="align-middle"> &nbsp; Enable Dark Mode!</em>
					</div>

					<!-- copyright -->
					<span class="copyright">Configured with <i style="color: #FF5959" class="fas fa-heart"></i> at 2019 <br>
						by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></span>
				</div>
			</div>
		</header>

		<!-- main content area -->
		<main class="content float-right">

			<!-- section hero -->
			<section class="hero background parallax shadow-dark d-flex align-items-center" id="home"
				data-image-src="{{ asset('assets/old/v2/images/background-1.jpg') }}">
				<div class="cta mx-auto mt-2">
					{{-- <h1 class="mt-0 mb-4">I’m Bako Doe<span class="dot"></span></h1> --}}
					<h1 class="mt-0 mb-4 typewrite" data-period="2000"
						data-type='[ "Hello World!", "I Am Aditya.", "Hi, mbeb." ]'><span class="wrap"></span><span
							class="dot"></span></h1>
					<p class="mb-4">Just because something doesn’t do what you planned it to do doesn’t mean it’s useless.
						–Thomas Edison</p>
					<a href="#resume" class="btn btn-default btn-lg mr-3"><i class="icon-grid"></i>View Resume</a>
					<div class="spacer d-md-none d-lg-none d-sm-none" data-height="10"></div>
					<a target="_blank"
						href="mailto:adityacprtm[at]gmail[dot]com?body=PLEASE CHANGE RECIPIENT'S EMAIL WITH THE CORRECT SYMBOL!"
						class="btn btn-border-light btn-lg"><i class="icon-envelope"></i>Contact Me</a>
				</div>
				<div class="overlay"></div>
			</section>

			<!-- section about -->
			<section id="about" class="shadow-blue white-bg padding">
				<h3 class="section-title">About Me</h3>
				<div class="spacer" data-height="80"></div>

				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('assets/old/v2/images/about.png') }}" alt="about" />
					</div>
					<div class="col-md-9">
						<h2 class="mt-4 mt-md-0 mb-4">Hello,</h2>
						<p class="mb-0">I was Born in Pangkalan Bun, June 21, 1997 at 13:00. I live in Banjarbaru, South
							Kalimantan, Indonesia. Currently pursuing a bachelor's degree at the Faculty of Computer Science,
							Universitas Brawijaya focuses on Network Based Computing. Become one of the selected participants
							to take part in the Partner Certification of the DIGITALENT 2019 program implemented by the
							Ministry of Communication and Information.</p>
						<div class="row my-4">
							<div class="col-md-6">
								<p class="mb-2">Name: <span class="text-dark">Aditya Chamim Pratama</span></p>
								<p class="mb-0">Birthday: <span class="text-dark">21 June, 1997</span></p>
							</div>
							<div class="col-md-6 mt-2 mt-md-0 mt-sm-2">
								<p class="mb-2">Location: <span class="text-dark">Banjarbaru, ID</span></p>
								<p class="mb-0">Email: <span class="text-dark">adityacprtm[at]gmail[dot]com</span></p>
							</div>
						</div>
						<a target="_blank"
							href="https://adityacprtm-shared.s3-ap-southeast-1.amazonaws.com/pdf/Aditya_Pratama_CV.pdf"
							class="btn btn-default mr-3"><i class="icon-cloud-download"></i>Download CV</a>
						<a target="_blank"
							href="mailto:adityacprtm[at]gmail[dot]com?body=PLEASE CHANGE RECIPIENT'S EMAIL WITH THE CORRECT SYMBOL!"
							class="btn btn-alt mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>Contact me</a>
					</div>
				</div>
			</section>

			<!-- section skills -->
			<section id="skills" class="shadow-blue white-bg padding">
				<h3 class="section-title">My skills</h3>
				<div class="spacer" data-height="80"></div>

				<p class="mb-0">Don’t compare yourself with anyone in this world…if you do so, you are insulting yourself.
					<strong>-Bill Gates</strong></p>

				<div class="row mt-5">

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Amazon Web Service</h4>
								<span class="float-right">Intermediate</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="60">
								</div>
							</div>
							<div class="spacer" data-height="50"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Microsoft Office</h4>
								<span class="float-right">Expert</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="100">
								</div>
							</div>
							<div class="spacer" data-height="50"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Web Development</h4>
								<span class="float-right">Intermediate</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="60">
								</div>
							</div>
							<div class="spacer" data-height="50"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Computer Networking</h4>
								<span class="float-right">Intermediate</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="60">
								</div>
							</div>
							<div class="spacer" data-height="50"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Dota2</h4>
								<span class="float-right">Expert</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="100">
								</div>
							</div>
							<div class="spacer d-md-none d-lg-none" data-height="50"></div>
						</div>
					</div>

					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0">Futsal</h4>
								<span class="float-right">Expert</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"
									aria-valuenow="100">
								</div>
							</div>
							<div class="spacer d-md-none d-lg-none" data-height="50"></div>
						</div>
					</div>

				</div>
			</section>

			<!-- section facts -->
			<section id="facts" class="shadow-dark color-white background parallax padding-50"
				data-image-src="{{ asset('assets/old/v2/images/background-2.jpg') }}">

				<div class="row relative z-1">
					<div class="col-md-3 col-sm-6">
						<!-- fact item -->
						<div class="fact-item text-center">
							<i class="icon-like icon-circle"></i>
							<h2 id="count1" class="count">counting</h2>
							<span>Projects completed</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- fact item -->
						<div class="fact-item text-center">
							<i class="icon-cup icon-circle"></i>
							<h2 id="count2" class="count">counting</h2>
							<span>Cup of coffee</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- fact item -->
						<div class="fact-item text-center">
							<i class="icon-emotsmile icon-circle"></i>
							<h2 id="count3" class="count">counting</h2>
							<span>Happy customers</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<!-- fact item -->
						<div class="fact-item text-center">
							<i class="icon-trophy icon-circle"></i>
							<h2 id="count4" class="count">1</h2>
							<span>Certifications</span>
						</div>
					</div>
				</div>

				<div class="overlay"></div>

			</section>

			<!-- section services -->
			<section id="services" class="shadow-blue white-bg padding">
				<h3 class="section-title">What I'm Doing</h3>
				<div class="spacer" data-height="80"></div>

				<div class="row">

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-cloud icon-simple"></i>
							<h4 class="my-3">Cloud Computing</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
						<div class="spacer" data-height="20"></div>
					</div>

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-network-wired icon-simple"></i>
							<h4 class="my-3">Networking</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
						<div class="spacer" data-height="20"></div>
					</div>

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-laptop-code icon-simple"></i>
							<h4 class="my-3">Web Development</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
						<div class="spacer" data-height="20"></div>
					</div>

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-microchip icon-simple"></i>
							<h4 class="my-3">Internet of Things</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="20"></div>
					</div>

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-user-shield icon-simple"></i>
							<h4 class="my-3">Cyber Security</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="20"></div>
					</div>

					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="fa fa-user-edit icon-simple"></i>
							<h4 class="my-3">Coming Soon</h4>
							{{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetuer elit.</p> --}}
						</div>
					</div>

				</div>
			</section>

			<!-- section experience -->
			<section id="resume" class="shadow-blue white-bg padding">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Education</h3>
						<div class="spacer" data-height="80"></div>

						<!-- timeline -->
						<div class="timeline">
							<div class="entry">
								<div class="title">
									<span>2015 - 2020</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Bachelors Degree</h4>
									<p>Brawijaya University<br>Malang - Indonesia</p>
									{{-- <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget dolor aenean massa.</p> --}}
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2012 - 2015</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Senior High School</h4>
									<p>SMA N 1 Banjarbaru <br> Banjarbaru - Indonesia</p>
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2009 - 2012</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Junior High School</h4>
									<p>SMP N 1 Kuranji <br> Tanah Bumbu - Indonesia</p>
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2003 - 2009</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Elementary School</h4>
									<p>SD N 1 Mustika <br> Tanah Bumbu - Indonesia</p>
								</div>
							</div>
							<span class="timeline-line"></span>
						</div>
					</div>
					<div class="col-md-6">
						<h3 class="section-title">Experience</h3>
						<div class="spacer" data-height="80"></div>

						<!-- timeline -->
						<div class="timeline">
							<div class="entry">
								<div class="title">
									<span>2019</span>
								</div>
								<div class="body">
									<h4 class="mt-0">AWS Cloud Computing Training</h4>
									<p>Digital Talent Scholarship 2019</p>
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2017 - 2019</span>
								</div>
								<div class="body">
									<h4 class="mt-0 ml-0">Computer Network Practicum Assistant</h4>
									<p>Laboratory Learning FILKOM UB</p>
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2018</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Network Engineer (Internship)</h4>
									<p>NOC FIA UB</p>
								</div>
							</div>
							<div class="entry">
								<div class="title">
									<span>2017 - 2018</span>
								</div>
								<div class="body">
									<h4 class="mt-0">Social Community (SOSMA)</h4>
									<p>BEM FILKOM</p>
								</div>
							</div>
							<span class="timeline-line"></span>
						</div>
					</div>
				</div>
			</section>

			<!-- section clients -->
			<section id="clients" class="shadow-dark background-blue color-white padding-50">

				<!-- hidden heading for validation -->
				<h2 class="d-none">Clients</h2>

				<!-- clients wrapper -->
				<div class="clients-wrapper row">

					<div class="col-md-3">
						<!-- client item -->
						<div class="client-item">
							<div class="inner">
								<img src="{{ asset('assets/old/v2/images/clients/coming-soon.png') }}" alt="client-name" />
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<!-- client item -->
						<div class="client-item">
							<div class="inner">
								<img src="{{ asset('assets/old/v2/images/clients/coming-soon.png') }}" alt="client-name" />
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<!-- client item -->
						<div class="client-item">
							<div class="inner">
								<img src="{{ asset('assets/old/v2/images/clients/coming-soon.png') }}" alt="client-name" />
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<!-- client item -->
						<div class="client-item">
							<div class="inner">
								<img src="{{ asset('assets/old/v2/images/clients/coming-soon.png') }}" alt="client-name" />
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<!-- client item -->
						<div class="client-item">
							<div class="inner">
								<img src="{{ asset('assets/old/v2/images/clients/coming-soon.png') }}" alt="client-name" />
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- section contact -->
			<section id="contact" class="shadow-blue white-bg padding">
				<h3 class="section-title">Get in touch</h3>
				<div class="spacer" data-height="80"></div>

				<div class="row">

					<div class="col-md-4 mb-4 mb-md-0">
						<!-- contact info -->
						<div class="contact-info mb-5">
							<i class="icon-phone"></i>
							<div class="details">
								<h5>Phone</h5>
								<span>+62 81234034511</span>
							</div>
						</div>
						<div class="contact-info mb-5">
							<i class="icon-envelope"></i>
							<div class="details">
								<h5>Email address</h5>
								<span>adityacprtm@gmail.com</span>
							</div>
						</div>
						<div class="contact-info">
							<i class="icon-location-pin"></i>
							<div class="details">
								<h5>Location</h5>
								<span>Banjarbaru, ID</span>
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<!-- Contact Form -->
						<form id="contact-form" class="contact-form" method="post" action="">

							<div class="messages"></div>

							<div class="row">
								<div class="column col-md-6">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Your name"
											required="required" data-error="Name is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email"
											placeholder="Email address" required="required" data-error="Email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="column col-md-12">
									<!-- Email input -->
									<div class="form-group">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
											required="required" data-error="Subject is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="column col-md-12">
									<!-- Message textarea -->
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"
											required="required" data-error="Message is required."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="column col-md-12">
									<div class="g-recaptcha" data-sitekey="6Lf2DrYUAAAAAGrNQQHNaSUEW6YuzLCSPuRkMXwh"
										style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;">
									</div>
								</div>
							</div>

							<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default"><i
									class="icon-paper-plane"></i>Send Message</button><!-- Send Button -->

						</form>
						<!-- Contact Form end -->
					</div>

				</div>

			</section>

		</main>

	</div>

	<!-- Go to top button -->
	<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

	<a href="/" class="float-back" style="text-decoration: none" title="Back"><span
			style="font-size: 30px">&#8629;</span></a>

	<!-- SCRIPTS -->
	<script src="{{ asset('assets/old/v2/js/jquery-1.12.3.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/infinite-scroll.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/slick.min.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/contact.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/validator.js') }}"></script>
	<script src="{{ asset('assets/old/v2/js/custom.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>

</body>

<!-- Mirrored from pxltheme.com/html/bako/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 03:23:46 GMT -->

</html>