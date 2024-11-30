<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Lost_item;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class LostItemController extends Controller
{
    //
    public function store(Request $request)
    {
        //dd($request->all());
      $lostItem=$request->validate([
       'user_id'=>'required|numeric|exists:users,id',     
        'title'=>'required|string',          
       'description'=>'required|string', 
       'status'=>'required|string',
      ]);

      $item=Lost_item::create($lostItem);

      return response()->json([
        'statusCode'=>200,
        'data'=>$item,
        'message'=>'a lost item is succefully created'
      ]);
    }

    public function getLostItem()
    {
        $item=Lost_item::all();

     if ($item->isEmpty()){
         return response()->json([
             'statusCode'=>404,
             "message"=>"there is no lost item"
         ]);

     }
     
     return response()->json([
         'statusCode'=>200,
         'data'=>$item,
         'message'=>'these are the lost items'

     ]);

    

    }
  
}
