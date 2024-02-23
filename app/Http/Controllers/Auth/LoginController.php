<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
         return view('auth.login');
     }

 public function login(Request $request)
    {

       $loginInput = $request->input('login');
        $password = $request->input('password');

        // Determine if the login input is an email address
        $isEmail = filter_var($loginInput, FILTER_VALIDATE_EMAIL);

        $credentials = [
            $isEmail ? 'email' : 'code' => $loginInput,
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard');
        }
        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
       
    }

    public function destroySession(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        Session::flash('status','Welcome!!!. Login to check your Profile');
        return redirect('login');
   
    } 

 
}
