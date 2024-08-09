<?php

namespace App\Http\Controllers;
use App\Models\Doctors;


use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function store(Request $request)
    {
        $doctor = Doctors::create($request->all());
	    return response()->json($doctor, 201);
        //
    }

    public function index()
    {
        //
        return Doctors::all();
    }

    
    public function updateDoctorProfile(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];
        $phoneno=$request['phoneno'];
        $address=$request['address'];
        Doctors::where('id',$id)->update(['name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address]);
        return response()->json(null, 201);

    }
}
