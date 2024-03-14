<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\credit_rate;
class HomeController extends Controller
{
    //
    public function index(){
        $rates=credit_rate::all();
        return view('Welcome',compact("rates"));
    }


    public function create(){
        return view('CustomerProfile.change_password');   
    }

    public function store(Request $request){
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|confirmed',
           
        ]);


        $user_hashed_password = api_logins_mst::where('employee_id',"=",auth()->user()->employee_id)->firstOrFail();

        if (Hash::check($request->old_password,$user_hashed_password->password)) {
            $user_hashed_password->password = Hash::make($request->password);
            $user_hashed_password->save();
            toast('Your password has been changed successfully!','success');
            return redirect()->route('dashboard');
        } 
        
        else {
            toast('The old password is incorrect!','error');
            return redirect()->route('dashboard');
        }

       

         
    }
}
