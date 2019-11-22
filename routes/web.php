<?php

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
    return view('ls.index');
});
//admin routes
Route::get('/admin','AdminController@show');
Route::get('/newLawyer','AdminController@createLawyer');
Route::post('admin_account_login','AdminController@account_login');
Route::get('/viewLawyers','AdminController@allLawyers');
Route::get('/addClient','AdminController@createClient');
Route::get('/viewClients','AdminController@allClients');
Route::match(['get', 'put'], 'update_client/{id}', 'AdminController@updateClient');
Route::delete('delete_client/{id}', 'AdminController@delete');
Route::match(['get', 'put'], 'update_user/{id}', 'AdminController@updateUser');
Route::delete('delete_user/{id}', 'AdminController@deleteUser');
Route::get('editUser','AdminController@edit');
Route::post('/store_history','CaseHistoryController@store');
Route::get('/add_history','CaseHistoryController@create');
Route::get('/login','UserController@create');
Route::get('/register','UserController@register');
Route::post('/account_creation','UserController@store');
Route::post('/login_access','UserController@login');
// Route::get('/lawyers','LawyerController@show');
Route::get('/lawyers','UserController@index');
Route::get('/logout','UserController@logout');
Route::get('/history','CaseHistoryController@history');
Route::get('/user-profile','UserController@profile');
Route::post('/profile_update','UserController@update_profile');
