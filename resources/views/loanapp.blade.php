<x-guest-layout>
<center>
    <h5>PICK LOAN CATEGORY</h5>
    <br>
</center>

<div class="shadow p-3 mb-5 bg-white rounded">

      <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

  <div class="form-group">
    <x-label for="name" :value="__('Loan Type')" />
    <select class="form-control" name="loan_type" id="loan-type" required>
    <option value="">Select Loan Type</option>
      <option value=1>Payroll Based Loan</option>
      <option value=2>Auto Loans</option>
      <option value=3>Private Sector Loans</option>
    </select>            
</div>

<div id="auto-loans" style="display: none;">
    <!-- Content to show when auto Loans is selected -->
    @include('LoanCategories.auto')
  </div>

  <div id="payroll-loans" style="display: none;">
    <!-- Content to show when Payroll Loans is selected -->
   @include('LoanCategories.payroll') 
   
   
  </div>


  <div id="private-sector-loans" style="display: none;">
    <!-- Content to show when Private Sector Loans is selected -->
    @include('LoanCategories.private_sector')
  </div>
  
 
  

  

<script>
  $('#loan-type').on('change', function() {
    if ($(this).val() == 3) {
      $('#private-sector-loans').show();
      $('#payroll-loans').hide();
      $('#auto-loans').hide();
    }
    if ($(this).val() == 2) {
      $('#auto-loans').show();
      $('#private-sector-loans').hide();
      $('#payroll-loans').hide();    
    } 
    if ($(this).val() == 1) {
      $('#private-sector-loans').hide();
      $('#payroll-loans').show();
      $('#auto-loans').hide();
    }
  });
</script>


</x-guest-layout>
