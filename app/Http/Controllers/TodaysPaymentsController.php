<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\parcel;
use App\Models\User;
use Carbon\Carbon;
use DataTables;
class TodaysPaymentsController extends Controller
{
    //


    public function index(){

        
        return view('TodaysPayments.index');
    } 
    
    
    
    
    
    /**
         * Here follows the actions to be peformed by the Admin
         * Check Messages sent by users from the main website 
         * 
         * 
         * @param  \App\Http\Requests\Auth\LoginRequest  $request
         * @return \Illuminate\Http\RedirectResponse
         */
    
    public function todays_payments(){

        $data = Parcel::whereDate('parcels.created_at', Carbon::today())
         ->join('loans', 'loans.loan_code', '=', 'parcels.loan_id')
         ->join('users', 'users.code', '=', 'loans.client_code')
          ->select('parcels.amount_to_pay','parcels.created_at', 'users.*')
         ->get();

     
        return Datatables::of($data)
        ->addIndexColumn()  
        ->addColumn('name', function($data){
            return $data->firstname. ' '.$data->lastname;
        })  
        ->addColumn('phone', function($data){
            return $data->phone;
        })  
         ->addColumn('email', function($data){
            return $data->email;
        })  

         ->addColumn('amount_to_pay', function($data){
            return $data->amount_to_pay;
        })  
       
        ->addColumn('last_payment_date', function($data){
         return date('j, F-Y',strtotime($data->updated_at));
     })   

        ->addColumn('balance_due', function($data){
            $loan = Loan::where('loan_code',"=",$data->loan_code)->first();
            return (float)$data->amount_to_pay-(float)$data->amount_paid;
        })   




        ->rawColumns(['name','phone','email','parcel_amount','last_payment_date','balance_due'])
        ->make(true);
    }

    
    
}
