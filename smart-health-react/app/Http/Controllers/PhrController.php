<?php

namespace App\Http\Controllers;
use App\Models\Phr;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PhrController extends Controller
{
    public function store(Request $request)
    {
        $phr = Phr::create($request->all());
	    return response()->json($phr, 201);
        //
    }

    public function index()
    {
        //
        return Phr::all();
    }

    public function updatePhr(Request  $request){
        $pid=$request['pid'];
        $rec = Phr::where('pid',$pid)->get();
        $height = $request['height'];
        $weight = $request['weight'];
        $bmi = $request['bmi'];
        $bp = $request['bp'];
        $sugar = $request['sugar'];
        $bloodgroup = $request['bloodgroup'];
        $dob = $request[ 'dob'];
        $age = $request['age'];

        if(isset($rec[0])){
            Phr::where('pid',$pid)->update(['height'=>$height,'weight'=>$weight,'bmi'=>$bmi,'bp'=>$bp,'sugar'=>$sugar,'bloodgroup' => $bloodgroup,'dob' => $dob,'age' => $age]);
        } else {
            DB::table('phrs')->insert(['height'=>$height,'weight'=>$weight,'bmi'=>$bmi,'bp'=>$bp,'sugar'=>$sugar,'bloodgroup' => $bloodgroup,'dob' => $dob,'age' => $age,'pid' => $pid]); 

        }
    }
}
