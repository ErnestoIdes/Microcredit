<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{config('app.name')}} | HOME</title>
	<meta charset="UTF-8">
	<meta name="description" content="Get accessible microfinance solutions. We offer low-interest loans. Our flexible loan products come with competitive rates and personalized customer service to help you achieve your financial goals. Apply online today!">
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
				<h3><span style="color: white;">CASH</span><span style="color:green;">Loan</span></h3>
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
					<div class="hr-btn hr-btn-2">+258 842982929</div>
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
							<h2>Loans</h2>
							<p>Get your loan in time.</p>
							<a href="#" class="site-btn sb-dark">Get Started</a>
						</div>
					</div>


					<!--Loan Calculator For starter pack starts Here-->
					<div id="starter-pack" class="col-lg-7">

						<form class="hero-form">

							<!--Loan tabs starts here -->  

							<ul class="nav nav-pills">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" onclick="starter_pack();" href="javascript:void(0)"><strong>Simulate</strong></a>
								</li>

							</ul>

							<hr>						

							<hr style="background-color: rgb(124, 117, 117);">
							<!--Amount output-->
							<div style="color: white;">How much would you like?</div>
							<br>
							<div style="font-weight:bold; color:white"> <label id="unputValueLabel">0</label> Mt</div>
							<!--Amount Input-->

							<div>
								<input id="amountinput" class="form-control" step="100"  min="200" value="10000" onkeyup="setinputValue();">
							</div>						

							<!-- <div class="slidecontainer">
								<input v-model="amountoutput" step="100" type="range" min="200" max="1000" value="500" class="slider" >
							</div> -->

					
							<div style="color: white;">For how long?</div>
							<hr>
							<div style="font-weight:bold; color: white;"><label id="monthinput">1</label> Month(s)</div>
							<!--Period Output-->
						<!-- 	<div class="slidecontainer">
								<input id="periodoutput" onchange="setinputValue()" type="range" max="{{$rates[count($rates)-1]->quant_month}}"  min="1" value="3" class="slider">
							</div> -->

							<select class="form-control" onchange="setinputValue()" value="" name="months" id="periodoutput" required>
									<option value=""></option>
									@foreach($rates as $r)
										<option value={{$r->rate}}> {{$r->quant_month}}</option>
									@endforeach									
							</select>

							<hr>
						
							<script type="text/javascript">
								function setinputValue(){
									amount=Number($("#amountinput").val());
									// monthinput=$("#periodoutput").val();
									monthinput=$("#periodoutput option:selected").text();
									credit_rate=$("#periodoutput").val();

									// alert(amountinput);
									$("#unputValueLabel").text(amount);
									$("#monthinput").text(monthinput);

									total_to_pay=Number(amount+(amount*(credit_rate/100)));

									// interestamount
									$("#interestamount").text(total_to_pay-amount);
									// total_to_pay
									$("#total_to_pay").text(total_to_pay);
									// monthamount
									$("#monthamount").text((total_to_pay/monthinput).toFixed(2));

								}
							</script>

							<!--Amount to Pay-->
							<div style="color: white;font-family:cursive;">Interest Amount : <label id="interestamount">0</label> Mt</div>
						
							<div style="color: aliceblue; font-family:cursive;">Total Amount To Pay : <label id="total_to_pay">0</label> Mt</div>

							<div style="color: aliceblue; font-family:cursive;">Equated monthly installment :  <label id="monthamount">0</label> Mt</div>
							<hr>		   

							<hr>
							<!--End results amortisation-->



							<span style="color:white"> By clicking on 'Apply for a loan now!' and/or proceeding with this Loan, you have read and accept our <a href="" data-toggle="modal" data-target="#termsPayroll"> terms and conditions</a></span>
							<br><br>



							<button class="site-btn"><a href="{{'payroll'}}" style="color:white">Request loan now!</a></button>
						</form>
					</div>


					<!--End results amortisation - starter pack-->




<!--End results amortisation - term loan-->
<script type="text/javascript">
	
					function calculateEMIPrivate() {
						
						var months=$("#months option:selected").text();
						var credit_rate=$("#months").val();
						var amount=Number($("#amount").val());

						$("#credit_rate").val(credit_rate);// setting value on the input

						// alert($months);
						total_to_pay=Number(amount+(amount*(credit_rate/100)))

						$("#amount_to_pay").empty();// setting value on the input
						$("#amount_to_pay").val(total_to_pay);// setting value on the input


						$("#parcels").empty();// setting value on the input
						parcel_value=total_to_pay/months;
						for (var i = 0; i < months; i++) {

							var date = new Date();
					    var dd = date.getDate();             
					    // var mm = date.getMonth() + (i+1);
					    var mm =  String(date.getMonth() + (i+2)).padStart(2, '0');
					    var yyyy = date.getFullYear();
					    var newDate = yyyy + '-' + mm + '-' + dd ;


							$("#parcels").append(`
								<div class="col-sm-6">
								<div class="form-group">
									<label for="parcel_amount">Amount - Parcel `+(i+1)+` </label>
									<input type="number" name="parcel_amount[]" value="`+(parcel_value.toFixed(2))+`" class="form-control"  id="parcel_amount" readonly>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="company_percentage">Due Date - Parcel `+(i+1)+` </label>
									<input type="date" name="parcel_date[]" value="`+newDate+`" class="form-control"  id="parcel_date">
								</div>
							</div>
							<div><hr style="box-shadow: 3px 10px 10px 5px lightblue;"></div>`);
							
						}		



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



<!-- Feature Section -->
<!-- <section class="feature-section spad">
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
	</section> -->
	<!-- Feature Section end -->



<!-- Info Section -->
<section class="info-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<img src="{{asset('landing_page/img/info-img.png')}}" alt="">
			</div>
			<div class="col-lg-7">
				<div class="info-text">
					<h2>We’re here to help</h2>
					<h5>Monday to Friday (8am to 5pm)<!-- and Friday (8am to 5pm)-->.</h5>
						<!--
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p>
												-->
												<ul>
													<li style="color:royalblue">+258 842983939</li>
													<li style="color:royalblue">neto.sima@gmail.com</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Info Section end -->

	
<!-- Footer Section -->
<footer class="footer-section">
	<div class="container">
		<a href="" class="footer-logo">
			<h3><span style="color: white;">CASH</span><span style="color:green">Loan</span></h3>
		</a>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="footer-widget">
					<h2>Useful Links</h2>
					<ul>
						<li><a href="{{route('about_us')}}">About us</a></li>
						<!-- <li><a href="{{'/'}}">Get Started</a></li> -->
						<li><a href="{{route('login')}}">Login</a></li>						
					</ul>
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="footer-widget">
					<h2>Site Info</h2>
					<ul>
						<li><a href="mailto:neto.sima@gmail.com">Support</a></li>
						<li><a href="">Privacy policy</a></li>
						<li><a href="{{route('contact')}}">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <strong>...</strong>| This website is made powered by <a style="color:royalblue" href="https://neto.com" target="_blank">Neto</a>
			</div>
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
	<!-- <script src="{{asset('landing_page/js/calculator.js')}}"></script> -->

</body>
</html>