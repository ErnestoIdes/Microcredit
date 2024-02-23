@include('admin_top_menu')
  <style>
    /* Custom styles for the floating button */
    .floating-button {
/*      float: right;*/
/*      position: fixed;*/
/*      bottom: 200px;*/
/*      right: 20px;*/
/*      z-index: 10; // Ensure the button stays on top of other content */
    }
  </style>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">        
          
          <div class="col-sm-4 col-sm-push-8" >
            <a class="btn btn-warning btn-lg" href="/loans/create/{{ $user->id }}"> <i class="fa fa-lg fa-money" style="color: red;" aria-hidden="false"> Request Loan</i></a>
          </div>
          
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          
           
              <img src="{{asset('avatar.png')}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            
            <h5 class="my-3">{{ $user->firstname.' '.$user->lastname }}</h5>
            <p>
            
</p>
            <p class="text-muted mb-1">{{ $user->email }}</p>
            <p class="text-muted mb-1">{{ $user->position }}</p>
            <p class="text-muted mb-4">{{ $user->province_id }}</p>
            <p class="text-muted mb-4"></p>
            <div class="d-flex justify-content-center mb-2">
              
              <button type="button" class="btn btn-outline-primary ms-1"><a href="mailto:{{ $user->email }}">Message</a></button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                Net Salary/Income
                <p class="mb-0">MZN {{$user->net_salary}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               Company/Ministry
                <p class="mb-0">{{$user->microcredit_id}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               Employee-ID
                <p class="mb-0"></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Signed Up on:
                <p class="mb-0"> {{date('d, F-Y',strtotime($user->created_dt))}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                Reference#
                <p class="mb-0"></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->firstname. ' '.$user->lastname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NRC</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"></p>




              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->province_id.' '. $user->address }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Next of Kin</span> Details
                </p>
                <p class="mb-1" style="font-size: .77rem;">Names: </p>
               
                
                
               
                
           
                
               
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Bank</span> Details
                </p>
                <p class="mb-1" style="font-size: .77rem;">Bank Name</p>
               
                {{$user->bank_id}}
               
                
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Bank Account Number</p>
               
                {{$user->account_number}}
               
               
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Money</p>
                
                 {{$user->phone }}
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('admin_bottom_menu')


