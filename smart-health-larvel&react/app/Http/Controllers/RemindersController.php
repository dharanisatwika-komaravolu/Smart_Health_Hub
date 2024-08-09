<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminders;
use Illuminate\Support\Facades\DB;


class RemindersController extends Controller
{
    public function store(Request $request)
    {
        $phr = Reminders::create($request->all());
	    return response()->json($phr, 201);
        //
    }

    public function fetchRemindersForPatient(Request $request)
    {
        $pid=$request->pid;
        $rec = Reminders::where('pid',$pid)->get();
        if (isset($rec[0])) {
            return response()->json($rec, 201);
        } else {
            return response()->json(null, 404);
        }

        //
    }
    public function deleteReminder(Request $request) {
        $id=$request->id;
        Reminders::where('id',$id)->delete();
        return response()->json(null , 201);
    }
}
