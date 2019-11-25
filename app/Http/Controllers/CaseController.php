<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cases;
use App\User;
class CaseController extends Controller
{
  public function showCaseDetails($email){
    $details=Cases::all()->where('email',$email);
    return response()->json(['details'=>$details]);
  }
  public function store_details(){
     $case=new Cases();
     $case->client_email=request('client_email');
     // $case->client_email=request('email');
     $case->case_type=request('case_type');
     $case->description=request('description');
     $case->location=request('location');
     $case->other=request('other');
     $case->save();

     if ($case->save()) {
       return response()->json(['success'=>'Details saved successfully'],200);
     }
     else {
       return response()->json(['error'=>'Failed to save'],401);

     }
  }

  public function recommendations($email,$case_type){

     $cases=Cases::all()->where('client_email',$email)->where('case_type',$case_type);
     foreach($cases as $case) {
       $results["case_cat"]=$case->case_type;
       $results["location"]=$case->location;
       // $results["phone"]=$lawyer->phone;
       // $results["location"]=$lawyer->location;
       // $case_cat=$case->case_type;
       // $desc=$case->description;
       // $location=$case->location;
       // $case=$case->other;
       $lawyers=\DB::table('users')->get()->where('location',$results['location'])->where('specialization','like','%'.$results['case_cat']);
       $data=array();
       foreach ($lawyers as $lawyer) {
       $results["name"]=$lawyer->name;
       $results["email"]=$lawyer->email;
       $results["phone"]=$lawyer->phone;
       $results["location"]=$lawyer->location;
       $results["specialization"]=$lawyer->specialization;
       $results["working_days"]=$lawyer->working_days;
       $results["license_no"]=$lawyer->license_no;
       $results["experience"]=$lawyer->experience;
       $results["profile_img"]='http://10.20.140.28/myLawyer/public/uploads/avatars/'.$lawyer->profile_img;
       $results["password"]=$lawyer->password;
       $data[]=$results;



     }
      return response()->json([
      'success'=>true,
      'lawyers'=>$data
    ]);
  }
}
}
