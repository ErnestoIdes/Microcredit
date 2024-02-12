@include('admin_top_menu')

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          @if($employee->profilepic)
            <img src="{{asset('attatchments_loans/'.$employee->profilepic)}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              @else 
              <img src="{{asset('avatar.png')}}" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              @endif
            <h5 class="my-3">{{ $employee->firstname.' '.$employee->lastname }}</h5>
            <p>
            @if($employee->signature)
        <img src="{{asset('attatchments_loans/'.$employee->signature->getSignatureImagePath())}}" width="100" height="100"/>
        @endif
</p>
            <p class="text-muted mb-1">{{ $employee->email }}</p>
            <p class="text-muted mb-1">{{ $employee->position }}</p>
            <p class="text-muted mb-4">{{ $employee->province_id }}</p>
            <p class="text-muted mb-4">{{ $employee->town_id }}</p>
            <div class="d-flex justify-content-center mb-2">
              
              <button type="button" class="btn btn-outline-primary ms-1"><a href="mailto:{{ $employee->email }}">Message</a></button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                Net Salary/Income
                <p class="mb-0">ZMW {{$employee->net_salary}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               Company/Ministry
                <p class="mb-0">{{$employee->company_id}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
               Employee-ID
                <p class="mb-0">{{$employee->mannumber}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              Signed Up on:
                <p class="mb-0"> {{date('d, F-Y',strtotime($employee->created_dt))}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                Reference#
                <p class="mb-0">{{$employee->employee_id}}</p>
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
                <p class="text-muted mb-0">{{ $employee->firstname. ' '.$employee->lastname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NRC</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->nrc }}</p>

<!--Show NRC Fie--> 
@php 
$attachments = $employee->reg_employee_attachment()->get();
@endphp
@forelse ($attachments as $files)
        <a href="{{asset('attatchments_loans/'.$files->attachment_name)}}">NRC FILE</a>
        <br>
        @empty
        <p>No files attached</p>
        @endforelse

<!--End showing NRC File-->


              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->province_id.' '. $employee->town.' '. $employee->address }}</p>
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
               
                {{$employee->next_of_kin_fname. ' '.$employee->next_of_kin_lname}} 
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Relationship</p>
                
                {{$employee->next_of_kin_relationship}}
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Phone</p>
                
                {{$employee->next_of_kin_phone}}
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Addrress</p>
                
                {{$employee->next_of_kin_address}}
                
               
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Bank</span> Details
                </p>
                <p class="mb-1" style="font-size: .77rem;">Bank Name</p>
               
                {{$employee->bank_id}}
               
                <p class="mt-4 mb-1" style="font-size: .77rem;">BankBranch</p>
               
                {{$employee->bank_branch_id}}
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Bank Account Number</p>
               
                {{$employee->bank_account_no}}
               
                <p class="mt-4 mb-1" style="font-size: .77rem;">MBank Account Name</p>
               
                {{$employee->bank_account_name}}
                
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Money</p>
                
                 {{$employee->mobile_money_no. ''.$employee->mobile_money_name  }}
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('admin_bottom_menu')


