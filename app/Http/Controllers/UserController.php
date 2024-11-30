<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function create_user(Request $request)
    {
       $user=$request->validate([
        'name'=>'required|string',
        'email'=>'required|string',
        'password'=>'required|string'

       ]);

       User::create($user);
       return response()->json([
        'statusCode'=>'200',
        'data'=>$user,
        'message'=>'user created succesfully'
       ]);
    }


    public function getUsers()
    {
        $user=User::all();

        return response()->json([
            'statusCode'=>'200',
            'data'=>$user,
            'message'=>'success',

        ]);

    }

    // public function logOut(Request $request)
    // {
    //    Auth::logout();
    //    $request->session()->invalidate();
    //    $request->session()->regenerateToken();

    //    return response()->json([
    //     'statusCode'=>200,
    //     'message'=>'user log out succesful'
    //    ]);
    // }
}
