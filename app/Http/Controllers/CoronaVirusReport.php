<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\patient;
use App\Models\barangay;
use Illuminate\Http\Request;

class CoronaVirusReport extends Controller
{
    public function index(){

        //these two variables obtain the data from the city and barangay table 
        $city = city::get();
        return view('coronavirusreport',compact('city'));
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
        $covPosList = patient::where('brgy_id',$request->brgy)->where('case_type','covidPositive')->get();
        $covActiveList = patient::where('brgy_id',$request->brgy)->where('coronavirus_status','active')->get();
        $covRecoveredList = patient::where('brgy_id',$request->brgy)->where('coronavirus_status','recovered')->get();
        $covDeathList = patient::where('brgy_id',$request->brgy)->where('coronavirus_status','death')->get();
        
        //this grabs the count of people that fulfill the number of listed people with the given fields
        $covPosNum = $covPosList->count();
        $covActiveNum = $covActiveList->count();
        $covRecoveredNum = $covRecoveredList->count();
        $covDeathNum = $covDeathList->count();
        
     
     
        return view('coronavirusreportresult', compact('covPosNum','covActiveNum','covRecoveredNum','covDeathNum'));
    }
}
