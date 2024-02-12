
<h3>Upload Settlement Form</h3>
@include('sweetalert::alert')
<br>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<form action="{{route('settlements.store')}}" method="post" enctype="multipart/form-data">
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
    <label for="Transaction-ID">Settlement File (PDF)<small class="text-danger">*</small></label>
    <input type="file" value="{{ old('settlement_file') }}" name="settlement_file" class="form-control @error('settlement_file') is-invalid @enderror" >
    @error('settlement_file')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">UPLOAD</button>
</form>
</div>