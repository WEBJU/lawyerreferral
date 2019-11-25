<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function show(){
      return view('ls.lawyer_area');
    }

    public function display_lawyers(){

        $lawyers=\DB::table('users')->get();
        $data=array();
        foreach ($lawyers as $lawyer) {
        $results['id']=$lawyer->id;
        $results["name"]=$lawyer->name;
        $results["email"]=$lawyer->email;
        $results["phone"]=$lawyer->phone;
        $results["location"]=$lawyer->location;
        $results["specialization"]=$lawyer->specialization;
        $results["working_days"]=$lawyer->working_days;
        $results["license_no"]=$lawyer->license_no;
        $results["experience"]=$lawyer->experience;
        $results["profile_img"]='http://10.20.140.21/lawyerreferral/public/uploads/avatars/'.$lawyer->profile_img;
        $results["password"]=$lawyer->password;
        $data[]=$results;

        }
        return response()->json([
          'success'=>true,
          'lawyers'=>$data
        ]);
        
    }
}
