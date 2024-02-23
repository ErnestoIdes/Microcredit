<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\Administration\Country;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $countries = Country::select('id','name','is_active')->where('is_active',true)->get();
        $provinces = Province::select('id','name')->get();
        $districts = District::
        orderBy('is_active', 'DESC')
        ->orderBy('province_id', 'ASC')
        // ->where('is_active','=', '1')
        ->get();

        return view('app.Administration.Admin.var.district')->with(['provinces'=> $provinces, 'districts'=>$districts]);


        return response()->json($districts);
    }  

    public function getDistricts($province_id)
    {
        // $countries = Country::select('id','name','is_active')->where('is_active',true)->get();
        $districts = District::select('id','name')
        ->where('province_id',$province_id)
        ->get();  

        return response()->json($districts);
    }

   
    public function create()
    {
        // return 'create deitrict forms go here';
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'name'          =>      'required|string|max:45',
                // 'country_id'    =>      'required|integer',
                'province_id'    =>      'required|integer',
                'code'         =>      'string|max:4',
            ]
        );

        $district = new  District();
        
        // $district->country_id = $request->input('country_id');
        $district->province_id = $request->input('province_id');
        $district->name = $request->input('name');
        $district->code = $request->input('code');
        

        $district->save();

        Session::flash('success', 'district created Successfully...');
        return back()->with('success', 'district created Successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $district = District::find($id);

        return response()->json($district);
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
                'province_id'    =>      'required|integer',
                'code'         =>      'string|max:4',

            ]
        );
        // return $request->all();

        $district = District::find($id);

        // $district->country_id = $request->input('country_id'.$id);
        $district->province_id = $request->input('province_id'.$id);
        $district->name = $request->input('name');
        $district->code = $request->input('code');

        $district->save();

        Session::flash('success', 'district updated Successfully...');
        return back()->with('success', 'district updated Successfully...');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::find($id);
        $district->delete();

        Session::flash('success', 'district Deleted Successfully...');
        return back()->with('success', 'district Deleted Successfully...');
    }


    ################################
    ## ADITIONAL LINKS START HERE ##
    ################################

    public function active(Request $request, $id){

    // return 'i can work in resource controller';

    $district = District::find($id);

        if ($district->is_active == true) {
            $district->is_active = 0;
            $district->save();

            Session::flash('success', 'Disctrict is active.');
            return back()->with('success', 'Disctrict is active.');
        } else {
            $district->is_active = 1;
            $district->save();

            Session::flash('success', 'Disctrict is active.');
            return back()->with('success', 'Disctrict is active.');
        }

    // return response()->json($district);
    // return $district->name.' is now '.$district->is_active;

    
    }
}
