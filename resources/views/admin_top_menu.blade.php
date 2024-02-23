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
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">List</span>
            </a>					
					</li>

				<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('users.register')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">New</span>
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
						Others
					</li>

					@can('can-view-emails')
                    <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('emailsub')}}">
              <i class="align-middle fas fa-envelope" ></i> <span class="align-middle" style="color:white">Email Subscribers</span>
            </a>					
					</li>
					@else
                    
       <li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('emailsub')}}">
              <i class="align-middle fas fa-envelope" ></i> <span class="align-middle" style="color:white">Email Subscribers</span>
            </a>					
					</li>             
                    
         @endcan
         
         @can('can-view-messages')                   


					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('messages')}}">
              <i class="align-middle fas fa-sms" ></i> <span class="align-middle" style="color:white">Messages</span>
            </a>
				</li>
                
                @else
           <li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('messages')}}">
              <i class="align-middle fas fa-sms" ></i> <span class="align-middle" style="color:white">Messages</span>
            </a>
				</li>            

@endcan


<!-- @can('can-view-registered-users') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('users.index')}}">
              <i class="align-middle fas fa-users" ></i> <span class="align-middle" style="color:white">Registered Users</span>
            </a>					
					</li>
					@else
					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('users.index')}}">
              <i class="align-middle fas fa-users" ></i> <span class="align-middle" style="color:white">Registered Users</span>
            </a>					
					</li>
<!-- @endcan -->



					<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						Loans
					</li>

					
					<!-- @can('can-view-active-loans')	 -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('active_loans')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Active Loans</span>
            </a>					
					</li>
<!-- @else -->
<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('active_loans')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Active Loans</span>
            </a>					
					</li>
	<!-- 				@endcan


					@can('can-view-denied-loans') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('denied_loans')}}">
              <i class="align-middle fas fa-ban" ></i> <span class="align-middle" style="color:white">Denied Loans</span>
            </a>					
					</li>
					<!-- @else -->

					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('denied_loans')}}">
              <i class="align-middle fas fa-ban" ></i> <span class="align-middle" style="color:white">Denied Loans</span>
            </a>					
					</li>


		<!-- 			@endcan


					@can('can-view-pending-loans') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('pending_loans')}}">
              <i class="align-middle fas fa-clock-o" ></i> <span class="align-middle" style="color:white">Pending Loans</span>
            </a>					
					</li>
					<!-- @else -->

					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('pending_loans')}}">
              <i class="align-middle fas fa-clock-o" ></i> <span class="align-middle" style="color:white">Pending Loans</span>
            </a>					
					</li>
		<!-- 			@endcan


@can('can-make-payments-update') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('payments.create')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Payments updates</span>
            </a>					
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('payments.create')}}">
              <i class="align-middle fas fa-money" ></i> <span class="align-middle" style="color:white">Payments updates</span>
            </a>					
					</li>
<!-- 					@endcan


					@can('can-view-loan-agreement-forms') -->

					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('downloading_loan_agreement_forms')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Loan Agreement Forms</span>
            </a>					
					</li> 
					<!-- @else -->

					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('downloading_loan_agreement_forms')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Loan Agreement Forms</span>
            </a>					
					</li> 
					<!-- @endcan -->
				

				
			<li class="sidebar-header" style="font-size:14px;font-weight:bold">
						My Approvals
					</li>
					<!-- @can('dlo') -->
					<li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('loan_approvals.index')}}">
              <i class="align-middle fas fa-check" ></i> <span class="align-middle" style="color:white">Review Loans - DLO</span>
            </a>
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
                    <a class="sidebar-link" href="{{route('loan_approvals.index')}}">
              <i class="align-middle fas fa-check" ></i> <span class="align-middle" style="color:white">Review Loans - DLO</span>
            </a>
					</li>
					<!-- @endcan -->


<!-- @can('cfo') -->
			<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('review')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - CFO</span>
            </a>
					</li>
					<!-- @else -->

					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('review')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - CFO</span>
            </a>
					</li>


<!-- 					@endcan

					@can('can-approve-loan-applications') -->

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('reviewed_loans')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - ADMIN</span>
            </a>
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('reviewed_loans')}}">
              <i class="align-middle fas fa-copy" ></i> <span class="align-middle" style="color:white">Review Loans - ADMIN</span>
            </a>
					</li>
<!-- 					@endcan

					@can('can-upload-settlements') -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('settlements.create')}}">
              <i class="align-middle fas fa-upload" ></i> <span class="align-middle" style="color:white">Upload Settlements</span>
            </a>
					</li>
					<!-- @else -->

<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('settlements.create')}}">
              <i class="align-middle fas fa-upload" ></i> <span class="align-middle" style="color:white">Upload Settlements</span>
            </a>
					</li>
					<!-- @endcan -->



<!-- @can('can-add-roles') -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles.create')}}">
              <i class="align-middle fas fa-user-plus" ></i> <span class="align-middle" style="color:white">Roles</span>
            </a>
					</li>

<!-- @else -->
<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('roles.create')}}">
              <i class="align-middle fas fa-user-plus" ></i> <span class="align-middle" style="color:white">Roles</span>
            </a>
					</li>
		<!-- 			@endcan


					@can('can-give-permissions') -->

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_permissions.create')}}">
              <i class="align-middle fas fa fa-plus-square" ></i> <span class="align-middle" style="color:white">Permissions</span>
            </a>
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('roles_permissions.create')}}">
              <i class="align-middle fas fa fa-plus-square" ></i> <span class="align-middle" style="color:white">Permissions</span>
            </a>
					</li>
<!-- 					@endcan

@can('can-give-roles-to-users') -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_users.create')}}">
              <i class="align-middle fas fa fa-user" ></i> <span class="align-middle" style="color:white">Users</span>
            </a>
					</li>
					<!-- @else -->

					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('roles_users.create')}}">
              <i class="align-middle fas fa fa-user" ></i> <span class="align-middle" style="color:white">Users</span>
            </a>
					</li>

		<!-- 			@endcan



					@can('can-revoke-roles') -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('roles_users.remove')}}">
              <i class="align-middle fas fa fa-ban" ></i> <span class="align-middle" style="color:white">Revoke Roles </span>
            </a>
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('roles_users.remove')}}">
              <i class="align-middle fas fa fa-ban" ></i> <span class="align-middle" style="color:white">Revoke Roles </span>
            </a>
					</li>
			<!-- 		@endcan


					@can('can-check-permissions') -->
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('view_all_permissions')}}">
              <i class="align-middle fas fa-eye" ></i> <span class="align-middle" style="color:white">Users with Permissions</span>
            </a>
					</li>
					<!-- @else -->
					<li class="sidebar-item no-permission">
						<a class="sidebar-link" href="{{route('view_all_permissions')}}">
              <i class="align-middle fas fa-eye" ></i> <span class="align-middle" style="color:white">Users with Permissions</span>
            </a>
					</li>
<!-- 
					@endcan
			
					
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
   <form method="POST" action="/user_logout">
                            @csrf
                   <button class="btn btn-danger">Log Out</button> 
                           
                        </form>

</center>
					
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Download our Android App</strong>
						<div class="mb-3 text-sm">
							Are you looking for a mobile app component? Download it for free here.
						</div>
						<div class="d-grid">
							<a href="" class="btn btn-primary">Download</a>
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
