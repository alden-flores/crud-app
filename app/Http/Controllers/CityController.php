<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //Table view of the stored Cities
    public function index(){
        return view('citytable');
    }
    //Route to the form to store cities
    public function create(){
        return view('citystore');
    }
    //Function that first validates the POST request
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        
        //This method explicitly declares which values to be added in the Insert statement of the city table
        city::create([
            'name' => $request->name
        ]);
      
        return redirect('city');
    }
}
