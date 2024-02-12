<form method="POST" action="{{route('web_loan_application',encrypt(Auth::user()->employee_id))}}"  enctype="multipart/form-data">
            @csrf
          
           <!-- Loan Type -->
           <x-input id="loan_type" class="block mt-1 w-full" type="hidden"  value=2 name="loan_type"  readonly/>
           
 <!-- Employee Id -->
 
            <x-input id="employee_id" class="block mt-1 w-full" type="hidden"  value='{{$employeeData->employee_id}}' name="employee_id"  readonly/>
           



    
 

            <!-- Tenure Months -->
<div class="mt-4">
            <label for="How Many Months">How Many Months</label> <small class="text-danger">*</small>
<!--Show the number of months to the user--> 
<select class="block mt-1 w-full" onchange="calculateEMI()" value="{{ old('tenure_months') }}" name="tenure_months" id="months" required>
  <option value=1>1 Month </option>
  <option value=2>2 Months</option>
  <option value=3>3 Months</option>
  <option value=4>4 Months</option>
  <option value=5>5 Months</option>
  <option value=6>6 Months </option>
 </select>
</div> 


<!-- Loan Amount -->
<div class="mt-4">
<label for="Loan Amount (ZMW)">Loan Amount (ZMW)</label> <small class="text-danger">*</small>
            

            <x-input class="block mt-1 w-full" type="number" value="{{ old('loan_amt') }}" onkeyup="calculateEMI()" id="amount" name="loan_amt"  />
            
        </div> 

<br>
            <div class="form-group" style="display:none">
  <label for="company_percentage">Facility Fee - For Loans between (K200-K1000)</label>
  <input type="number" name="lower_facility_fee" value="0" class="form-control"  id="lower_facility_fee" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K200 to K1000</small>  
  </div>
  
  <div class="form-group" style="display:none">
  <label for="company_percentage">Facility Fee - For Loans between (K1001 - K10,000)</label>
  <input type="number" name="higher_facility_fee" value="0" class="form-control"  id="higher_facility_fee" readonly>
    <small>The facility fee of K100 will be added to the loan amount(s) between K1001 - K10,000</small>  
  </div>




 <!-- Loan Repayments Amount -->
<div class="mt-4">
           
            <label for="Total Repayments Amount">Total Repayments Amount</label> <small class="text-danger">*</small>
            <x-input class="block mt-1 w-full" type="number" value="{{ old('total_repayments_amt') }}" id="total_repayments_amt" name="total_repayments_amt" readonly />
            </div> 

             <!-- EMI -->
<div class="mt-4">
<label for="EMI">EMI</label> <small class="text-danger">*</small>
            
            <x-input class="block mt-1 w-full" type="number" id="emi" value="{{ old('emi') }}"  name="emi"  readonly/>
            </div> 
          
<!--Loan Percent-->  
<x-input id="loan_percent" class="block mt-1 w-full" type="hidden" id="hidden" value="12.75"  id="loan_percent" readonly/>


<!-- Asset Name  -->
<div class="mt-4">
<label for="Asset Name">Asset Name</label> <small class="text-danger">*</small>
            

            <x-input class="block mt-1 w-full" type="text" value="{{ old('asset_name') }}" id="asset_name" name="asset_name"  />
            
        </div> 


        <!-- Asset Location  -->
<div class="mt-4">
            
            <label for="Asset Location">Asset Location</label> <small class="text-danger">*</small>

            <x-input class="block mt-1 w-full" type="text" value="{{ old('asset_location') }}" id="asset_location" name="asset_location"  />
            
        </div> 


<!-- Asset Estimate  -->
<div class="mt-4">
<label for="Asset Estimate Value (ZMW)">Asset Estimate Value (ZMW)</label> <small class="text-danger">*</small>
           

            <x-input class="block mt-1 w-full" type="number" value="{{ old('asset_estimate') }}" id="asset_estimate" name="asset_estimate"  />
            
        </div> 





<!-- Reference Payment Mode -->
<div class="mt-4">
           
            <label for="Payment Mode">Payment Mode</label> <small class="text-danger">*</small>
        
<!--Show Payments Modes to the user--> 
<select class="block mt-1 w-full" value="{{ old('payment_mode_id') }}" name="payment_mode_id" required>
   

  <option value="Bank transfer">Bank Transfer</option>
  <option value="Airtel Money">Airtel Money</option>
  <option value="Mtn Money">Mtn Money</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option>
  
   
 </select>
            </div> 




