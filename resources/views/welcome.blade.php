<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{config('app.name')}} | HOME</title>
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

	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="hs-text">
						<h2>Affordabe Loans</h2>
						<p>Payroll based Loans, Auto loans, Group Loans, Order Finance, Buy now Pay Later and Learn Now Pay Later.</p>
						<a href="#" class="site-btn sb-dark">Get Started</a>
					</div>
				</div>





<!--Loan Calculator For starter pack starts Here-->
				<div id="starter-pack" class="col-lg-7">
					
					<form class="hero-form">
						
				<!--Loan tabs starts here -->  
				
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" onclick="starter_pack();" href="javascript:void(0)"><strong>CIVIL SERVANTS</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="private_sector();" href="javascript:void(0)"><strong>PRIVATE SECTOR</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="auto_loan();" href="javascript:void(0)"><strong>AUTO LOAN</strong></a>
  </li>
  <!--
  <li class="nav-item">
    <a class="nav-link" onclick="group_loan();" href="javascript:void(0)"><strong>GROUP LOAN</strong></a>
  </li>
-->
</ul>

<hr>

				<!--Loan tabs ends here-->



					<h5 style="color: white;font-weight: bold;">CIVIL SERVANTS (STARTER PACK)</h5>	
					
<hr style="background-color: rgb(124, 117, 117);">
<!--Amount output-->
<div style="color: white;">How much would you like?</div>
<br>
        <div style="font-weight:bold; color:white">K @{{amountoutput}}</div>
        <!--Amount Input-->
        <div class="slidecontainer">
          <input v-model="amountoutput" step="100" type="range" min="200" max="1000" value="500" class="slider" >
          </div>
          
        <!--Period Input-->
		<div style="color: white;">For how long ?</div>
		<hr>
        <div style="font-weight:bold; color: white;">@{{periodoutput}} Month(s)</div>
        <!--Period Output-->
         <div class="slidecontainer">
          <input v-model="periodoutput" type="range" min="1" max="6" value="2" class="slider">
          </div>
        
<hr>
						<!--Loan Calculator Ends-->

<!--Results amortisation-->	
		
		<!--Amount to Pay-->
		<div style="color: white;font-family:cursive;">Interest Amount : K @{{InterestAmount}}</div>
		
		 <!-- Service Fee -->
	  
		 <div style="color: aliceblue; font-family:cursive;">Service Fee : K 100 </div>
		<!--Amount to pay -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Total Amount To Pay : K @{{amountToPay}}</div>

	   <!-- EMI -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Equated monthly installment (EMI) : K @{{monthly}}</div>
			<hr>		   
		
<hr>
		<!--End results amortisation-->

        
  
  <span style="color:white"> By clicking on 'Apply for a loan now!' and/or proceeding with this Loan, you have read and accept our <a href="" data-toggle="modal" data-target="#termsPayroll"> terms and conditions</a></span>
  <br><br>
		

        
						<button class="site-btn"><a href="{{'payroll'}}" style="color:white">Apply for a loan now!</a></button>
					</form>
				</div>
			
		
<!--End results amortisation - starter pack-->






<!--Loan Calculator For term loan starts Here-->
<div id="private-sector" style="display: none;" class="col-lg-7">
					
					<form class="hero-form">
						
				<!--Loan tabs starts here -->  
				
				<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" onclick="starter_pack();" href="javascript:void(0)"><strong>CIVIL SERVANTS</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" onclick="private_sector();" href="javascript:void(0)"><strong>PRIVATE SECTOR</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="auto_loan();" href="javascript:void(0)"><strong>AUTO LOAN</strong></a>
  </li>
  <!--
  <li class="nav-item">
    <a class="nav-link" onclick="group_loan();" href="javascript:void(0)"><strong>GROUP LOAN</strong></a>
  </li>
-->
</ul>

<hr>

				<!--Loan tabs ends here-->



<h5 style="color: white;font-weight: bold;">PRIVATE SECTOR</h5>	
					
