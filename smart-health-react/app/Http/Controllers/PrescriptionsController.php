<?php

namespace App\Http\Controllers;
use App\Models\Prescriptions;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{
    public function fetchPrescriptionsForPatient(Request $request)
    {
        $pid=$request->pid;
        $rec = Prescriptions::where('pid',$pid)->get();
        if (isset($rec[0])) {
            return response()->json($rec, 201);
        } else {
            return response()->json(null, 404);
        }

        //
    }

    public function store(Request $request)
    {
        $phr = Prescriptions::create($request->all());
	    return response()->json($phr, 201);
        //
    }

    public function savePresc(Request $request)
    {
        $phr = Prescriptions::insert($request->all());
	    return response()->json($phr, 201);
        //
    }
}
