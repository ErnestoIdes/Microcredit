@include('top_menu')
<div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
          </ol>
        </nav>
      </div>
    </div>


<form action="{{route('customer_store_password')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="Old Pssword">Old Password</label>
    <input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control @error('old_password') is-invalid @enderror" placeholder="Enter old password">
    @error('old_password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <small id="old_password" class="form-text text-muted">Enter your current password here</small>
  </div>
  <div class="form-group">
    <label for="New Password">New Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="New Password">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="Repeat Password">Repeat Password</label>
    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" placeholder="Confirm New Password">
    @error('password_confirmation')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@include('bottom_menu')