<hr style="background-color: rgb(124, 117, 117);">
<!--Amount output-->
<div style="color: white;">How much would you like?</div>
<br>
        <div style="font-weight:bold; color:white">K @{{amountoutput}}</div>
        <!--Amount Input-->
        <div class="slidecontainer">
          <input v-model="amountoutput" step="100" type="range" min="200" max="1000" value="500" class="slider" >
          </div>
          
        <!--Period Input-->
		<div style="color: white;">For how long ?</div>
		<hr>
        <div style="font-weight:bold; color: white;">@{{periodoutput}} Month(s)</div>
        <!--Period Output-->
         <div class="slidecontainer">
          <input v-model="periodoutput" type="range" min="1" max="6" value="3" class="slider">
          </div>
        
<hr>
						<!--Loan Calculator Ends-->

<!--Results amortisation-->	
		
		<!--Amount to Pay-->
		<div style="color: white;font-family:cursive;">Interest Amount : K @{{InterestAmount}}</div>
		 <!-- Service Fee -->
	  
		 <div style="color: aliceblue; font-family:cursive;">Service Fee : K 100 </div>
		
		<!--Amount to pay -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Total Amount To Pay : K @{{amountToPay}}</div>

	   <!-- EMI -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Equated monthly installment (EMI) : K @{{monthly}}</div>
			<hr>		   
		
<hr>
		<!--End results amortisation-->
		<span style="color:white"> By clicking on 'Apply for a loan now!' and/or proceeding with this Loan, you have read and accept our <a href="" data-toggle="modal" data-target="#termsPrivate"> terms and conditions</a></span>
  <br><br>				
						<button class="site-btn"><a href="{{'private_sector'}}" style="color:white">Apply for a loan now!</a></button>
					</form>
				</div>
			
		
<!--End results amortisation - term loan-->









<!--Loan Calculator For auto loan starts Here-->
<div id="auto-loan" style="display: none;" class="col-lg-7">
					
					<form class="hero-form">
						
				<!--Loan tabs starts here -->  
				
				<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" onclick="starter_pack();" href="javascript:void(0)"><strong>CIVIL SERVANTS</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="private_sector();" href="javascript:void(0)"><strong>PRIVATE SECTOR</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" onclick="auto_loan();" href="javascript:void(0)"><strong>AUTO LOAN</strong></a>
  </li>
  <!--
  <li class="nav-item">
    <a class="nav-link" onclick="group_loan();" href="javascript:void(0)"><strong>GROUP LOAN</strong></a>
  </li>
-->
</ul>

<hr>

				<!--Loan tabs ends here-->



<h5 style="color: white;font-weight: bold;">Auto Loan</h5>	
					
<hr style="background-color: rgb(124, 117, 117);">
<!--Amount output-->
<div style="color: white;">How much would you like?</div>
<br>
        <div style="font-weight:bold; color:white">K @{{amountoutput}}</div>
        <!--Amount Input-->
        <div class="slidecontainer">
          <input v-model="amountoutput" step="1000" type="range" min="6000" max="25000" value="7000" class="slider" >
          </div>
          
        <!--Period Input-->
		<div style="color: white;">For how long ?</div>
		<hr>
        <div style="font-weight:bold; color: white;">@{{periodoutput}} Month(s)</div>
        <!--Period Output-->
         <div class="slidecontainer">
          <input v-model="periodoutput" type="range" min="1" max="6" value="4" class="slider">
          </div>
        
<hr>
						<!--Loan Calculator Ends-->

<!--Results amortisation-->	
		
		<!--Amount to Pay-->
		<div style="color: white;font-family:cursive;">Interest Amount : K @{{InterestAmount}}</div>
		
		
		<!--Amount to pay -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Total Amount To Pay : K @{{amountToPay}}</div>

	   <!-- EMI -->
	  
	   <div style="color: aliceblue; font-family:cursive;">Equated monthly installment (EMI) : K @{{monthly}}</div>
			<hr>		   
		
<hr>
		<!--End results amortisation-->
		<span style="color:white"> By clicking on 'Apply for a loan now!' and/or proceeding with this Loan, you have read and accept our <a href="" data-toggle="modal" data-target="#termsAuto"> terms and conditions</a></span>
  <br><br>		
						<button class="site-btn"><a href="{{'auto'}}" style="color:white">Apply for a loan now!</a></button>
					</form>
				</div>
			
		
