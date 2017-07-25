<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/',"ApiController@main");
Route::get('client/{serverName}',"ApiController@client");

//Route::get('test',"ApiController@main2");

Route::post('profiles',"ApiController@profile");

Route::post('launcher',"ApiController@launcher");

Route::post('auth',"ApiController@auth")->name("auth");
Route::post('session/join',"ApiController@join")->name("join");
Route::get('session/hasJoined',"ApiController@hasJoined")->name("hasJoined");