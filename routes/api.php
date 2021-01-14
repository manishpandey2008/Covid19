<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//------------------Face Match Test ---------------//

Route::GET('/face/match','FaceController@Index')->name('index');
Route::POST('/face/match','FaceController@Operation')->name('photosend');

//------------------Face Match Test ---------------//
