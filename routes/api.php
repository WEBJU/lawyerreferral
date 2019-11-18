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
Route::get('case_details/{id}','CaseController@showCaseDetails');
Route::post('add_case_details','CaseController@store_details');
Route::get('clients','ClientController@show');
// Route::get('client_login/{email}/{password}','ClientController@login');
Route::post('register','ClientController@register');
Route::get('login/{Email}/{Pass}','ClientController@login');

Route::get('display_lawyers','LawyerController@display_lawyers');
Route::group(['middleware'=>'auth:client'],function(){
  Route::post('profile','ClientController@profile');
});
Route::get('showClients','ClientController@show');
// Route::get('recommendations/{email}/{case_type}','CaseController@recommendations');
// Route::get('recommendedLawyers','');
Route::get('singleCaseHistory/{id}','ClientController@singleCaseHistory');
