<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\barangay;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patientData = patient::get();
        return view('patienttable', compact('patientData'));
    }

    public function create(){
        $brgyData = barangay::get();
        return view('patientstore', compact('brgyData'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'brgy' => 'required',
            'number' => 'required',
            'email' => 'nullable',
            'caseType' => 'required',
            'coronavirus' => 'nullable'
        ]);
        
        patient::create([
            'name'=>$request->name,
            'brgy_id'=>$request->brgy,
            'email'=>$request->email,
            'number'=>$request->number,
            'case_type'=>$request->caseType,
            'coronavirus_status'=>$request->coronavirus
        ]);

        return redirect('/patient');

    }

    public function edit (int $id){
        $brgyData = barangay::get();
        $patient = patient::findOrFail($id);
        return view ('patientedit',compact('brgyData','patient'));
    }

    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required',
            'brgy' => 'required',
            'number' => 'required',
            'email' => 'nullable',
            'caseType' => 'required',
            'coronavirus' => 'nullable'
        ]);

        patient::findOrFail($id)->update([
            'name'=>$request->name,
            'brgy_id'=>$request->brgy,
            'email'=>$request->email,
            'number'=>$request->number,
            'case_type'=>$request->caseType,
            'coronavirus_status'=>$request->coronavirus
        ]);

        return redirect('/patient');
    }

        public function delete(int $id){
            $patient = patient::findOrFail($id);

            $patient->delete();

            return redirect('/patient');
        }

        public function view(int $id){
          
                $patient = patient::findOrFail($id);
        
                echo "Name: ". $patient->name ."<br>";
                echo "Brgy:  ". $patient->barangayName->name. "<br>";
                echo "Number:  ". $patient->number. "<br>";
                echo "Email:  ". $patient->email. "<br>";
                echo "Case Type:  ". $patient->case_type. "<br>";
                echo "<a href='/patient'>Back</a>";
            
        }
}
