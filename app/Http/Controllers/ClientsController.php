<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Province;
use App\Models\Bank;
// use App\Models\Wallet;
use App\Models\Document_Type;
use App\Models\Document;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


use DataTables;
use DateTime;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
         // return "";

        // $users = Users::select(['id', 'firstname', 'lastname', 'email', 'created_at', DB::raw('IF(deleted_at IS NOT NULL, true, false) AS is_deleted')])->get();
            // return $users;

            // ,  DB::raw('IF(deleted_at IS NOT NULL, true, false) AS is_deleted')
    return view('clients/clients');    
    }

    public function list()
    {

        $users = User::withTrashed()
        ->where('microcredit_id',1)
        ->select(['id','code', 'firstname', 'lastname', 'email', 'created_at', DB::raw('IF(deleted_at IS NOT NULL, "Deleted", "Active") AS is_deleted')]);

        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                  $op= "<div class='table-actions'>
                    <a href='" . route('clients.show', $user->id) . "' class='show-employee cursure-pointer'><i class='fas fa-eye text-primary'></i></a>";

                    // $op .= "<a href='" . route('clients.edit', $user->id) . "'><i class='fas fa-pencil text-dark'></i></a>";

                        if ($user->is_deleted=="Deleted") {
                            $op .= "<a  href='" . route('clients.active',  $user->id) . "' class='fa fa-trash text-success fa-lg'  '>&#x1F5D1;</a>";
                        }
                        if ($user->is_deleted=="Active") {
                            $op .= "<a data-toggle='modal' data-target='#confirmationModal'   data-url='" . route('clients.delete',  $user->id) . "' class='fa fa-trash text-danger fa-lg'  '>&#x1F5D1;</a>";
                        }

                    $op .= "</div>";

                        
                    
                    return $op;
            })
            ->make(true);
    }


    public function create()
    {
        $provinces = Province::select('id','name','short')->get();
        $banks = Bank::select('id','name')->get();
        $document_type = Document_Type::select('id','name')->get();
        // $wallet = Wallet::select('id','name')->get();
        return view('clients.registration',compact('provinces','banks','document_type'));    
    }
    public function profile(){

        return view('clients.profile');
    }
    

  
    public function store(Request $request)
    {
        $microcredit_id=Auth::user()->microcredit_id;
        $created_by_id=Auth::user()->id;

        $validator = $this->validateUser($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = new user;
        $user->Code = substr($request->firstname, 0, 1).substr($request->lastname, 0, 1) .$microcredit_id.date('s').date('m');

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->marital_status = $request->marital_status;
        $user->is_blacklisted = false;
        $user->province_id = $request->province_id;
        $user->district_id = $request->district_id;
        $user->address = $request->address;

        $user->bank_id = $request->bank_id;
        $user->bank_account_no = $request->bank_account_no;
         // $user->mobile_wallet_id = $request->mobile_wallet_id;

         $user->type = "Client";

        $user->payment_method = $request->payment_method;

        $user->microcredit_id = $microcredit_id;
        $user->created_by_id = $created_by_id;  
        $user->password = bcrypt("password"); 
        $user->save();  



        // Document
         $documents = $request->file('documents');
         $document_type = $request->document_type;

      

         for ($i=0; $i <sizeof($documents) ; $i++) { 

            $new_name=substr($request->firstname, 0, 1).date('s').date('m');


            $file=$documents[$i];
            $filename = $documents[$i]->getClientOriginalName();

            $file->move(public_path('documents'), $new_name."_".$filename);

             $doc =  Document::create([             
                'user_id' => $user->id,
                'name' => $new_name."_".$filename,
                'document_type_id' => $document_type[$i]
             
            ]);
             
           
         }

          return redirect('/clients/index');

    }

    protected function validateUser(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'mannumber' => 'nullable|string',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'phone' => 'required|string|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
        ]);
    }

    

    public function show($user_id)
    
    {
        //
        return view('clients.show',[
       'user' => user::find($user_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //
       return view('clients.edit',[
        'employee' => user::find($user)
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    
    {
       
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'mannumber' => 'nullable|string',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'phone' => 'required|string',
            'nrc' => 'required|string',
            'dob' => 'required|before:2005-01-01',
            'address' => 'required|string',
            'email' => 'required|email',
            'position' => 'nullable|string',
            'net_salary' => 'required|numeric',
            'bank_id' => 'required|string',
            'bank_branch' => 'required|string',
            'bank_account_number' => 'required|string',
            'bank_account_name' => 'required|string',
            'mobile_money_number' => 'required|string',
            'mobile_money_name' => 'required|string',            
        ]);
        //
       
    $personalDetails=reg_employee_mst::find($user);
    $personalDetails->firstname=$request->input('firstname');
    $personalDetails->lastname=$request->input('lastname');
    $personalDetails->mannumber=$request->input('mannumber');
    $personalDetails->dob=$request->input('dob');
    $personalDetails->gender=$request->input('gender');
    $personalDetails->nrc=$request->input('nrc');
    $personalDetails->marital_status=$request->input('marital_status');
    $personalDetails->phone=$request->input('phone');
    $personalDetails->address=$request->input('address');
    $personalDetails->email=$request->input('email');
    $personalDetails->position=$request->input('position');
    $personalDetails->net_salary=$request->input('net_salary');
    $personalDetails->bank_id=$request->input('bank_id');
    $personalDetails->bank_branch_id=$request->input('bank_branch');
    $personalDetails->bank_account_no=$request->input('bank_account_number');
    $personalDetails->bank_account_name=$request->input('bank_account_name');
    $personalDetails->mobile_money_no=$request->input('mobile_money_number');
    $personalDetails->mobile_money_name=$request->input('mobile_money_name');
    $personalDetails->type='Employee';
    $personalDetails->save();


    toast($request->input('firstname').'s Personal Details updated successfully!','success');
     return redirect()->back();
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($user_id)
    {
        $user = user::find($user_id);
        $user->delete();       
        toast('User has been trashed  successfully!','success');
        return redirect()->back();
        //
    } 

    public function active($user_id)
    {
        // Restore a single soft-deleted record
        $user = user::withTrashed()->find($user_id);
        $user->restore();
              
        toast('User has been Activated  successfully!','success');
        return redirect()->back();
        //
    }
}
