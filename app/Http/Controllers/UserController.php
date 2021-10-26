<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserAct;

class UserController extends Controller
{
    //
    function saveUser(Request $request){

        $user = new UserAct;
        $user->nombre = $request->input("name");
        $user->ap_paterno = $request->input("father");
        $user->ap_materno = $request->input("mother");
        $user->telefono = $request->input("phone");
        $user->save();
        $users = UserAct::all();
        return view("home"); 
    }
}
