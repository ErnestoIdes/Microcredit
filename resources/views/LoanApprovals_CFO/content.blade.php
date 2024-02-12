@php 
$user = \App\Models\reg_employee_mst::find($loan_status->user_id);
@endphp
<h3>Loan Officer's Analysis</h3>
<p>Analysed by:<strong>{{$user->firstname. ' '. $user->lastname}}</strong></p>
<div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Loans</a></li>
            <li class="breadcrumb-item active" aria-current="page">Approvals</li>
          </ol>
        </nav>
      </div>
    </div>


<!--Show Errors if any-->  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<!--End showing errors if any-->
@php 
    if ($loan_applications) {
            $employee_data = \App\Models\reg_employee_mst::find($loan_applications->employee_id);
               
            $attachments = $employee_data->reg_employee_attachment()->get();
        
    } else {
        $attachments = [];
    }
@endphp


<!-- Clients Details-->   
@if($loan_applications->loan_type == 1)
<table class="table">
  <thead>
    <tr>
      <th>Amount</th>
      <th>Month(s)</th>
      <th>Loan Type</th>
      <th>Loan Number</th>
      <th>Signature</th>
      <th>NRC/PICTURE</th>
      <th>PAYSLIP-1</th>
      <th>PAYSLIP-2</th>
      <th>Bank Statement</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>{{$loan_applications->loan_amount ?? ''}}</td>
      <td>{{$loan_applications->months ?? ''}}</td>
      <td>PAYROLL</td>
      <td>{{$loan_applications->loan_number ?? ''}}</td>
     
      <td>
      @if($employee_data->signature)
        <img src="{{asset('attatchments_loans/'.$employee_data->signature->getSignatureImagePath())}}" width="100" height="100"/>
        @endif
      </td>
     
     
      <td>
      @forelse ($attachments as $files)
        <a href="{{asset('attatchments_loans/'.$files->attachment_name)}}">NRC</a>
        <br>
        @empty
        <p>No files attached</p>
        @endforelse
        </td>
        @if($loan_applications)
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->payslip1)}}">PAYSLIP-1</a></td>  
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->payslip2)}}">PAYSLIP-2</a></td> 
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->bank_statement)}}">Bank Statement</a></td>   
      @else
      No Applications to review
      <br>
      @endif
    </tr>
   
  </tbody>
</table>

@elseif($loan_applications->loan_type == 2)

<table class="table">
  <thead>
    <tr>
      <th>Amount</th>
      <th>Month(s)</th>
      <th>Loan Type</th>
      <th>Loan Number</th>
      <th>Asset Name</th>
      <th>Asset Estimate</th>
      <th>Asset Location</th>
      <th>NRC</th>
      <th>Vehicle Images</th>
      <th>Signature</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>{{$loan_applications->loan_amount ?? ''}}</td>
      <td>{{$loan_applications->months ?? ''}}</td>
      <td>AUTO</td>
      <td>{{$loan_applications->loan_number ?? ''}}</td>
      <td>{{$loan_applications->asset_name ?? ''}}</td>
      <td>{{$loan_applications->asset_estimate ?? ''}}</td>
      <td>{{$loan_applications->asset_location ?? ''}}</td>
      
     
     
      <td>
      @forelse ($attachments as $files)
        <a href="{{asset('attatchments_loans/'.$files->attachment_name)}}">NRC</a>
        <br>
        @empty
        <p>No files attached</p>
        @endforelse
        </td>
        @if($loan_applications)
        <td>
        <a href="{{asset('attatchments_loans/'.$loan_applications->front_image)}}">WhiteBook</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->front_image)}}">Front Image</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->back_image)}}">Back Image</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->right_image)}}">Right Image</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->left_image)}}">Left Image</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->chassis_number)}}">Chassis Number</a><br>
          <a href="{{asset('attatchments_loans/'.$loan_applications->chassis_number)}}">Mileage </a><br>
        </td>  
       
      
      <td>
      @if($employee_data->signature)
        <img src="{{asset('attatchments_loans/'.$employee_datasignature->getSignatureImagePath())}}" width="100" height="100"/>
        @endif
      </td>
     
      @else
      No Applications to review
      <br>
      @endif
    </tr>
   
  </tbody>
</table>
@else
<table class="table">
  <thead>
    <tr>
      <th>Amount</th>
      <th>Month(s)</th>
      <th>Loan Type</th>
      <th>Loan Number</th>
      <th>Signature</th>
      <th>NRC/PICTURE</th>
      <th>PAYSLIP-1</th>
      <th>PAYSLIP-2</th>
      <th>Bank Statement</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>{{$loan_applications->loan_amount ?? ''}}</td>
      <td>{{$loan_applications->months ?? ''}}</td>
      <td>PRIVATE</td>
      <td>{{$loan_applications->loan_number ?? ''}}</td>

     
      <td>
      @if($employee_data->signature)
        <img src="{{asset('attatchments_loans/'.$employee_data->signature->getSignatureImagePath())}}" width="100" height="100"/>
        @endif
      </td>
     
     
      <td>
      @forelse ($attachments as $files)
        <a href="{{asset('attatchments_loans/'.$files->attachment_name)}}">NRC</a>
        <br>
        @empty
        <p>No files attached</p>
        @endforelse
        </td>
        @if($loan_applications)
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->payslip1)}}">PAYSLIP-1</a></td>  
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->payslip2)}}">PAYSLIP-2</a></td> 
        <td><a href="{{asset('attatchments_loans/'.$loan_applications->bank_statement)}}">Bank Statement</a></td>   
      @else
      No Applications to review
      <br>
      @endif
    </tr>
   
  </tbody>
