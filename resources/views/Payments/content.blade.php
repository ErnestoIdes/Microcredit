
<h3>Payments Updates</h3>

<br>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<form action="{{route('payments.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="Loan Number">Loan Number<small class="text-danger">*</small></label>
    <input type="number" value="{{ old('loan_number') }}" name="loan_number" class="form-control @error('loan_number') is-invalid @enderror" placeholder="Enter Loan Number">
    @error('loan_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <small class="form-text text-muted">Enter valid Loan Number</small>
  </div>
  <div class="form-group">
    <label for="Transaction-ID">Amount<small class="text-danger">*</small></label>
    <input type="text" value="{{ old('loan_amount') }}" name="loan_amount" class="form-control @error('loan_amount') is-invalid @enderror" placeholder="Enter Amount">
    @error('loan_amount')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="Transaction-ID">Transaction-ID<small class="text-danger">*</small></label>
    <input type="text" value="{{ old('transaction_id') }}" name="transaction_id" class="form-control @error('transaction_id') is-invalid @enderror" placeholder="Transaction-ID">
    @error('transaction_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="Reference-Number">Reference-Number<small class="text-danger">*</small></label>
    <input type="text" value="{{ old('reference_number') }}" name="reference_number" class="form-control @error('reference_number') is-invalid @enderror" placeholder="Reference-Number">
    @error('reference_number')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
  
                          <label for="payment_method">Payment Method<small class="text-danger">*</small></label>
                          <select value="{{ old('payment_method') }}" class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" id="is_active" name="is_active">
                            <option value="">Choose</option>
                            <option value="PEMIC">PEMIC</option>
                            <option value="Airtel Wallet (USSD)">Airtel Wallet (USSD)</option>
                            <option value="MTN Wallet (USSD)">MTN Wallet (USSD)</option>
                            <option value="Zamtel Wallet (USSD)">Zamtel Wallet (USSD)</option>
                            <option value="Bank">Bank</option>
                            <option value="Cheque">Cheque</option>
                            <option value="Cash">Cash</option>
                          </select>
                        </div>
                        @error('payment_method')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>