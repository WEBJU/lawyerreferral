<?php

namespace App\Http\Controllers;
use App\User;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
      $lawyers=User::all();
      return view('ls.lawyer_area')->with('lawyers',$lawyers);
  }
    //login function
    public function create(){
      return view('ls.login');
    }
    public function register(){
      return view('ls.register');
    }
    public function store(Request $request){
        $validate=$request->validate([
          'name'=>'required',
          'email'=>'required',
          'phone'=>'required',
          'specialization'=>'required',
          'location'=>'required',
          'working_days'=>'required',
          'license_no'=>'required',
          'experience'=>'required',
          'password'=>'required',
          'confirm'=>'required|same:password'
        ]);
        $input=$request->all();
        $user=User::create($input);
        return redirect('/login')->with(['success','Your account has been created..Please login..']);
    }

    public function login(){
      if (auth()->attempt(request(['email','password']))==false) {
      return back()->withErrors([
        'message'=>'Email or password incorrect'
      ]);
      }
      else {
        return redirect('/')->with('success',['Login successfull']);
      }
    }

    public function profile(){
        $profile=Auth::user();
        return view('ls.profile')->with('profile',$profile);
      }
    public function update_profile(Request $request){

      $request->validate([
        'profile_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if($request->hasFile('profile_img')) {
      $avatar=$request->file('profile_img');
      $filename=time().'.'.$avatar->getClientOriginalExtension();
      Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' .$filename));

      $user=Auth::user();
      $user->profile_img=$filename;
      $user->save();
      }
        return back()->with('success','Profile updated successfully');
    }
    public function logout(){
      auth()->logout();
      return redirect('/');
    }
}
