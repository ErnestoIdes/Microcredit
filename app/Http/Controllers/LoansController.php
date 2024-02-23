<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\credit_rate;
use App\Models\Payment;
use App\Models\Loan;
use App\Models\PaymentMethod;
use App\Models\Parcel;
use Illuminate\Support\Facades\Auth;

use DataTables;
use DateTime;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        return view('loans/index');
    }

    public function loan_history(Request $request){  

        
         // $data = Loan::where('employee_id',"=",auth()->user()->employee_id)->get();
         $data = Loan::All();
         return Datatables::of($data)
             ->addIndexColumn()  
             ->addColumn('loan_code', function($data){
                return $data->loan_code;
            })  
            
            ->addColumn('state', function($data){
                return '<span class="badge badge-info">'.$data->state.'</span>';
             
            }) 
           
             ->addColumn('amount', function($data){
                return $data->amount;
            }) 
             ->addColumn('amount_to_pay', function($data){
                 return $data->amount_to_pay;
             })
             ->addColumn('due_date', function($data){
                return $data->due_date;
            }) 
            ->addColumn('created_at', function($data){
                return date('j, F Y',strtotime($data->created_at));
            })  

             ->addColumn('paid', function($data){
                if($data->paid == false){
                    return '<span class="badge badge-danger">Not Paid</span>';
                    // return 0;
                }
                elseif($data->paid == true){
                    return '<span class="badge badge-success">Paid</span>';
                   
                }
              
             }) 

              ->addColumn('options', function($data){
                return '<span class="badge badge-info">'.$data->state.'</span>';
             
            }) 
            
             
           
             // ->rawColumns(['loan_code','amount'])

             ->rawColumns(['loan_code','amount','amount_to_pay','due_date','created_at','state','paid','options'])
             ->make(true);
     //}
 
 
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        $user=user::find($user_id);
        $rates=credit_rate::all();
       

        return view('loans/create',compact('user','rates'));
    }

  
    public function store(Request $request)
    {
        $this_user_id = Auth::user()->id;

          $user_id=$request->user_id;
          $amount=$request->amount;
          $credit_rate=$request->credit_rate;
          $amount_to_pay=$request->amount_to_pay;
          $parcel_amount=$request->parcel_amount;
          $parcel_date=$request->parcel_date;       
        
            $loan = new Loan; 
            $loan->loan_code="L".date('y').date('m').date('d').date('s').date('m');;
            $loan->state='Under Review';          
            $loan->rate=$credit_rate;
            $loan->amount=$amount;            
            // $loan->amount_paid=;
            $loan->amount_to_pay=$amount_to_pay;
            $loan->due_date=end($parcel_date);
            $loan->created_by_id=$this_user_id;
            $loan->save(); 


            for ($i=0; $i <sizeof($parcel_amount) ; $i++) { 
                $newUser =  Parcel::create([                
                'loan_id' => $loan->id,
                'amount_to_pay' => $parcel_amount[$i],
                'due_date' => $parcel_date[$i]               
                ]);

            }       

        toast('The Loan Analysis has been submitted for verification to the CFO Succesfully!','success');
        return redirect()->route('loans.index');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $loan_approval)
    {
        
        //
      $request->validate([
        'loan_number' => 'required|numeric',
        'cfo_decision' => 'required|string',
        'cfo_comments' => 'required|string'
      ]);  
       
      $loan_data = Approvals::find($loan_approval);
      $loan_data->update([
        'cfo_decision' => $request->cfo_decision == 'yes' ? 1 : 4, //1 For Yes and 4 for No
        'cfo_comments' => $request->cfo_comments
      ]);

 // Update Loan Status Based on the Chief Financial officers Analysis
 $loan_status = web_loan_application::where('loan_number',"=",$request->loan_number)->first();
 $loan_status->approved = $request->cfo_decision == 'yes' ? 7 : 8; // Status For Loan Approval/Denie From the CFO
 $loan_status->save();

 toast('The Loan Analysis has been submitted for verification to the ADMIN Succesfully!','success');
 return redirect()->route('review'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
