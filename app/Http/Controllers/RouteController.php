<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function getRoutes()
    {
      $routes=Route::all();

      return response()->json([
      'statusCode'=>'200',
      'data'=>$routes,
      'message'=>'success'
      ]);
    }

    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name'=>'required|string',

        ]);
        
        $route=Route::create($validateData);

        return response()->json([
            'statusCode'=>'200',
            'data'=>$route,
            'message'=>'route created succesfully',
        ]);

    }
}
