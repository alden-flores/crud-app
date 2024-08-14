<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\patient;
use App\Models\barangay;
use Illuminate\Http\Request;

class AwarenessReport extends Controller
{
    public function index(){

        //these two variables obtain the data from the city and barangay table 
        $city = city::get();
        return view('awarenessreport',compact('city'));
    }

    public function getbrgy(Request $request){
        
        $brgyID = barangay::select('name','id')->where('city_id',$request->id)->take(100)->get();

        return response()->json($brgyID);
    }

    public function genReport (Request $request){
        $request->validate([
            'brgy' => 'required'
        ]);

        //this section here first makes queries on the patients table whos brgy = to the inputted form
        $puiList = patient::where('brgy_id',$request->brgy)->where('case_type','PUI')->get();
        $pumList = patient::where('brgy_id',$request->brgy)->where('case_type','PUM')->get();
        $covPosList = patient::where('brgy_id',$request->brgy)->where('case_type','covidPositive')->get();
        $covNegList = patient::where('brgy_id',$request->brgy)->where('case_type','covidNegative')->get();
        
        //this grabs the count of people that fulfill the number of listed people with the given fields
        $puiNum = $puiList->count();
        $pumNum = $pumList->count();
        $covPosNum = $covPosList->count();
        $covNegNum = $covNegList->count();
     
        return view('awarenessreportresult', compact('puiNum','pumNum','covPosNum','covNegNum'));
    }
}
