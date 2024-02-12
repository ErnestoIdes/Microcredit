<x-guest-layout>
         
<div class="shadow p-3 mb-5 bg-white rounded">
    <center>
       <h5>SETTLE PAYMENTS</h5>
    </center>
    <br>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('collectionsPost') }}">
            @csrf


<!-- Amount -->
<div class="mt-4">
                <x-label for="amount" :value="__('Enter Amount')" />

                <x-input id="amount" class="block mt-1 w-full" type="number" name="amount"  required />
            </div>



            
<!-- Phone Number -->
<div class="mt-4">
                <x-label for="phone_number" :value="__('Enter Phone Number')" />

                <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number"  required />
            </div>

            
            <!-- Reference -->
            <div class="mt-4">
                <x-label for="reference" :value="__('Purpose of Payment')" />

                <x-input id="reference" class="block mt-1 w-full" type="text" name="reference"  required />
            </div>


        

         
            <div class="flex items-center justify-end mt-4">
              
                <x-button class="ml-4">
                    {{ __('Make Payments') }}
                </x-button>
            </div>
        </form>
</div>
</x-guest-layout>
