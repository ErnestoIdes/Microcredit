<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{config('app.name')}} | Contact Us</title>
	<meta charset="UTF-8">
	<meta name="description" content="Get affordable and accessible microfinance solutions. We offer low-interest loans for civil servants, private individuals, and auto loans. Our flexible loan products come with competitive rates and personalized customer service to help you achieve your financial goals. Apply online today!">
	<meta name="keywords" content="Micronfin,Loans,Civil servants loans,Private loans,Autoloans,Low interest rates,Financial services,Microfinance,Quick loans,Personal loans,Business loans,Flexible repayment plans,Fast approval,Customer service.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="{{asset('landing_page/img/apple-touch-icon.png')}}" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('landing_page/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('landing_page/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('landing_page/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('landing_page/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('landing_page/css/slicknav.min.css')}}"/>
	

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('landing_page/css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
@include('sweetalert::alert')





	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<a href="{{'/'}}" class="site-logo">
		<h3><span style="color: white;">CASH</span><span style="color:royalblue">XPRESS</span></h3>
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="{{'/'}}" class="active">Home</a></li>
				<li><a href="{{route('about_us')}}">About Us</a></li>
				
				<li><a href="{{route('login')}}">Login</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Call us now! </a>
				<div class="hr-btn hr-btn-2">+26 0972960400</div>
			</div>
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<section class="page-top-section set-bg" data-setbg="{{asset('landing_page/img/page-top-bg/4.jpg')}}">
		<div class="container">
			<h2>Contact</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">Contact</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Contact Section end -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="contact-text">
						<h2>Get in touch</h2>
						<p>We strive to respond to all inquiries within 24-48 hours, and we appreciate your patience and understanding as we work to assist you with your needs. Thank you for choosing Eliana CashXpress, and we look forward to hearing from you!. </p>
						<ul>
							<li><i class="flaticon-032-placeholder"></i>24/27 Manchinchi road, Behind Coptic Hospital, Northmead, Lusaka, Zambia</li>
							<li><i class="flaticon-029-telephone-1"></i>+260972960400</li>
							<li><i class="flaticon-025-arroba"></i>info@myeliana.com</li>
							<li><i class="flaticon-038-wall-clock"></i>Monday - Friday: 08:00 -17:00</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="contact-form" action="{{route('add_message')}}" method="post">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror" placeholder="Your Full Name">
							</div>
							@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

							<div class="col-md-6">
								<input type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="Your E-mail">
							</div>
							@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
							<div class="col-md-12">
								<input type="text" placeholder="Subject" value="{{ old('subject') }}" name="subject" class="@error('subject') is-invalid @enderror">
								@error('subject')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
								<textarea placeholder="Your Message" value="{{ old('message') }}" name="message" class="@error('message') is-invalid @enderror"></textarea>
								@error('message')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
								<button class="site-btn">send message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.833714262105!2d28.422800114759305!3d-15.425054489016502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19d8c75d679f7de5%3A0xd88e0c648a8d3116!2sManchinchi%20Rd%2C%20Lusaka%2C%20Zambia!5e0!3m2!1sen!2sus!4v1620947323705!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			
		</div>
	</section>
	<!-- Contact Section end -->







	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="" class="footer-logo">
			<h3><span style="color: white;">CASH</span><span style="color:royalblue">XPRESS</span></h3>
			</a>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<h2>What we do</h2>
						<ul>
							<li><a href="{{'payroll'}}">Civil Servants </a></li>
							<li><a href="{{'private_sector'}}">Private Sector</a></li>
							<li><a href="{{'auto'}}">Auto Loans</a></li>
							<li><a href="">Buy now Pay Later </a></li>
							<li><a href="">Learn Now Pay Later</a></li>
							<li><a href="">Order Finance</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<h2>Useful Links</h2>
						<ul>
							<li><a href="{{route('about_us')}}">About us</a></li>
							<li><a href="{{'/'}}">Get Started</a></li>
							<li><a href="{{route('login')}}">Login</a></li>
							<li><a target="_blank" href="https://myeliana.com">Our Company</a></li>
							<li><a target="_blank" href="https://myeliana-insurance-agency.myeliana.com/">Insurance</a></li>
							<li><a  target="_blank" href="https://elianaconnect.com">Softwares</a></li>
							
						</ul>
					</div>
				</div>
				<!--
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul>
					</div>
				</div>
-->
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget">
						<h2>Site Info</h2>
						<ul>
							<li><a href="mailto:info@elianacashxpress.com">Support</a></li>
							<li><a href="">FAQ</a></li>
							<li><a href="">Sitemap</a></li>
							<li><a href="">Privacy policy</a></li>
							<li><a href="{{route('contact')}}">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <strong>ELIANA-CASHXPRESS</strong>| This website is made powered by <a style="color:royalblue" href="https://elianaconnect.com" target="_blank">Elianaconnect</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('landing_page/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('landing_page/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('landing_page/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('landing_page/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('landing_page/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('landing_page/js/main.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="{{asset('landing_page/js/calculator.js')}}"></script>

	</body>
</html>