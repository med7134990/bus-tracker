<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    //
    public function login(Request $request)
    {
      $credentials=$request->validate([
        'email'=>'required|email',
        'password'=>'required|string',
       ]);

       

    //    $check= Auth::attempt(['email'=> $request->email, 'password'=> $request->password]);

             //if their is an attempt for authentication
       if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
        $user=Auth::user();//retrieve the authenticated user
        $token = $user->createToken("12344")->plainTextToken;

        return response()->json([
            'statusCode'=> "200",
            'token'=>$token,
            'message'=> "success",
        ]);
       }  else {
        // If authentication fails, return an error response
        return response()->json([
            'statusCode' => 401,
            'message' => 'Unauthorized. Invalid email or password.',
        ], 401);
    }

    }
}
