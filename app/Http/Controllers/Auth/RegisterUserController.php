<?php

namespace App\Http\Controllers\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\users;
// use App\Models\reg_employee_attachment;
// use App\Models\web_loan_application;
// use App\Models\website_profile;
// use App\Models\api_logins_mst;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection ;
class RegisterUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.auto_loans');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
               
        $request->validate([
            // 'loan_amt' => ['required', 'numeric','max:25000'],
            // 'tenure_months' => ['required', 'numeric'],
            // 'lower_facility_fee' => ['required', 'numeric'],
            // 'higher_facility_fee' => ['required', 'numeric'],
            // 'total_repayments_amt' => ['required', 'numeric'],
            // 'emi' => ['required', 'numeric'],
            'firstname' => ['required', 'string','max:255'],
            'lastname' => ['required', 'string','max:255'],
            // 'email' => ['required', 'email','unique:reg_employee_mst'],
            'phone' => ['required', 'string'],
            'province' => ['required', 'string'],
            'address' => ['required', 'string'],
            // 'account_number' => ['required', 'string','max:255'],
            // 'momo_name' => ['required', 'string','max:255'],
            // 'mobile_money_number' => ['required', 'string'],
            // 'nextofkin_firstname' => ['required', 'string','max:255'],
            // 'nextofkin_lastname' => ['required', 'string','max:255'],
            // 'nextofkin_number' => ['required', 'string'],
            // 'nextofkin_address' => ['required', 'string','max:255'],
            // 'next_of_kin_relationship' => ['required', 'string','max:255'],
            // 'whitebook' => ['required', 'mimes:png,jpeg','max:10200','max:10200'], //10mb Max
            
            'password' => ['required', 'confirmed',Rules\Password::defaults()],
        ],
        [
            // 'loan_amt.max' => 'Loan amount for auto loans cannot exceed K25000 for first-time clients.',
            // 'dob.before' => 'The date of birth must be before 1st January 2005',
			'email.unique' => "You are already a client, just Log In and apply.",
			'phone.unique' => 'Only first time clients needs to do this. Returning clients just needs to log in and apply',
			
		]);
           
         


        // Save User
        $user = new reg_employee_mst;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->is_blacklisted = $request->is_blacklisted;
        $user->province_id = $request->province_id;
        $user->district_id = $request->district_id;
        $user->address = $request->address;

        $user->bank_id = $request->bank_id;
        $user->bank_account_no = $request->bank_account_no;

        $user->payment_method = $request->payment_method;

        $user->microcredit_id = $request->microcredit_id;
        $user->created_by_id = $request->created_by_id;  
        $user->password = Hash::make($request->password);      
           
        $user->save();  

        Alert::success('Success Loan Application', 'Your Loan has been submitted successfully. Wait for the email confirmation once approved!');  
 return redirect('/');  

       
          

// Add Loan

/**
 * Generate the Loan Number in the system and save it in the database
 * If the Loan Number exists in the database tell the user to resubmit
 * 
**/
// $number = random_int(1000000000, 9999999999);
// $loannumber = $user->employee_id.$number;

// if(web_loan_application::where('loan_number',"=",$loannumber)->exists()){
//     toast('Whoops something went wrong, try again!','error');
//     return redirect('/');     


// } 


/**
* Check if the user has already submitted a loan. 
* If Yes Denie application and redirect back with Msg.
* 
**/

// elseif (web_loan_application::where('employee_id',"=",$user->employee_id)->exists()){
      
//  toast('It seems You have a pending Loan. First settle this Loan then you can apply later!','error');
//  return redirect('/');   

// } 

 
/**
* Proceed with Loan submission if the above two conditions  
* are not met and everything is ok.
* 
**/



// else{

//  $loan_application= new web_loan_application;
//  $loan_application->loan_type = 2;// $request->loan_type;
//  $loan_application->employee_id = $user->employee_id;
//  $loan_application->months = $request->tenure_months;
//  $loan_application->amount = $request->loan_amt;
//  $loan_application->loan_amount = $request->total_repayments_amt;
//  $loan_application->emi = $request->emi;
//  $loan_application->asset_estimate = $request->asset_estimate;
//  $loan_application->asset_name = $request->asset_name;
//  $loan_application->asset_location = $request->asset_location;
//  //$loan_application->payment_mode = $request->payment_mode_id;
//  $loan_application->mobile_money_number = $request->mobile_money_number;
//  $loan_application->mobile_monney_name = $request->momo_name;
//  $loan_application->loan_number = $loannumber;
//  $loan_application->whitebook = $request->whitebook->store('whitebooks');
//  $loan_application->front_image = $request->front_image->store('front_images');
//  $loan_application->back_image = $request->back_image->store('back_images');
//  $loan_application->left_image = $request->left_image->store('left_images');
//  $loan_application->right_image = $request->right_image->store('right_images');
//  $loan_application->chassis_number = $request->chassis_number->store('chassis_number_images');
//  $loan_application->mileage = $request->mileage->store('mileage_images');
//  $loan_application->bank_statement = $request->bank_statement->store('bank_statement');
//  $loan_application->approved = 0;
//  $loan_application->due_date = Carbon::now()->addMonths($request->tenure_months)->format('d-m-Y');
//  $loan_application->save();



//  //Submiting NRC File in reg_employee_attachments 
//  //$attachments_nrc = reg_employee_mst::find(decrypt($id));
//  $nrc = new reg_employee_attachment;
//  $nrc->attachment_name=$request->nrc_file->store('nrc');
//  $nrc->document_type_id=1;
//  $user->reg_employee_attachment()->save($nrc);


//  // Submitting Passport Photo 
//  $user->profilepic = $request->passport_photo->store('passportphoto');
//  $user->save();

//  Alert::success('Success Loan Application', 'Your Loan has been submitted successfully. Wait for the email confirmation once approved!');  
//  return redirect('/');     
 
// }






      //Authenticate and Log In the user to the dashboard now


     event(new Registered($user));
        

     Auth::login($user);



   return redirect(RouteServiceProvider::HOME);

    }
}
