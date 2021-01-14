<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','CovidContoller@WorldData');
Route::get('/countries','CovidContoller@SearchCountry');
Route::get('/india/states','CovidContoller@SearchStates');
Route::get('/india/state/district','CovidContoller@StateDistrictName');
Route::get('/country/from/to','CovidContoller@CountryDate');
Route::get('/india/from/to','CovidContoller@IndiaDate');
Route::get('/contact',function(){
	return view('contact');
});


Route::post('/countries','CovidContoller@GetCountry');
Route::post('/india/states','CovidContoller@SelectStare');
Route::post('/state/name','CovidContoller@StateName');
Route::post('/district/name','CovidContoller@DistrictName');
Route::post('/india/state/district/district_data','CovidContoller@DistrictData');
Route::post('/country/from/to','CovidContoller@GetCountryDate');


