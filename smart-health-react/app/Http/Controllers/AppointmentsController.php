<?php

namespace App\Http\Controllers;
use App\Models\Appointments;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function store(Request $request)
    {
        $appointment = Appointments::create($request->all());
	    return response()->json($appointment, 201);
        //
    }

    public function fetchAppointmentsForPatient(Request $request)
    {
        $pid=$request->pid;
        $rec = Appointments::where('pid',$pid)->get();
        if (isset($rec[0])) {
            return response()->json($rec, 201);
        } else {
            return response()->json(null, 404);
        }

        //
    }

    public function fetchAppointmentsForDoctor(Request $request)
    {
        $did=$request->did;
        $rec = Appointments::where('did',$did)->get();
        if (isset($rec[0])) {
            return response()->json($rec, 201);
        } else {
            return response()->json(null, 404);
        }

        //
    }

    public function UpdateScheduleDate(Request $request)
    {
        $id=$request->id;
        $appointmentDate=$request->appointmentDate;
        Appointments::where('id',$id)->update(['appointmentDate'=>$appointmentDate]);
       
            return response()->json(null, 201);
    }

    public function deleteById(Request $request)
    {
        $id=$request->id;
        Appointments::where('id',$id)->delete();
        return response()->json(null , 201);
    }
}
