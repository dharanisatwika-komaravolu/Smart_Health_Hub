<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilities;


class FacilitiesController extends Controller
{
    public function store(Request $request)
    {
        $doctor = Facilities::create($request->all());
	    return response()->json($doctor, 201);
        //
    }

    public function index()
    {
        //
        return Facilities::all();
    }
     
    public function deleteFacility (Request $request) {
        $id=$request['id'];
        Facilities::where('id',$id)->delete();
        return response()->json(null , 201);

    }
}
