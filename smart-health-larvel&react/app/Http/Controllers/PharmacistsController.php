<?php

namespace App\Http\Controllers;
use App\Models\Pharmacists;


use Illuminate\Http\Request;

class PharmacistsController extends Controller
{
    public function store(Request $request)
    {
        $pharmacist = Pharmacists::create($request->all());
	    return response()->json($pharmacist, 201);
        //
    }

    public function index()
    {
        //
        return Pharmacists::all();
    }

    public function updatePharmacistProfile(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];
        $phoneno=$request['phoneno'];
        $address=$request['address'];
        Pharmacists::where('id',$id)->update(['name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address]);
        return response()->json(null, 201);

    }

}
