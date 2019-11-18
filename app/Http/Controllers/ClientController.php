<?php

namespace App\Http\Controllers;
use App\Clients;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use DB;
use App\CaseHistory;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function show(){
      $user=Clients::all();
      return response()->json(['user'=>$user]);
    }

    public function login($email,$password){
      $clients=Clients::all()->where("email",$email)->where("password",$password);
      // $clients->toArray();
      // var_dump($clients);
      foreach($clients as $client) {
        $result[0]=$client->id;
        $result[1]=$client->name;
        $result[2]=$client->email;
        $result[3]=$client->contact;
        $result[4]=$client->password;

        if($result == null) {
          return json_encode(['error'=>'Username or Password Incorrect']);
        }else{
          return json_encode(['result'=>$result],200);
        }
      }


    }
    public function register(Request $request){
      $validator=Validator::make($request->all(),[
        'name'=>'required',
        'email'=>'required|email',
        'contact'=>'required',
        'password'=>'required',
        // 'confirm_pin'=>'required|same:pin',
      ]);
      if ($validator->fails()){
        return response()->json(['error'=>$validator->errors()],401);
      }
      $client=new Clients();
      $client->name=request('name');
      $client->email=request('email');
      $client->contact=request('contact');
      $client->password=request('password');
      $client->save();
      // $input=$request->all();
      // // $input['password']=bcrypt($input['password']);
      // $client=Clients::create($input);
      // $success['token']=$client->createToken('myLawyer')->accessToken;
      $success['message']="Acount created Successfully";
      $success['user']=$client;
      return response()->json(['success'=>$success],200);

    }

    public function profile(){
      $client=Auth::user();
      return response()->json(['success'=>$client],200);
    }

    public function guard(){
        return Auth::guard('client');
    }

    public function singleCaseHistory($id){
      // $user=DB::table('users')->find('id')->where('email',$email)->get();
      $user_id=User::find($id);
      $history=$user_id->caseHistory;
      return response()->json(['history'=>$history]);
    }

}
