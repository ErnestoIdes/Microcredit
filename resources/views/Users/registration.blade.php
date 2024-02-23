	@include('admin_top_menu')

	<!-- Validation Errors -->
	<x-auth-validation-errors class="mb-4" :errors="$errors" />

	<form method="POST" action="{{ route('users.store') }}">
		@csrf                  

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="firstname">Name</label>
				<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Name" required>
				@error('firstname')
	        		<span class="text-danger">{{ $message }}</span>
	    		@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="lastname">Surname </label>
				<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Surname" required>
				@error('lastname')
	        		<span class="text-danger">{{ $message }}</span>
	    		@enderror
			</div>			    
			<div class="form-group col-md-4">
				<label for="gender">Gender</label>
				<select name="gender" id="gender" class="form-control" required>
					<option value="" selected><--select--></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<!-- <option value="Others">Other</option> -->
				</select>
				 @error('gender')
	        		<span class="text-danger">{{ $message }}</span>
	    		@enderror
			</div>  
		</div>


			<div class="form-row">

				<div class="form-group col-md-4">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" id="email" placeholder="john@credit.mz">
					 @error('email')
	        		<span class="text-danger">{{ $message }}</span>
	    			@enderror
				</div>

				<div class="form-group col-md-4">
					<label for="inputEmail4">Contact</label>
					<input type="number" name="phone" class="form-control" id="phone" placeholder="841111111" required>
					 @error('contact')
	        		<span class="text-danger">{{ $message }}</span>
	    			@enderror
				</div>
				<div class="form-group col-md-4">
					<label for="marital_status">Marital Status</label>
					<select name="marital_status" id="marital_status" class="form-control" required>
						<option selected><--select--></option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Widowed">Widowed</option>
							<option value="Divorced">Divorced</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
				</div>

				<div class="form-row">

					<div class="form-group col-md-4">
						<label for="marital_status">Province</label>
						<select name="province_id" id="province_id" class="form-control" required>
							<option value="" selected></option>
								@foreach($provinces as $pr)
								<option value="{{$pr->id}}">{{$pr->name}}</option>		
								@endforeach			        	     
							</select>
						</div>


						<div class="form-group col-md-4">
							<label for="marital_status">District</label>
							<select name="district_id" id="district_id" class="form-control" required>
								<option value="" selected><--select--></option>			      
								</select>
							</div>

							<div class="form-group col-md-4">
								<label for="marital_status">Payment Method</label>
								<select name="payment_method" id="payment_method" class="form-control">
									<option value="" selected></option>
										<option value="Mobile">Mobile</option>
										<option value="Bank">Bank</option>						
									</select>
								</div>				

							</div>

							<div class="form-row" id="bank_view" style="display: none;">
								<div class="form-group col-md-4" >
									<label for="bank">Banco</label>
									<select name="bank_id" id="bank_id" class="form-control" >
										<option value="" selected><--select--></option>
											@foreach($banks as $b)
											<option value="{{$b->id}}">{{$b->name}}</option>		
											@endforeach			        	     
										</select>	
								</div>
								<div class="form-group col-md-4">
									<label for="inputEmail4">Account Number</label>
									<input type="number" name="bank_account_no" class="form-control" id="bank_account_no" placeholder="" >
								</div>

							</div>






								<!--Register now--> 
								<div class="flex items-center justify-end mt-4">
									<x-button class="ml-4">
										{{ __('Register') }}
									</x-button>
								</div>
							</form>



							<script type="text/javascript">

								$(document).ready(function() {

									// SHOW AND HIDE BANK INFORMATION
									$('select[name="payment_method"]').on('change', function() {
										val=$('#payment_method').val();											
										if (val=="Bank") {
											$('#bank_view').show();
										}
										else {
											$('#bank_view').hide();
										}										
										
									});
									// END SHOW AND HIDE BANK INFORMATION

									// GET DISTRICTS ON PROVINCE SELECT
									$('select[name="province_id"]').on('change', function() {
										var proID = $(this).val();
										if (proID) {
											$.ajax({
												headers: {
													'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
												},
												url: "../districts/" + proID,
												type: "GET",
												dataType: "json",
												success: function(data) {
													// console.log(data);
													$('select[name="district_id"]').empty();
													$("#district_id").append(
														"<option hidden value='' selected>Select</option>"
														);
													
													for (var i = 0; i < data.length; i++) {
														$("#district_id").append("<option value='" + data[i].id +
															"'>" + data[i].name + "</option>");
													}
												}
											});
										} else {
											$('select[name="district_id"]').empty();
											$("#district_id").append(
												"<option hidden value='' selected>Select</option>");
										}
									});
									// END GET DISTRICTS ON PROVINCE SELECT

								});
							</script>




								@include('admin_bottom_menu')

