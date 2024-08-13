<?php

namespace App\Http\Controllers;
use App\Models\city;
use App\Models\barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index (){
        $barangays = barangay::get();
        return view('barangaytable', compact('barangays'));
    }

    public function create (){
        $cityData = city::get();
        return view('barangaystore', compact('cityData'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'city_id'=>'required'
        ]);

        barangay::create([
            'name'=>$request->name,
            'city_id'=>$request->city_id
        ]);

        return redirect('barangay');
    }
}
