<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pickup_point;
use Illuminate\Http\Request;

class PickUpPointController extends Controller
{
    //
    public function store(Request $request)
    {
       $pickupPoint=$request->validate([
          'name'=>'required|string|unique:buses|max:50',
          'latitude'=>'required|numeric',
          'longitude'=>'required|numeric',

       ]);

       $pickupPoints=Pickup_point::create($pickupPoint);

       return response()->json([
           'statusCode' => 201,
           'data' => $pickupPoints,
           'message' => 'pickup point created successfully',
       ], 201);
    }


    public function getPickUpPoints()
    {
        $pickupPoints=Pickup_point::all();

        return response()->json(
            [
                'stausCode'=>'200',
                'data'=>$pickupPoints,
                "message"=>"success",
            ]
            );
    }
}
