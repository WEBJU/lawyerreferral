<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Clients;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    // public function __construct(){
    //   $this->middleware('guest')->except('logout');
    //   $this->middleware('guest:admin')->except('logout');
    // }
    public function show(){
      return view('admin.pages.login');
    }

    public function account_login(Request $request){
        if (Auth::guard('admin')->attempt(request(['username','password']))==false) {
        return view('admin.pages.index');
        }
        else {
          return back()->with('error','Username or Password incorrect');
        }
        return back()->withInput($request->only('username','password'));
    }

    public function createLawyer(){
        return view('admin.pages.add_lawyer');
    }
    public function allLawyers(){
      $users=User::all();
      return view('admin.pages.view_lawyers')->with('users',$users);
    }
    public function createClient(){

      return view('admin.pages.add_client');
    }
    public function allClients(){
      $clients=Clients::all();
      return view('admin.pages.view_clients')->with('clients',$clients);
    }

}
