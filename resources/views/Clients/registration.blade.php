	@include('admin_top_menu')

	<!-- Validation Errors -->
	<x-auth-validation-errors class="mb-4" :errors="$errors" />




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Documents</div>

                <div class="card-body">
                    <form id="wizardForm" method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div id="step1" class="step">

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
										<option value="" selected><-select-></option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											
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
											<option selected><-select-></option>
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
													<option value="" selected><-select-></option>			      
													</select>
												</div>

											<!-- 	<div class="form-group col-md-4">
													<label for="marital_status">Payment Method</label>
													<select name="payment_method" id="payment_method" class="form-control">
														<option value="" selected></option>
								 							<option value="Mobile">Mobile</option>
															<option value="Bank">Bank</option>						
														</select>
													</div>	 -->			

												</div>

											<!-- 	<div class="form-row" id="mobile_view" style="display: none;">
													<div class="form-group col-md-4" >
														<label for="bank">Mobile Wallet</label>
														<select name="mobile_wallet_id" id="mobile_wallet_id" class="form-control" >
															<option value="" selected><-select-></option>
																		        	     
															</select>	
													</div>
													
												</div>
 -->
											<!-- 	<div class="form-row" id="bank_view" style="display: none;">
													<div class="form-group col-md-4" >
														<label for="bank">Bank</label>
														<select name="bank_id" id="bank_id" class="form-control" >
															<option value="" selected><-select-></option>
																
															</select>	
													</div>
													<div class="form-group col-md-4">
														<label for="inputEmail4">Account Number</label>
														<input type="number" name="bank_account_no" class="form-control" id="bank_account_no" placeholder="" >
													</div>
												</div> -->

                            <button class="btn btn-primary next">Next</button>
                        </div>
                       <!--  <div id="step2" class="step" style="display: none;">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button class="btn btn-primary prev">Previous</button>
                            <button class="btn btn-primary next">Next</button>
                        </div> -->

                        <div id="step3" class="step" style="display: none;">
                        	<div id="documents-container">
                        		<div class="card" style="box-shadow: 10px 10px 5px lightblue">
		                        	<div class="row col-md-12">
		                        		<div class="col-md-6">
		                        			<label for="document_type_1">Document Type</label>
				                                <select class="form-control" name="document_type[]" required >
				                                	<option value=""></option>
				                                		@foreach($document_type as $d)
																<option value="{{$d->id}}">{{$d->name}}</option>	
														@endforeach				                                   
				                                </select>
		                        		</div>
		                        		<div class="col-md-6">
		                        			 <label for="document_1">Document</label>
				                                <input type="file" class="form-control-file" name="documents[]" accept=".pdf, .doc, .docx" >

		                        		</div>

		                        	</div>
	                        	</div>
	                        </div>



                            <div class="container mt-5">
     							 <div id="documents-container col-md-12 row">
		                          <!--   <div class=" col-md-5">
		                                <label for="document_type_1">Document Type</label>
		                                <select class="form-control" name="document_type[]" id="document_type_1">
		                                    <option value="Type 1">Type 1</option>
		                                    <option value="Type 2">Type 2</option>
		                                   
		                                </select>
		                            </div>
		                            <div class=" col-md-5">
		                                <label for="document_1">Document</label>
		                                <input type="file" class="form-control-file" name="documents[]" id="document_1">
		                            </div> -->
		                        </div>

                        		<button type="button" class="btn btn-primary" id="add-document">Add Document</button>






                            <button class="btn btn-primary prev">Previous</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let documentIndex = 2; // Start index for document fields

        // Event listener for "Add Document" button
        document.getElementById('add-document').addEventListener('click', function () {
            const documentsContainer = document.getElementById('documents-container');
            // const newDocumentHTML = `
            //     <div class="form-group">
            //         <label for="document_type_${documentIndex}">Document Type</label>
            //         <select class="form-control" name="document_type[]" id="document_type_${documentIndex}">
            //             <option value="Type 1">Type 1</option>
            //             <option value="Type 2">Type 2</option>
            //             <!-- Add more options if needed -->
            //         </select>
            //     </div>
            //     <div class="form-group">
            //         <label for="document_${documentIndex}">Document</label>
            //         <input type="file" class="form-control-file" name="documents[]" id="document_${documentIndex}">
            //     </div>
            // `;
            const newDocumentHTML = `
                <div class="card" style="box-shadow: 10px 10px 5px lightblue">
		                        	<div class="row col-md-12">
		                        		<div class="col-md-6">
		                        			<label for="document_type_1">Document Type</label>
				                                <select class="form-control" name="document_type[]" required>
				                                	<option value=""></option>
				                                		@foreach($document_type as $d)
																<option value="{{$d->id}}">{{$d->name}}</option>	
														@endforeach				                                   
				                                </select>
		                        		</div>
		                        		<div class="col-md-6">
		                        			 <label for="document_1">Document</label>
				                                <input type="file" class="form-control-file" name="documents[]" accept=".pdf, .doc, .docx" required>

		                        		</div>

		                        	</div>
	                        	</div>
            `;
            const newDocumentContainer = document.createElement('div');
            newDocumentContainer.innerHTML = newDocumentHTML;
            documentsContainer.appendChild(newDocumentContainer);
            documentIndex++;
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll('.step');
        const prevBtns = document.querySelectorAll('.prev');
        const nextBtns = document.querySelectorAll('.next');

        let currentStep = 0;

        function showStep(step) {
            steps.forEach((step, index) => {
                step.style.display = index === currentStep ? 'block' : 'none';
            });
        }

        prevBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentStep--;
                showStep(currentStep);
            });
        });

        nextBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentStep++;
                showStep(currentStep);
            });
        });
    });
</script>






							<script type="text/javascript">

								$(document).ready(function() {

									// SHOW AND HIDE BANK INFORMATION
									$('select[name="payment_method"]').on('change', function() {
										val=$('#payment_method').val();											
										if (val=="Bank") {
											$('#bank_view').show();
											$('#mobile_view').hide();
										}
										else {
											$('#bank_view').hide();
											$('#mobile_view').show();
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





