<?php

namespace App\Http\Controllers;

use App\Models\Bus_location;
use Illuminate\Http\Request;

class BusLocationController extends Controller
{
    //
    public function submit(Request $request)
    {
       $bus_location=$request->validate([
         'latitude'=>'required|numeric',
         'longitude'=>'required|numeric',
         'bus_id'=>'required|exists:buses,id',
         'user_id'=>'required|exists:users,id',
       ]);

       $buslocation=Bus_location::create($bus_location);

       return response()->json([
        'statusCode'=>200, 
        'data'=>$buslocation,
        'message'=>'success'
       ], 201);
    }

    public function getBusLocation($bus_id)
    {
      $buslocation=Bus_location::where('bus_id', $bus_id)->latest()->first();
      
      // where('bus_id', $bus_id):
      // Adds a condition to the query, specifying that only rows 
      // where the bus_id column matches the value of $bus_id should be considered.

      if($buslocation->isEmpty())
      {
        return response()->json([
            'status'=>'error',
            'message'=>'Bus location not found',

        ], 404);
      }

      return response()->json([
        'status'=>'success',
        'data'=>$buslocation
      ]);
    }

}