<br>

            <div class="row">
  <div class="col-lg-6">
 <div class="form-group">
             <label for="Upload Image of White Book (PNG/JPEG)">Upload Image of White Book (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control" value="{{ old('whitebook') }}" accept="image/jpeg, image/png" type="file" id="whitebook" name="whitebook" required/>
             
             </div> 
 
 </div>
 
              <!-- Front Image -->
              <div class="col-lg-6">
 <div class="form-group">
 <label for="Upload Front Image of vehicle (PNG/JPEG)">Upload Front Image of vehicle (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control" accept="image/jpeg, image/png" type="file" id="front_image" value="{{ old('front_image') }}" name="front_image"  required/>
             </div> 
 </div>
 </div>
 


 <div class="row">
  <div class="col-lg-6">
 <div class="form-group">
             <label for="Upload Back Image of Vehicle (PNG/JPEG)">Upload Back Image of Vehicle (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control"accept="image/jpeg, image/png" type="file" value="{{ old('back_image') }}" id="back_image" name="back_image" required/>
             
             </div> 
 
 </div>
 
              <!-- Left Image -->
              <div class="col-lg-6">
 <div class="form-group">
 <label for="Upload Left Image of vehicle (PNG/JPEG)">Upload Left Image of vehicle (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control" accept="image/jpeg, image/png" type="file" value="{{ old('left_image') }}" id="left_image"  name="left_image"  required/>
             </div> 
 </div>
 </div>
 



 <div class="row">
  <div class="col-lg-6">
 <div class="form-group">
             <label for="Upload Right Image of Vehicle (PNG/JPEG)">Upload Right Image of Vehicle (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control"accept="image/jpeg, image/png" type="file" id="right_image" value="{{ old('right_image') }}" name="right_image" required/>
             
             </div> 
 
 </div>
 
              <!-- Chassis Number -->
              <div class="col-lg-6">
 <div class="form-group">
 <label for="Chassis Number Image of vehicle (PNG/JPEG)">Upload Chassis Number Image of vehicle (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control" accept="image/jpeg, image/png" type="file" id="chassis_number" value="{{ old('chassis_number') }}" name="chassis_number"  required/>
             </div> 
 </div>
 </div>
 




 <div class="row">
  <div class="col-lg-6">
 <div class="form-group">
             <label for="Payslip1">Upload Mileage Image (PNG/JPEG)</label> <small class="text-danger">*</small>
 
             <input class="form-control"accept="image/jpeg, image/png" type="file" id="mileage" value="{{ old('mileage') }}" name="mileage" required/>
             
             </div> 
 
 </div>
 
              
 
 
  <!-- Bank Statement -->
  <div class="col-lg-6">
 <div class="form-group">
             <label for="Bank Statement">Upload Bank Statement (PDF)</label> <small class="text-danger">*</small>
 
             <input class="form-control" accept="application/pdf" type="file" id="bank_statement" value="{{ old('bankstatement') }}" name="bankstatement" required/>
             </div> 
 
 </div>
</div>

           
<br>
             <!-- Loan Application Submitt -->
               
             
                <button class="btn btn-primary">
                    {{ __('Loan Summary') }}
                </button>
            
            
               



        
    </form>
            




<script>

  function calculateEMI() {


    var loan_percent = document.getElementById('loan_percent').value;
            if (!loan_percent)
            loan_percent = '0';



             var installments = document.getElementById('months').value;
            if (!installments)
                installments = '0';


                var loan_amount =document.getElementById('amount').value;
            if (!loan_amount)
                loan_amount = '0';
                
                
                 var lower_facility_fee =document.getElementById('lower_facility_fee').value;
            if (!lower_facility_fee)
                lower_facility_fee = '0';
                
                
                 var higher_facility_fee =document.getElementById('higher_facility_fee').value;
            if (!higher_facility_fee)
                higher_facility_fee = '0';


               


            var loan_amount = parseFloat(loan_amount);
            var loan_percent = parseFloat(loan_percent);
            var installments = parseFloat(installments);
            var lower_facility_fee = parseFloat(lower_facility_fee);
            var higher_facility_fee = parseFloat(higher_facility_fee);
            

            
            



var total = (loan_amount+lower_facility_fee)+((loan_amount+lower_facility_fee)*(loan_percent/100)*installments);
 document.getElementById('total_repayments_amt').value = parseFloat(total).toFixed(2);
 document.getElementById('emi').value = parseFloat((total/installments)).toFixed(2);



var total = (loan_amount+higher_facility_fee)+((loan_amount+higher_facility_fee)*(loan_percent/100)*installments);
 document.getElementById('total_repayments_amt').value = parseFloat(total).toFixed(2);
 document.getElementById('emi').value = parseFloat((total/installments)).toFixed(2);
 //document.getElementById('emi_terms').value = parseFloat((total/installments)).toFixed(2);
 //document.getElementById('loan_amt_terms').value = loan_amount;
 //document.getElementById('loan_amt_terms_conditions').value = loan_amount;

 
           
        }
      </script>