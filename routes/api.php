<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\PickUpPointController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusLocationController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Models\Lost_item;


//so i was getting it wrong, the admin pannel is just for the admin users, but the api routes end points
//some are for auth users, but others can be access by both Auth and non Auth users.
//hence an authenticated user cannot create a bus, cannot make a route
// cannot make a user
//but can get a route,buses,users, that are made by the admin on the admin  panel

Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/users', [UserController::class, 'create_user']);


Route::middleware(['auth:sanctum'])->group(function () {     
   // Route::post('/buses', [BusController::class, 'store']);
    Route::get('/buses', [BusController::class, 'getBuses']);
    //Route::post('/routes', [RouteController::class, 'store']);
    Route::get('/routes', [RouteController::class, 'getRoutes']);
    Route::get('/users', [UserController::class, 'getUsers']);
    Route::post('/user-logout', [UserController::class, 'logOut']);
    Route::post('/bus_locations', [BusLocationController::class, 'submit']);
    Route::get('/bus_locations/{bus_id}', [BusLocationController::class, 'getBusLocation']);

    //Route::post('/pickuppoints', [PickUpPointController::class, 'store']);
    Route::get('/pickuppoints', [PickUpPointController::class, 'getPickUpPoints']);

    Route::post('/lost_items', [LostItemController::class, 'store']);
    Route::get('/lost_items', [LostItemController::class, 'getLostItem']);


});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
