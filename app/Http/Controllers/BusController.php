<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    //

     public function store(Request $request)
     {
        $buses=$request->validate([
           'bus_number'=>'required|string|unique:buses|max:50',
           'bus_capacity'=>'nullable|integer',
           'route_id'=>'required|exists:routes,id',

        ]);

        $bus=Bus::create($buses);

        return response()->json([
            'statusCode' => 201,
            'data' => $bus,
            'message' => 'Bus created successfully',
        ], 201);
     }


    public function getBuses()
    {
        $buses=Bus::all();

        return response()->json(
            [
                'stausCode'=>'200',
                'data'=>$buses,
                "message"=>"success",
            ]
            );
    }
}
