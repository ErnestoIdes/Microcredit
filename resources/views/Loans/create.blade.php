@if(Auth::user()->type=='Admin')
    @include('admin_top_menu')
@endif

@if(Auth::user()->type=='Employee')
    @include('top_menu')
@endif
	<x-guest-layout>
		<center>
			<h5>REQUEST LOAN</h5>
			<br>
		</center>

		<div class="shadow p-3 mb-5 bg-white rounded">

			<!-- Validation Errors -->
			<x-auth-validation-errors class="mb-4" :errors="$errors" />




			<div id="payroll-loans" >
				<form method="POST" action="{{route('loans.store')}}"  enctype="multipart/form-data">
					@csrf

					<!-- Loan Type -->
					<x-input id="name" class="block mt-1 w-full" type="hidden"  value=1 name="loan_type"  readonly/>

					<!-- Employee Id -->

					<x-input id="user_id" class="block mt-1 w-full" type="hidden"  value='{{$user->id}}' name="user_id"  readonly/>



						<!-- Tenure Months -->
						<div class="mt-4 row">
							<div class="col-sm-4">
								<label for="amount">Loan Amount (MZN)</label> <small class="text-danger">*</small>

								<x-input id="amount" class="block mt-1 w-full" type="number" onkeyup="calculateEMIPrivate()" id="amount" value="{{ old('amount') }}" name="amount"  />
								<!-- <small>The facility fee of K100 will be added.</small>    -->

							</div> 

							<div class="col-sm-4">
								<label for="How Many Months">How Many Months </label> <small class="text-danger">*</small>
								<!--Show the number of months to the user--> 
								<select class="block mt-1 w-full" onchange="calculateEMIPrivate()" value="{{ old('tenure_months') }}" name="months" id="months" required>
									<option value=""></option>
									@foreach($rates as $r)
										<option value={{$r->rate}}> {{$r->quant_month}}</option>
									@endforeach
									
								</select>						
							</div> 						


							<div class="col-sm-4">
								<label for="Credit Rate(MZN)">Credit Rate %</label>
								<x-input id="name" class="block mt-1 w-full" type="number" id="credit_rate" value="" name="credit_rate" readonly />
							</div> 						

						</div> 


						<!-- Loan Amount -->
						<div class="mt-4">
							<label for="Loan Amount (ZMW)">Amount To Pay (MZN)</label> <small class="text-danger">*</small>

							<x-input id="amount_to_pay" class="block mt-1 w-full" type="number" value="" name="amount_to_pay" readonly />
							<small>Total Amount To Pay With The Rate Included.</small>   
						</div> 

						<br>


						<div class="mt-4 row" style="box-shadow: 3px 10px 10px 5px lightblue; margin: 20px;" id="parcels">

							<div class="col-sm-6">
								<div class="form-group">
									<label for="parcel_amount">Parcel 1 Amount</label>
									<input type="number" name="parcel_amount[]" value="" class="form-control"  id="parcel_amount">
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<label for="company_percentage">Parcel 1 Due Date</label>
									<input type="date" name="parcel_date[]" value="" class="form-control"  id="parcel_date">
								</div>
							</div>



						</div>



						<br>
						<!-- Loan Application Submitt -->



						<button class="btn btn-primary">
							{{ __('Save Proposal') }}
						</button>



					</form>

				</div>



				<script>

					function calculateEMIPrivate() {
						
						var months=$("#months option:selected").text();
						var credit_rate=$("#months").val();
						var amount=Number($("#amount").val());

						$("#credit_rate").val(credit_rate);// setting value on the input

						// alert($months);
						total_to_pay=Number(amount+(amount*(credit_rate/100)))

						$("#amount_to_pay").empty();// setting value on the input
						$("#amount_to_pay").val(total_to_pay);// setting value on the input


						$("#parcels").empty();// setting value on the input
						parcel_value=total_to_pay/months;
						for (var i = 0; i < months; i++) {

							var date = new Date();
					    var dd = date.getDate();             
					    // var mm = date.getMonth() + (i+1);
					    var mm =  String(date.getMonth() + (i+2)).padStart(2, '0');
					    var yyyy = date.getFullYear();
					    var newDate = yyyy + '-' + mm + '-' + dd ;


							$("#parcels").append(`
								<div class="col-sm-6">
								<div class="form-group">
									<label for="parcel_amount">Amount - Parcel `+(i+1)+` </label>
									<input type="number" name="parcel_amount[]" value="`+(parcel_value.toFixed(2))+`" class="form-control"  id="parcel_amount" readonly>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="company_percentage">Due Date - Parcel `+(i+1)+` </label>
									<input type="date" name="parcel_date[]" value="`+newDate+`" class="form-control"  id="parcel_date">
								</div>
							</div>
							<div><hr style="box-shadow: 3px 10px 10px 5px lightblue;"></div>`);
							
						}		



					}

					// function InitializeDate() {
					//     var date = new Date();
					//     var dd = date.getDate();             
					//     var mm = date.getMonth() + 1;
					//     var yyyy = date.getFullYear();

					//     var ToDate = mm + '/' + dd + '/' + yyyy;
					//     var FromDate = mm + '/01/' + yyyy;
					//     $('#txtToDate').datepicker('setDate', ToDate);
					//     $('#txtFromDate').datepicker('setDate', FromDate);
					// }
				</script>


			</div>










		</x-guest-layout>

		@include('bottom_menu')





