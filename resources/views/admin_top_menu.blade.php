<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Get affordable and accessible microfinance solutions. We offer low-interest loans for civil servants, private individuals, and auto loans. Our flexible loan products come with competitive rates and personalized customer service to help you achieve your financial goals. Apply online today!">
	<meta name="keywords" content="Micronfin,Loans,Civil servants loans,Private loans,Autoloans,Low interest rates,Financial services,Microfinance,Quick loans,Personal loans,Business loans,Flexible repayment plans,Fast approval,Customer service.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<!-- Favicon -->
<link href="{{asset('landing_page/img/apple-touch-icon.png')}}" rel="shortcut icon"/>



  <!--Fontawesome--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>{{config('app.name')}}</title>

	<link href="{{asset('dashboardassets/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script> -->

</head>

<body>
	
@include('sweetalert::alert')
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="">
          <span class="align-middle">Menu Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						Web Analytics
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="{{route('admindashboard')}}">
              <i class="align-middle fas fa-tachometer"></i> <span style="color:white">Dashboard</span>
            </a>
					</li>

<style>
.no-permission {
  opacity: 0.5; /* make the div 50% translucent */
  color: #999; /* grey out the text */
  cursor: default; /* make it unclickable */
}

.no-permission:hover {
  position: relative; /* ensure the tooltip is positioned relative to this element */
}

.no-permission:hover::after {
  content: 'You don\'t have permission to view this';
  position: absolute; /* position the tooltip relative to the .no-permission element */
  top: 100%; /* adjust the top position to place the tooltip below the element */
  left: 0;
  background-color: #333; /* background color of the tooltip */
  color: #fff; /* text color of the tooltip */
  padding: 4px 8px; /* padding of the tooltip */
  border-radius: 4px; /* rounded corners */
  font-size: 14px; /* font size of the tooltip */
}




</style>





				<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						Users
					</li>

					
				
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('users.index')}}">
              <i class="align-middle fas fa-users" ></i> <span class="align-middle" style="color:white">List</span>
            </a>					
					</li>

				<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('users.register')}}">
              <i class="align-middle fas fa-users" ></i> <span class="align-middle" style="color:white">New</span>
            </a>					
					</li>

					<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						Clients
					</li>

					
				
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('clients.index')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">List</span>
            </a>					
					</li>

				<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('clients.register')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">New</span>
            </a>					
					</li>


					<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						Loans
					</li>

					
				
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loans.index')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">List</span>
            </a>					
					</li>

				<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loans.approved')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Active Loans</span>
            </a>					
					</li>		

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loans.awaiting')}}">
              <i class="align-middle fas fa-clock-o" ></i> <span class="align-middle" style="color:white">Pending Loans</span>
            </a>					
					</li>			

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loans.rejected')}}">
              <i class="align-middle fas fa-ban" ></i> <span class="align-middle" style="color:white">Denied Loans</span>
            </a>					
					</li>
	
	

			
					
					@can('can-send-text') -->
			<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('reminders.create')}}">
              <i class="align-middle fas fa-mobile-phone" ></i> <span class="align-middle" style="color:white">Send Text</span>
            </a>					
					</li>	
					<!-- @else	 -->
					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('reminders.create')}}">
              <i class="align-middle fas fa-mobile-phone" ></i> <span class="align-middle" style="color:white">Send Text</span>
            </a>					
					</li>	
		<!-- 			@endcan
					
@can('can-export-users') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('export_borrower')}}">
              <i class="align-middle fas fa-share" ></i> <span class="align-middle" style="color:white">Export</span>
            </a>					
					</li>	
					<!-- @else -->
					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('export_borrower')}}">
              <i class="align-middle fas fa-share" ></i> <span class="align-middle" style="color:white">Export</span>
            </a>					
					</li>
					<!-- @endcan			 -->
					
					


					<hr>
<center>
					<li class="sidebar-item">
   <!-- Log Out -->
   <form method="POST" action="{{ route('logout') }}">
                            @csrf
                   <button class="btn btn-danger">Log Out</button> 
                           
                        </form>

</center>
					
					</li>
				</ul>

				
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
						
					{{Auth::user()->firstname}} {{Auth::user()->lastname}}
							<i id="usericon" class="fas fa-user-shield" style="font-size:26px"></i>

							<img id="userprofile" src="" style="width:80px; height:80px; border-radius:100%"/>
</a>
							<div class="dropdown-menu dropdown-menu-end">
								<!--Profile Route-->
					
                  <!-- @can('can-check-their-profie')              -->
                    <a class="dropdown-item" href="{{route('users.profile')}}">
              <i class="align-middle fas fa-user" ></i> <span class="align-middle">Profile</span>
            </a>					
				<!-- @else -->
				<a class="dropdown-item no-permission" href="{{route('users.profile')}}">
              <i class="align-middle fas fa-user" ></i> <span class="align-middle">Profile</span>
            </a>					
		<!-- 		@endcan

				@can('can-change-their-password') -->
			<a class="dropdown-item" href="{{route('admin_change_password')}}">
              <i class="align-middle fas fa-key" ></i> <span class="align-middle"> Change Password</span>
            </a>	
			<!-- @else -->
			<a class="dropdown-item no-permission" href="{{route('admin_change_password')}}">
              <i class="align-middle fas fa-key" ></i> <span class="align-middle"> Change Password</span>
            </a>
			
			<!-- @endcan -->
					
								<!--End profile route-->	



							
								<div class="dropdown-divider"></div>
								
						<div class="dropdown-item">		
                        <!-- Log Out -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                   <button class="btn btn-danger">Log Out</button> 
                           
                        </form>
                    
</div>



								
								<div class="dropdown-divider"></div>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
			
		




<!--Check if the profile picture has been uploaded-->
<input type="hidden" value="" id="profilepicture"/>


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
