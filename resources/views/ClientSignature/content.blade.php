<h3> E-Signature - Sign on the sign pad </h3>
<br>

@php 
    $user = auth()->user();
@endphp

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (!$user->hasBeenSigned())
<form action="{{ $user->getSignatureRoute() . '&id=' . $user->employee_id }}" method="POST">

        @csrf
        <div style="text-align: center">
        <x-creagia-signature-pad
      border-color="#eaeaea"
      pad-classes="rounded-xl border-2"
      button-classes="bg-gray-100 px-4 py-2 rounded-xl mt-4"
      clear-name="Clear"
      submit-name="Submit"
  />
        </div>
    </form>
    <script src="{{ asset('vendor/sign-pad/sign-pad.min.js') }}"></script>
@endif
