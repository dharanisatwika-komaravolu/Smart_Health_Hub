<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MessagesController extends Controller
{
    public function store(Request $request)
    {

        $message = Messages::create($request->all());
	    return response()->json($message, 201);
        //
    }


  
 

    public function getUserMessages(Request $request)
    {
        $userid = $request->userid;
		$touser = $request->touser;

        $messages = DB::table('messages')
        ->where([['userid', '=', $userid],['touser','=',$touser]])
        ->orwhere([['userid', '=', $touser],['touser','=',$userid]])
        ->orderBy('created_at', 'asc')
        ->get();
	    return response()->json($messages, 201);
        //
    }
}
