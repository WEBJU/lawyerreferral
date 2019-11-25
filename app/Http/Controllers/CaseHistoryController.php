<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\CaseHistory;
class CaseHistoryController extends Controller
{
    public function history(){
        $lawyer_id=auth()->user()->id;
        $lawyer=User::find($lawyer_id);
        return view('ls.history')->with('caseHistory',$lawyer->caseHistory);

    }
    // public function history(){
    //   $id=auth()->user()->id;
    //   $lawyers=
    // }

    public function create(){
      return view('ls.add_history');
    }

    public function store(Request $request){
        $history=new CaseHistory();
        $user_id=auth()->user()->id;
        $history->lawyer_id=$user_id;
        // $users=User::find($id);
        $history->start_date=request('start_date');
        $history->end_date=request('end_date');
        $history->status=request('status');
        $history->court=request('court');

        $history->save();

        return back()->with('success','New history added successfully');
    }

    public function edit(){
      return view('index');
    }

    public function update($id){

    }
}
