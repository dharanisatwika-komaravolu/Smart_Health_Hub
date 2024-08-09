<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions;


class PermissionsController extends Controller
{
    public function index()
    {
        //
        return Permissions::all();
    }
}
