<?php

namespace App\Http\Controllers;
use App\Models\Admins;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function store(Request $request)
    {
        $admin = Admins::create($request->all());
	    return response()->json($admin, 201);
        //
    }

    public function index()
    {
        //
        return Admins::all();
    }

    public function updateAdminProfile(Request $request)
    {
        $id=$request['id'];
        $name=$request['name'];
        $email=$request['email'];
        $phoneno=$request['phoneno'];
        $address=$request['address'];
        Admins::where('id',$id)->update(['name'=>$name,'email'=>$email,'phoneno'=>$phoneno,'address'=>$address]);
        return response()->json(null, 201);

    }
}
