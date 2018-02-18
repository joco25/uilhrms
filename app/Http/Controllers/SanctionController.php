<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sanction;
use App\Http\Requests;

class SanctionController extends Controller
{
    public function index(){
        $sanctions= Sanction::all();
        return view('hr.sanctions',compact('sanctions'));
      }

      public function sindex(){
        $user= Auth::user();
        $dept_id= $user->department_id;
        $fac_id= $user->faculty_id;
        $staff_id= $user->staff_id;
        if($user->isHod()){
          $sanctions= Sanction::where('department_id',$dept_id)->get();
            return view('hr.ssanctions',compact('sanctions'));  
        }elseif ($user->isDean()) {
          $sanctions= Sanction::where('faculty_id',$fac_id)->get();
          return view('hr.ssanctions',compact('sanctions'));  
        }

        $sanctions= Sanction::where('staff_id',$staff_id)->get();
        return view('hr.ssanctions',compact('sanctions'));
      }

      public function show($id){
        $user= \Auth::user();

        $sanction = Sanction::findOrFail($id);
        //$response = Reason::where('Sanction_id',$Sanction->id)->first();
        if(!$user->isHr()){
        return view('hr.ssanctionshow',compact('sanction'));
        }
        return view('hr.sanctionshow',compact('sanction'));
      }

}