</table>
@endif

<!--End Clients Details here-->






<div class="border p-3">
  <form method="POST" action="{{ route('loan_approvals.update',['loan_approval' => $loan_status->id]) }}">
  @method('PUT')
    @csrf <!-- Laravel CSRF protection -->

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Question</th>
          <th>Yes</th>
          <th>No</th>
        </tr>
      </thead>
      <tbody>

      <tr style="display: none;">
          <td>1. Loan Number</td>
          <td>
            <div class="form-group">
              <input class="form-control" type="number" value="{{$loan_applications->loan_number ?? ''}}" name="loan_number" value="yes">
                         </div>
          </td>
          <td>
           
          </td>
        </tr>


      
        <tr>
          <td>1. Has the KYC been done Successfully?</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer1" value="yes" id="answer1_yes" @if($loan_status->answer1 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer1_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer1" value="no" id="answer1_no" @if($loan_status->answer1 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer1_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>2. Has the client provided bank statement(s) Showing transactions for the last three months? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer2" value="yes" id="answer2_yes" @if($loan_status->answer2 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer2_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer2" value="no" id="answer2_no" @if($loan_status->answer2 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer2_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>3. Is the bank account in the name of the client and is active? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer3" value="yes" id="answer3_yes" @if($loan_status->answer3 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer3_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer3" value="no" id="answer3_no" @if($loan_status->answer3 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer3_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>4. Does the Payslip details correspond with the name, surname and National ID (If client is in employement) ? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer4" value="yes" id="answer4_yes" @if($loan_status->answer4 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer4_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer4" value="no" id="answer4_no" @if($loan_status->answer4 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer4_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>5. Does the Passport of the client Match the one on their National ID? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer5" value="yes" id="answer5_yes" @if($loan_status->answer5 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer5_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer5" value="no" id="answer5_no" @if($loan_status->answer5 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer5_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>6. Has the client replaced the National ID at any point? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer6" value="yes" id="answer6_yes" @if($loan_status->answer6 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer6_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer6" value="no" id="answer6_no" @if($loan_status->answer6 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer6_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>7. If the client has never replaced the National ID, Is the National ID number's last two digits and the clients Number's last two digits equal ? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer7" value="yes" id="answer7_yes" @if($loan_status->answer7 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer7_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer7" value="no" id="answer7_no" @if($loan_status->answer7 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer7_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>8. Is the client Above 16? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer8" value="yes" id="answer8_yes" @if($loan_status->answer8 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer8_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer8" value="no" id="answer8_no" @if($loan_status->answer8 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer8_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>9. Is the Mobile Money Verified? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer9" value="yes" id="answer9_yes" @if($loan_status->answer9 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer9_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer9" value="no" id="answer9_no" @if($loan_status->answer9 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer9_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>10. Does the client have any alternative Line? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer10" value="yes" id="answer10_yes" @if($loan_status->answer10 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer10_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer10" value="no" id="answer10_no" @if($loan_status->answer10 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer10_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>11. Does the client work or is in business? </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer11" value="yes" id="answer11_yes" @if($loan_status->answer11 == 'yes') checked @endif disabled>
              <label class="form-check-label" for="answer11_yes">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer11" value="no" id="answer11_no" @if($loan_status->answer11 == 'no') checked @endif disabled>
              <label class="form-check-label" for="answer11_no">No</label>
            </div>
          </td>
        </tr>

        <tr>
          <td>Are you approving this Loan?</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="loan_officer_decision" value="yes" id="loan_officer_decision" @if($loan_status->loan_officer_decision == 2) checked @endif disabled>
              <label class="form-check-label" for="loan_officer_decision">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="answer12" value="no" id="answer12_no" @if($loan_status->loan_officer_decision == 3) checked @endif disabled>
              <label class="form-check-label" for="answer12_no">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>Loan Officers Comment </td>
          <td colspan="2">
            <div class="form-floating">
              <textarea class="form-control" name="loan_officer_comments" id="loan_officer_comments" rows="3" readonly>{{$loan_status->loan_officer_comments}}</textarea>
              
            </div>
          </td>
        </tr>
        <tr>
          <td><button class="btn btn-danger">Are you approving this Loan?</button></td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="cfo_decision" value="yes" id="cfo_decision" >
              <label class="form-check-label" for="cfo_decision">Yes</label>
            </div>
          </td>
          <td>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="cfo_decision" value="no" id="cfo_decision" >
              <label class="form-check-label" for="cfo_decision">No</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>Chief Financial Officers Comment </td>
          <td colspan="2">
            <div class="form-floating">
              <textarea class="form-control" name="cfo_comments" id="cfo_comments" rows="3" ></textarea>
              
            </div>
          </td>
        </tr>
      </tbody>
    </table>
<br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
