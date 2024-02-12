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

  <!--Fontawesome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Data mask--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- Bootstrap Datepicker library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>{{config('app.name')}}</title>

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
							<a href="" class="btn btn-primary">Chat-Bot</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<!--Main Page-->

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

							<img id="userprofile" src="{{asset('attatchments_loans/'.Auth::user()->profilepic)}}" style="width:80px; height:80px; border-radius:100%"/>
</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!--Profile Route-->
                                <a class="dropdown-item" href="{{route('customer_profile')}}">
              <i class="align-middle fas fa-user" ></i> <span class="align-middle"> Personal Profile</span>
            </a>	
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{route('customer_change_password')}}"><i class="align-middle me-1 fas fa-lock"></i> Change password</a>
                                <hr>
								<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
												<button class="btn btn-danger">Log Out</button>
                                
                            </x-dropdown-link>
                        </form>



								
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
			
		


				


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


<!--Import the blade here-->
