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

    public function edit(int $id){
        $barangay = barangay::findOrFail($id);
        $cityData = city::get();
        return view('barangayedit', compact('barangay', 'cityData'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name'=>'required',
            'city_id'=>'required'
        ]);

        barangay::findOrFail($id)->update([
            'name'=> $request->name,
            'city_id'=> $request->city_id
        ]);

        return redirect('/barangay');
    }

    public function view(int $id){
        $barangay = barangay::findOrFail($id);

        echo "Name: ". $barangay->name ."<br>";
        echo "City: ". $barangay->cityName->name. "<br>";
        echo "<a href='/barangay'>Back</a>";
    }

    public function delete(int $id){
        $barangay = barangay::findOrFail($id);
        $barangay->delete();
        return redirect('/barangay');
    }
}
