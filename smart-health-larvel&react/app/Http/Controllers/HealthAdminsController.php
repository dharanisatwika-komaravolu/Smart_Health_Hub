<?php

namespace App\Http\Controllers;
use App\Models\HealthAdmins;

use Illuminate\Http\Request;

class HealthAdminsController extends Controller
{
    public function store(Request $request)
    {
        $healthadmin = HealthAdmins::create($request->all());
	    return response()->json($healthadmin, 201);
        //
    }

    public function index()
    {
        //
        return HealthAdmins::all();
    }

    public function updateHealthAdminProfile(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];
        $phoneno=$request['phoneno'];
        $address=$request['address'];
        HealthAdmins::where('id',$id)->update(['name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address]);
        return response()->json(null, 201);

    }
}
