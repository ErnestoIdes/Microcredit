@include('top_menu')
@php
$loan_details = \App\Models\web_loan_application::where('loan_number',"=",$loan_number)->first();
@endphp


<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Thank you for submitting your loan application!</h4>
  <p>Here is a summary of your loan details:</p>

  <ul class="list-group">
    <li class="list-group-item"><strong>Loan Type:</strong> @if($loan_details->loan_type ==1 ) PAYROLL @elseif($loan_details->loan_type ==2) AUTO @else PRIVATE SECTOR @endif</li>
    <li class="list-group-item"><strong>Loan Amount:</strong>ZMW {{$loan_details->loan_amount}}</li>
    <li class="list-group-item"><strong>EMI:</strong>ZMW {{$loan_details->emi}}</li>
    <li class="list-group-item"><strong>Interest Rate:</strong> 6.69%</li>
    <li class="list-group-item"><strong>Loan Term:</strong> {{$loan_details->months}} Months</li>
    <li class="list-group-item"><strong>Total Repayments:</strong>ZMW {{$loan_details->loan_amount}}</li>
    <li class="list-group-item"><strong>Loan Number:</strong>{{$loan_number}}</li>
  </ul>

  <hr>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="accept-terms">
    <label class="form-check-label" for="accept-terms">I accept the <a href="{{route('terms_payroll',encrypt($loan_number))}}">Terms and Conditions</a>.</label>
  </div>
  <form action = "{{route('verify_loan_application')}}" method="post">
    @csrf
   <input type="hidden" name="loan_number" value ="{{$loan_number}}">
  <button type="submit" class="btn btn-primary mt-3" id="submit-btn" disabled>Submit</button>
</form>
  <p class="mt-2 mb-0">Please review the details carefully and check the box to accept the terms and conditions before clicking "Submit" to complete your loan application.</p>
</div>




<script>
  const acceptTermsCheckbox = document.getElementById('accept-terms');
  const submitBtn = document.getElementById('submit-btn');

  acceptTermsCheckbox.addEventListener('change', function() {
    if (this.checked) {
      submitBtn.disabled = false;
    } else {
      submitBtn.disabled = true;
    }
  });
</script>
@include('bottom_menu')