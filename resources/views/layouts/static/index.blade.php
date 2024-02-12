<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Get affordable and accessible microfinance solutions. We offer low-interest loans for civil servants, private individuals, and auto loans. Our flexible loan products come with competitive rates and personalized customer service to help you achieve your financial goals. Apply online today!">
	<meta name="keywords" content="Micronfin,Loans,Civil servants loans,Private loans,Autoloans,Low interest rates,Financial services,Microfinance,Quick loans,Personal loans,Business loans,Flexible repayment plans,Fast approval,Customer service.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Favicon -->
<link href="{{asset('landing_page/img/apple-touch-icon.png')}}" rel="shortcut icon"/>

<!--Fontawsome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--End fontawesome-->


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>{{ config('app.name') }}</title>

	<link href="{{asset('dashboardassets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	

</head>

<body>
@include('sweetalert::alert')
	<div class="wrapper">
	<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dashboard')}}">
          <span class="align-middle">Menu Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('dashboard')}}">
              <i class="fas fa-sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('customer_profile')}}">
              <i class="fas fa-user" ></i> <span class="align-middle" style="color:white">Personal Profile</span>
            </a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('loanapplication',encrypt(Auth::user()->employee_id))}}">
              <i class="fas fa-copy" ></i> <span class="align-middle" style="color:white">Loan Application</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('loan_history')}}">
              <i class="fas fa-file" ></i> <span class="align-middle" style="color:white">Loan History</span>
            </a>
					</li>
					

                   


					<li class="sidebar-item" >
						<a class="sidebar-link" href="{{route('settlement_forms')}}">
              <i class="fas fa-file" ></i> <span class="align-middle" style="color:white">Settlements</span>
            </a>
					</li>

				
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('collectionsView')}}">
              <i class="fas fa-credit-card" ></i> <span class="align-middle" style="color:white">Payments</span>
            </a>
					</li>



					

					

				
					

				
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('checkpayments')}}">
              <i class="fas fa-credit-card" ></i> <span class="align-middle" style="color:white">Transactions</span>
            </a>
					</li>

					
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Eliana CashXpress</strong>
						<div class="mb-3 text-sm">
						Our chatbot is designed to help you easily apply for a loan online. Whether you're a civil servant, private sector employee, or looking for an auto loan, our chatbot is here to guide you through the process!
						</div>
						<div class="d-grid">
							<a href="" class="btn btn-primary">ChatBot</a>
						</div>
					</div>
				</div>
			</div>
		</nav>


		<div class="main">
						<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
		

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						
						<li class="nav-item dropdown">
							
						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
						
							{{Auth::user()->name}} <i id="usericon" class="fas fa-user-shield" style="font-size:26px"></i>

							<img id="userprofile" src="{{asset('attatchments_loans/'.Auth::user()->profilepic)}}" style="width:30px; height:30px; border-radius:100%";/>
</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!--Profile Route-->
					<a href="{{route('customer_profile')}}" class="dropdown-item"><i class="align-middle me-1" data-feather="user" ></i>Personal profile</button>  
									 
									
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{route('customer_change_password')}}"><i class="align-middle me-1" data-feather="settings"></i>Change password</a>
								<hr>
								<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Hi <strong>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</strong> Welcome to the Clients Dashboard</h1>
					


					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row" >
													<div class="col mt-0">
														<h5 class="card-title">Loan Application.</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
														<i class="fas fa-sticky-note"></i>
														</div>
													</div>
												</div>
												<h4 class="mt-1 mb-3" style="font-weight: bold;"><a style="color:black" href="{{route('loanapplication',encrypt(Auth::user()->employee_id))}}">Apply Now</a></h4>
												
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>as low 6.69% Interest rate </span>
													<span class="text-muted">per month</span>
												</div>
											</div>
										</div>



<!--Check if the profile picture has been uploaded-->
<input type="hidden" value="{{Auth::user()->profilepic}}" id="profilepicture"/>





<script>




//Check if profile picture is present and hide the logo else show the logo
//if the profile picture is not uploaded yet
let profilepic = document.getElementById("profilepicture").value;
        if(profilepic.length >= 1){
            document.getElementById("usericon").style.display="none";	
           
        }
        else{
            document.getElementById("userprofile").style.display="none";	   
        }
	</script>


										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Loan settlements</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
														<i class="fas fa-file"></i>
															
															</div>
													</div>
												</div>
												<h4 class="mt-1 mb-3" style="font-weight: bold;">
												

												<a style="color:black" href="{{route('settlement_forms')}}">Settlements</a>											
											
											
											</h4>
												<div class="mb-0">
													<span class="text-success">Check <i class="mdi mdi-arrow-bottom-right">Settlements Forms</i></span>
													<span class="text-muted">Download all</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Application History</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
														<i class="fas fa-credit-card"></i>
														</div>
													</div>
												</div>
												<h4 class="mt-1 mb-3" style="font-weight: bold;"><a style="color:black" href="{{route('loan_history')}}">Loan History</a></h4>
												<div class="mb-0">
													<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>check applied loans </span>
													<span class="text-muted">via web</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
												<div class="col mt-0">
														<h5 class="card-title">payments history</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="fas fa-money-check-alt"></i>
														</div>
													</div>
												</div>
												<h4 class="mt-1 mb-3" style="font-weight: bold;"><a style="color:black" href="{{route('checkpayments')}}">Payments</a></h4>
													
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>check your ballance</span>
													<span class="text-muted">& payment history</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Investing Platform</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
									<p>We are thrilled to announce the upcoming launch of our groundbreaking investing platform. Our team has been hard at work developing a powerful solution that will revolutionize the way you manage and grow your wealth.<br><br> With a steadfast commitment to empowering our clients and delivering exceptional financial services, we are excited to bring you an unparalleled investing experience.<br><br>Get ready to take control of your financial future. We look forward to embarking on this exciting journey with you!😊😊😊😊</p>	
									</div>
								</div>
							</div>
						</div>
					</div>

					
					

				</div>
			</main>
<hr>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://www.elianaconnect.com" target="_blank"><strong>Powered by Eliana-connect</strong></a>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{asset('dashboardassets/js/app.js')}}"></script>

	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>

</html>