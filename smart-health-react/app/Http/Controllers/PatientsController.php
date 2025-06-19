<?php

namespace App\Http\Controllers;
use App\Models\Patients;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function store(Request $request)
    {
        $patient = Patients::create($request->all());
	    return response()->json($patient, 201);
        //
    }

    public function index()
    {
        //
        return Patients::all();
    }

    
    public function updatePatientProfile(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];
        $phoneno=$request['phoneno'];
        $address=$request['address'];
        Patients::where('id',$id)->update(['name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address]);
        return response()->json(null, 201);

    }
}
