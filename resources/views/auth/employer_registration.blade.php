<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />

                <center>
                  <br>
<div style="font-weight:bolder;font-size:16px; color:black">Loan Firm Registration</div>
</center>

            </a>
        </x-slot>

        <style>
input[type], input[type=number]  {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>



        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf                  

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Business Name</label>
      <input type="text" name="business_name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Business Email</label>
      <input type="text" name="business_email" class="form-control" id="inputPassword4" placeholder="Napsa">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Business Number</label>
      <input type="number" name="business_phone_number" class="form-control" id="inputEmail4" placeholder="Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">TPIN</label>
      <input type="text" name="business_tpin_number" class="form-control" id="inputPassword4" placeholder="Tpin">
    </div>
  </div>


  <div class="form-group">
    <label for="inputAddress">Physical Address</label>
    <input type="text" name="business_physical_address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email address (CEO)</label>
    <input type="text" name="ceo_email" class="form-control" id="inputAddress2" placeholder="marydoe@example.com">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Entry Mode</label>
      <select name="license" id="inputState" class="form-control">
        <option selected><--select--></option>
        <option>Trial</option>
        <option>Pay</option>
      </select>
    </div>
</div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">password</label>
      <input type="password" name="password" class="form-control" id="inputEmail4" placeholder="Atleast 8 charcters long">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">confirm password</label>
      <input type="password" name="password_confirmation" class="form-control" id="inputPassword4" placeholder="confirm password">
    </div>
  </div>






 <!--Register now--> 
 <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
</form>


       
</x-auth-card>  
</x-guest-layout>
