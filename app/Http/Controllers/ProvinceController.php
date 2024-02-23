<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\Administration\Country;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProvinceController extends Controller
{
   
    public function index()
    {
        // $countries = Country::select('id','name','is_active')->where('is_active',true)->get();
        $provinces = Province::select('id','name','short')->get();

        // return view('app.Administration.Admin.var.province', compact('countries','provinces'));
        return view('app.Administration.Admin.var.province.province')->with(['provinces'=> $provinces]);

       
    }

    public function getProvinces()
    {
         $provinces = Province::select('id','name')->get();

        return response()->json($provinces);
    }


    public function create()
    {
        return 'province forms';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'          =>      'required|unique:provinces|string|max:45',
                // 'country_id'    =>      'required|integer',
                'short'         =>      'string|max:4',

            ],[
                'name.required' =>'O Nome da Provincia  Obrigatório',
                'name.unique'=>'O nome já exite, e não se pode repitir'
               
    
            ]
        );

        $province = new Province();

        // $province->country_id = $request->input('country_id');
        $province->name = $request->input('name');
        $province->short = $request->input('short');

        $province->save();

        Session::flash('success', 'added province info successfully');
        return back()->with('success', 'added province info successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $province = Province::find($id);

        return response()->json($province);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit forms go here';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name'          =>      'required|string|max:45',
                // 'country_id'    =>      'required|integer',
                'short'         =>      'string|max:4',

            ]
        );
 
        $province = Province::find($id);

        // $province->country_id = $request->input('country_id');
        $province->name = $request->input('name');
        $province->short = $request->input('short');

        // return $province->name." & ".$province->short; 

        $province->save();

        Session::flash('success', 'province Updated Successfully...');
        return back()->with('success', 'province Updated Successfully...');
    }

   
    public function destroy($id)
    {
        // return $id;
        $province = Province::find($id);

        $province->delete();

        Session::flash('success', 'province Deleted Successfully...');
        return back()->with('success', 'Province Deleted Successfully...');

    }

  
   

}