<!--End results amortisation - auto loan-->












<!--
<div id="group-loan" style="display: none;" class="col-lg-7">
					
					<form class="hero-form">
						
				  
				
				<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link" onclick="starter_pack();" href="javascript:void(0)"><strong>CIVIL SERVENTS</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="term_loan();" href="javascript:void(0)"><strong>PRIVATE SECTOR</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="auto_loan();" href="javascript:void(0)"><strong>AUTO LOAN</strong></a>
  </li>
  -
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" onclick="group_loan();" href="javascript:void(0)"><strong>GROUP LOAN</strong></a>
  </li>
</ul>

<hr>

				


<h5 style="color: white;font-weight: bold;">GROUP LOAN CALCULATOR</h5>	
					
<hr style="background-color: rgb(124, 117, 117);">

<div style="color: white;">How much would you like?</div>
<br>
        <div style="font-weight:bold; color:white">K @{{amountoutput}}</div>
        
        <div class="slidecontainer">
          <input v-model="amountoutput" step="1000" type="range" min="6000" max="25000" value="7000" class="slider" >
          </div>
          

		  <div style="color: white;">How many are you in your Group?</div>
<br>
        <div style="font-weight:bold; color:white"> @{{group_number}}</div>
        
        <div class="slidecontainer">
          <input v-model="group_number" step="1" type="range" min="2" max="5" value="2" class="slider" >
          </div>
          



       
		<div style="color: white;">For how long ?</div>
		<hr>
        <div style="font-weight:bold; color: white;">4 Weeks</div>
        
         <div class="slidecontainer">
          <input type="range" min="4" max="4" value="4" class="slider">
          </div>
        
<hr>
						

		
		
		<div style="color: white;font-family:cursive;">Interest Amount : K @{{InterestAmount}}</div>
		
		
		
	  
	   <div style="color: aliceblue; font-family:cursive;">Total Amount To Pay : K @{{amountToPay}}</div>

	   
	  
	   <div style="color: aliceblue; font-family:cursive;">Equated <strong>Weekly</strong> installment (EWI) : K @{{weekly}}</div>
			<hr>		   
		
<hr>
		
						
						<button class="site-btn"><a href="https://backend.elianacashxpress.com/auto" style="color:white">Apply for a loan now!</a></button>
					</form>
				</div>
			
		
-->









<script> 
function starter_pack(){
	document.getElementById('starter-pack').style.display="block";
	document.getElementById('private-sector').style.display="none";
	document.getElementById('auto-loan').style.display="none";
	//document.getElementById('group-loan').style.display="none";
}

function private_sector(){
	document.getElementById('starter-pack').style.display="none";
	document.getElementById('private-sector').style.display="block";
	document.getElementById('auto-loan').style.display="none";
	//document.getElementById('group-loan').style.display="none";
}

function auto_loan(){
	document.getElementById('starter-pack').style.display="none";
	document.getElementById('private-sector').style.display="none";
	document.getElementById('auto-loan').style.display="block";
	//document.getElementById('group-loan').style.display="none";
}

function group_loan(){
	document.getElementById('starter-pack').style.display="none";
	document.getElementById('private-sector').style.display="none";
	document.getElementById('auto-loan').style.display="none";
	//document.getElementById('group-loan').style.display="block";
}

