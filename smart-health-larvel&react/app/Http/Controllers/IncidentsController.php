<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidents;

class IncidentsController extends Controller
{
    public function store(Request $request)
    {
        $doctor = Incidents::create($request->all());
	    return response()->json($doctor, 201);
        //
    }

    public function index()
    {
        //
        return Incidents::all();
    }

    public function updateAssignee(Request $request)
    {
        //
        $id=$request['id'];
        $assignee=$request['assignee'];
       
        Incidents::where('id',$id)->update(['assignee'=>$assignee]);
        return response()->json(null, 201);    }
}
