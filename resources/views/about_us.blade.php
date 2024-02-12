<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{config('app.name')}} | About Us</title>
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
	<section class="page-top-section set-bg" data-setbg="{{asset('landing_page/img/page-top-bg/1.jpg')}}">
		<div class="container">
			<h2>About us</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">About us</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- About Section end -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="{{asset('landing_page/img/about-img.jpg')}}" alt="">
				</div>
				<div class="col-lg-7">
					<div class="about-text">
						<h2>A team to help you</h2>
						<p>Welcome to Eliana CashXpress, a microfinance solutions for civil servants, private individuals, and auto loans. Our mission is to provide affordable and accessible financial services to people who are underserved by traditional banks and financial institutions.

							At Eliana CashXpress, we believe that access to credit should not be limited by factors such as income, credit score, or collateral. That's why we offer flexible loan products that cater to the unique needs of our clients. Whether you're a civil servant looking for a low-interest loan to finance a home renovation project, a private individual who needs a quick cash injection to cover unexpected expenses, or a car owner who wants to upgrade to a new vehicle, we've got you covered.
							
							.</p>
						<a href="{{'/'}}" class="site-btn">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section end -->

	<!-- Review Section end -->
	<section class="review-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-2">
				<h2>What Our Clients Say</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>I was impressed by the professionalism and friendliness of the staff at Eliana CashXpress. They helped me secure a loan for my business at a competitive rate, and the whole process was seamless and stress-free. I would definitely recommend their services to anyone in need of financial assistance.</p>
						<h6>Chanda Chewe <span></span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>I had a great experience with Eliana CashXpress. Their team was very understanding and flexible when I needed to adjust my loan repayment schedule. They truly care about their clients and go above and beyond to provide excellent customer service. Thank you for helping me achieve my financial goals!.</p>
						<h6>Mwansa Mwansa <span></span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>I was hesitant to apply for a loan at first, but Eliana CashXpress made the process so easy and transparent. They explained everything to me in detail and helped me choose the best loan product for my needs. I'm very happy with the rate and terms of my loan, and I would definitely use their services again in the future.</p>
						<h6>Victor Muma <span></span></h6>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="review-item">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>I've been a loyal customer of Eliana CashXpress for quite some months now. Their loan products are top-notch, and their customer service is exceptional. They truly care about their clients and always go the extra mile to ensure their satisfaction. Thank you for being a trusted partner in my financial journey!.</p>
						<h6>Benard Bwalya<span></span></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review Section end -->


	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<a href="" class="footer-logo">
			<h3><span style="color: white;">CASH</span><span style="color:red">XPRESS</span></h3>
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