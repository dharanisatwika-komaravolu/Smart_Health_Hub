<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
  
   public function index()
   {
       return Users::all();
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       $user = Users::create($request->all());
       return response()->json($user, 201);
   }

   public function login(Request $request) {
    $userid = $request->userid;
    $password = $request->password;
    $lastlogin = $request->lastlogin;
    $user = DB::table('users')
            ->where('userid', '=', $userid)
            ->where('password','=',$password)
            ->get();
    if($user[0] -> access === 'n') {
        return response()->json(null, 401);
    }
    if(isset($user)) {
        Users::where('userid',$userid)->update(['lastlogin'=>$lastlogin]);
    }
    return response()->json($user, 201);
}

   public function addUser(Request $request)
   {
       $email = htmlspecialchars($request['email']);
       $password = htmlspecialchars($request['password']);
       $userid = $request['userid'];
       $role = $request['role'];

   
       
       $profile = Users::where('userid',$userid)->get();
       if(isset($profile[0]))
       {
           return response()->json(null, 205);
       }
       
       DB::table('users')->insert(['email' => $email,'password' => $password, 'userid' => $userid, 'role' => $role]); 
       return response()->json(null, 201);
   }

   public function getRoleCounts(Request $request)
   {
     $roleCounts = DB::select("SELECT
     (SELECT COUNT(id) FROM patients) AS count1,
     (SELECT COUNT(id) FROM doctors) AS count2,
     (SELECT COUNT(id) FROM admins) AS count3,
     (SELECT COUNT(id) FROM pharmacists) AS count4,
     (SELECT COUNT(id) FROM health_admins) AS count5,
     (SELECT COUNT(id) FROM appointments) AS count6");

   return response()->json($roleCounts, 201);
     
     
   }

   public function updateAccess(Request $request)
   {
     
       $id = $request['id'];
       $access = $request['access'];
       
       Users::where('id',$id)->update(['access'=>$access]);     
   
       return response()->json(null, 201);
   }


   


}
