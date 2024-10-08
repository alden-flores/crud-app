<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //Table view of the stored Cities
    public function index(){

        $cities = city::get();
        return view('citytable', compact('cities'));
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

    public function edit(int $id){
        $city = city::findOrFail($id);
        return view('cityedit', compact('city'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name'=>'required'
        ]);

        //First validate if ID exists, then invoke update function to specific parameters
        city::findOrFail($id)->update([
            'name' => $request->name
        ]);

        return redirect('/city');
    }

    public function view(int $id){
        //In hindsight I don't think I needed to make another view for this
        $city = city::findOrFail($id);
        return view('cityview', compact('city'));
    }

    public function delete(int $id){
        //Find the value being deleted that has matching ID
        $city = city::findOrFail($id);
        //Invoke delete method to delete entry
        $city->delete();
        return redirect('/city');
    }
}
