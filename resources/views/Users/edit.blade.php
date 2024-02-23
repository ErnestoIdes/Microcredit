@include('admin_top_menu')

<div class="shadow-sm p-3 mb-5 bg-white rounded">
<div class="page-header">
  <div class="row align-items-end">
     <div class="col-lg-8">
        <div class="page-header-title">
           <i class="ik ik-users bg-blue"></i>
           <div class="d-inline">
              <h3 style="font-weight: 400;">Edit Employee</h3>
              <span>Edit Employee, Please fill all field correctly.</span>
          </div>
      </div>
  </div>
  <div class="col-lg-4">
    <nav class="breadcrumb-container" aria-label="breadcrumb">
       <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{{ route('dashboard') }}"><i class="ik ik-home"></i></a>
         </li>
         <li class="breadcrumb-item">
             <a href="{{ route('users.index') }}">Employee</a>
         </li>
         <li class="breadcrumb-item">
             <a href="#">Edit</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">{{ $employee->employee_id }}</li>
     </ol>
 </nav>
</div>
</div>
</div>

<div class="row">
    <div class="col-md-8 col-sm-12 col-xl-8 offset-md-2 offset-xl-2">

        <div class="widget overflow-visible">
           
            <br><br>
            <div class="widget-body">
                

                <form action="users.update/{{$employee->employee_id}}" method="POST" id="editEmployee">
                    @method('PUT')
                    @csrf
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                       <div class="form-group">
                        <label for="first_name">First Name</label><small class="text-danger">*</small>
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname" placeholder="John" autocomplete="off" value="{{ old('firstname', $employee->firstname) }}" >
                        @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label for="first_name">Last Name</label><small class="text-danger">*</small>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname" autocomplete="off" value="{{ old('lastname', $employee->lastname) }}" >
                        @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group">
                        <label for="first_name">EmployeeID</label>
                        <input type="text" name="mannumber" class="form-control @error('mannumber') is-invalid @enderror" id="mannumber" autocomplete="off" value="{{ old('mannumber', $employee->mannumber) }}" >
                        @error('mannumber')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="form-group">
                          <label for="gender">Gender </label><small class="text-danger">*</small>
                          <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                            <option value disabled>choose</option>
                            @php
                              $genders = ['Male','Female','Other'];
                            @endphp
                            @foreach($genders as $gender)
                              <option
                              @if($gender == $employee->gender)
                                selected
                              @endif
                              >{{ $gender }}</option>
                            @endforeach
                          </select>
                          @error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4 col-sm-12">
                      <div class="form-group">
                        <label for="NRC">NRC</label><small class="text-danger">*</small>
                        <input type="text" name="nrc" class="form-control @error('nrc') is-invalid @enderror" id="nrc" autocomplete="off" value="{{ old('nrc', $employee->nrc) }}" >
                        @error('nrc')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-md-4 col-lg-4 col-sm-12">
                      <div class="form-group">
                        <label for="Birthdate">Birthdate</label><small class="text-danger">*</small>
                        <input type="text" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" autocomplete="off" value="{{ old('dob', $employee->dob) }}" >
                        @error('dob')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="form-group">
                          <label for="gender">Marital Status</label><small class="text-danger">*</small>
                          <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="marital_status">
                            <option value disabled>choose</option>
                            @php
                              $marital_status = ['single','married','divorced','widowed','separated'];
                            @endphp
                            @foreach($marital_status as $marital_status)
                              <option
                              @if($marital_status == $employee->marita_status)
                                selected
                              @endif
                              >{{ $marital_status }}</option>
                            @endforeach
                          </select>
                          @error('marital_status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label for="address">Address</label><small class="text-danger">*</small>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="lastname" autocomplete="off" value="{{ old('address', $employee->address) }}" >
                        @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label for="first_name">Email</label><small class="text-danger">*</small>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autocomplete="off" value="{{ old('email', $employee->email) }}" >
                        @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="form-group">
                        <label for="phone">Phone</label><small class="text-danger">*</small>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" value="{{ old('phone', $employee->phone) }}" >
                        @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="position" autocomplete="off" value="{{ old('position', $employee->position) }}" >
                        @error('position')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="NetSalary">Net Salary/Income</label><small class="text-danger">*</small>
                        <input type="text" name="net_salary" class="form-control @error('net_salary') is-invalid @enderror" id="net_salary" autocomplete="off" value="{{ old('net_salary', $employee->net_salary) }}" >
                        @error('net_salary')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                          <label for="BankName">Bank Name</label><small class="text-danger">*</small>
                          <select class="form-control @error('bank_id') is-invalid @enderror" id="bank_id" name="bank_id">
                            <option value disabled>choose</option>
                            @php
                              $banks = ['Zambia National Commercial Bank (Zanaco)','Standard Chartered Bank Zambia','Barclays Zambia (Absa)','Stanbic Bank (Zambia)','Cavmont Bank Limited (CBL)',
                              'Ecobank Zambia','Indo Zambia Bank','Investrust Bank','First Alliance Bank','Access Bank Zambia',
                              'ATLASMARA','BANK OF CHINA (ZAMBIA) LIMITEDk','FIRST CAPITAL BANK ZAMBIA',
                              'FNB','UBA','ZNBS','CITIBANK B'];
                            @endphp
                            @foreach($banks as $bank)
                              <option
                              @if($bank == $employee->bank)
                                selected
                              @endif
                              >{{ $bank }}</option>
                            @endforeach
                          </select>
                          @error('bank_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        </div>
                        </div>
                     
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="Bank Branch">Bank Branch</label><small class="text-danger">*</small>
                        <input type="text" name="bank_branch" class="form-control @error('bank_branch') is-invalid @enderror" id="bank_branch" autocomplete="off" value="{{ old('bank_branch', $employee->bank_branch_id) }}" >
                        @error('bank_branch')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="Bank Account Number">Bank Account Number</label><small class="text-danger">*</small>
                        <input type="text" name="bank_account_number" class="form-control @error('bank_account_number') is-invalid @enderror" id="bank_account_number" autocomplete="off" value="{{ old('bank_account_number', $employee->bank_account_no) }}" >
                        @error('bank_account_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="Bank Account Name">Bank Account Name</label><small class="text-danger">*</small>
                        <input type="text" name="bank_account_name" class="form-control @error('ban_account_name') is-invalid @enderror" id="bank_account_name" autocomplete="off" value="{{ old('bank_account_name', $employee->bank_account_name) }}" >
                        @error('bank_account_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>








                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="Mobile Money Number">Mobile Money Number</label><small class="text-danger">*</small>
                        <input type="text" name="mobile_money_number" class="form-control @error('mobile_money_number') is-invalid @enderror" id="mobile_money_number" autocomplete="off" value="{{ old('mobile_money_number', $employee->mobile_money_no) }}" >
                        @error('mobile_money_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label for="Mobile Money Name">Mobile Money Name</label><small class="text-danger">*</small>
                        <input type="text" name="mobile_money_name" class="form-control @error('mobile_money_name') is-invalid @enderror" id="mobile_money_name" autocomplete="off" value="{{ old('mobile_money_name', $employee->mobile_money_name) }}" >
                        @error('mobile_money_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
                        
                      </div>
                      </div>
                    </div>
                   <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!--Avatar model-->
<div class="modal" id="AvatarModel">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="modal-body">
        <div class="img-container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12" id="avatar-preview">
              
            </div>
          </div>
        </div>
        <div class="mt-2">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <button type="button" class="btn btn-block btn-outline-secondary" data-dismiss="modal"><i class="ik x-circle ik-x-circle"></i> Close</button>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
              <button type="button" class="btn btn-block btn-dark" id="crop-nd-save"><i class="ik ik-crop"></i> Crop & Save</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>
@include('admin_bottom_menu')