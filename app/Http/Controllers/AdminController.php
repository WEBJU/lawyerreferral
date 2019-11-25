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

    public function edit($id){
      // $user=
      return view('admin.pages.edit_user');
    }
    public function deleteUser($id){
      User::destroy($id);
      return redirect('admin.pages.view_lawyers')->with(['success','Lawyer deleted successfully']);
    }
    public function deleteClient($id){

    }
    public function updateUser(Request $request,$id){
      if ($request->isMethod('get'))
            return view('admin.pages.edit_user_modal', ['user' => User::find($id)]);
        else {
            $rules = [
              'name'=>'required',
              'email'=>'required',
              'phone'=>'required',
              'specialization'=>'required',
              'location'=>'required',
              'working_days'=>'required',
              'license_no'=>'required',
              'experience'=>'required'
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
                return response()->json([
                    'fail' => true,
                    'errors' => $validator->errors()
                ]);
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->specialization = $request->specialization;
            $user->location = $request->location;
            $user->working_days = $request->license_no;
            $user->experience = $request->experience;
            $user->save();
            return response()->json([
                'fail' => false,
                'redirect_url' => url('/viewLawyers')
            ]);
        }
    }

    public function updateClient($id){

    }
}