</script>




















			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{asset('landing_page/img/hero-slider/1.jpg')}}"></div>
			<div class="hs-item set-bg" data-setbg="{{asset('landing_page/img/hero-slider/2.jpg')}}"></div>
			<div class="hs-item set-bg" data-setbg="{{asset('landing_page/img/hero-slider/3.jpg')}}"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad">
		<div class="container">
			<div class="text-center mb-5 pb-4">
				<h2>Why Choose us?</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-012-24-hours"></i>
						</div>
						<div class="ib-text">
							<h5>Money in 1 Hour!</h5>
							<p>All it takes is a few minutes. We’re fast, easy and headache-free. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="fa fa-money"></i>
						</div>
						<div class="ib-text">
							<h5>Deposit to Your Account</h5>
							<p>Once your Loan is approved funds are deposited electronically into your account!</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="ib-text">
							<h5>Apply Now</h5>
							<p>Complete our easy online application. It takes 5 minutes and there is no paperwork. Fully automated!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-3">
				<a href="#" class="site-btn sb-big" >Get Started!</a>
			</div>
		</div>
	</section>
	<!-- Why Section end -->


	<!-- CTA Section end -->
	<section class="cta-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container">
			<h2>Already have a <strong style="color:royalblue">CASHXPRESS</strong> Account?</h2>
			<h5>If you're returning client you just need to login and Apply.</h5>
			<a href="{{route('login')}}" class="site-btn sb-dark sb-big">Login</a>
		</div>
	</section>
	<!-- CTA Section end -->


	<!-- Feature Section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{asset('landing_page/img/feature-1.jpg')}}" alt="">
					</div>
					<div class="col-lg-6">
						<div class="feature-text">
							<h2>Getting Your Loan</h2>
							<p>The process of applying for an instant cash loan is completely digital. All you have to do is click on 'Get Started' for the first time client and create a profile or click on 'Login' for returning client to login to your profile.
						<br>Upload all the necessary documents and select the loan amount and tenure. The company will review your documents and if they are found to be perfect, the loan amount will be disbursed to your bank account as soon as possible.</p>
							<a href="#" class="readmore">Get Started<img src="{{asset('landing_page/img/arrow.png')}}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-item">
				<div class="row">
					<div class="col-lg-6 order-lg-2">
						<img src="{{asset('landing_page/img/feature-2.jpg')}}" alt="">
					</div>
					<div class="col-lg-6 order-lg-1">
						<div class="feature-text">
							<h2>Get approved in minutes after you apply online</h2>
							<p>You will get a quick loan approval decision through your portal and your email address which you used for creating your account on our system, so there is no wait for an answer.</p>
							<a href="#" class="readmore">Login<img src="{{asset('landing_page/img/arrow.png')}}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature Section end -->


	<!-- 
	<section class="help-section spad">
		<div class="container">
			<div class="text-center text-white mb-5 pb-4">
				<h2>How a personal loan can help</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec.</p>
				</div>
				<div class="col-md-6">
					<p>Sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="help-list">
						<li>Buying a car</li>
						<li>Take control of your finances</li>
						<li>Pay school tuitions</li>
						<li>Adding value to your home</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Increese your budget</li>
						<li>Have a day to remember</li>
						<li>Get a new card</li>
						<li>Go on a holliday</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="help-list">
						<li>Get an Insurance</li>
						<li>Take a trip</li>
						<li>Help your kids</li>
						<li>Renovate your home</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	 -->


	<!-- Info Section -->
	<section class="info-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="{{asset('landing_page/img/info-img.jpg')}}" alt="">
				</div>
				<div class="col-lg-7">
					<div class="info-text">
						<h2>We’re here to help</h2>
						<h5>Monday to Friday (8am to 5pm)<!-- and Friday (8am to 5pm)-->.</h5>
						<!--
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
-->
													<ul>
							<li style="color:royalblue">+26 0972960400</li>
							<li style="color:royalblue">info@elianacashxpress.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Info Section end -->

	<!-- 
	<section class="score-section text-white set-bg" data-setbg="img/score-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8">
					<h2>Calculate my Score</h2>
					<h4>Check your credit reports as often as you want, it won't affect your scores.</h4>
					<a href="#" class="site-btn sb-big">show my score</a>
				</div>
			</div>
			<img src="img/hand.png" alt="" class="hand-img">
		</div>
	</section>
	-->

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


<!---Terms and conditions for Payroll civil servants--> 
@include('LoanTerms.web_payroll')
<!---Terms and conditions for Private Sector--> 
@include('LoanTerms.web_private')
<!---Terms and conditions for Auto--> 
@include('LoanTerms.web_auto')



	
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