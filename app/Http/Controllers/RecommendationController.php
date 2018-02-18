<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommendation;
use App\Http\Requests;
use Auth;

class RecommendationController extends Controller
{
  public function index(){
    $recommendations= Recommendation::all();
    return view('hr.recommendations',compact('recommendations'));
  }

  public function sindex(){
    $user= Auth::user();
    $dept_id= $user->department_id;
    $fac_id= $user->faculty_id;
    $staff_id= $user->staff_id;
    if($user->isHod()){   
      $recommendations= Recommendation::where('department_id',$dept_id)->get();
      return view('hr.srecommendations',compact('recommendations'));  
    }elseif ($user->isDean()) {
      $recommendations= Recommendation::where('faculty_id',$fac_id)->get();
      return view('hr.srecommendations',compact('recommendations'));  
    }

    $recommendations= Recommendation::where('staff_id',$staff_id)->get();
    return view('hr.srecommendations',compact('recommendations'));
  }

  public function show($id){
    $user= \Auth::user();
    $recommendation = Recommendation::findOrFail($id);
    if(!$user->isHr()){
      return view('hr.srecommendationshow',compact('recommendation'));  
    }
    return view('hr.recommendationshow',compact('recommendation'));
    }

  public function approve($id){
    $recommendation=Recommendation::findOrFail($id);
    // $recommendation= DB::table('recommendation')
    //             ->where('id', $id)->first();
    $recommendation->status= 'approved';
    $recommendation->save();
    return redirect('/recommendations');
  }

  public function reject($id){
    $recommendation=Recommendation::findOrFail($id);
    // $recommendation= DB::table('recommendation')
    //             ->where('id', $id)->first();
    $recommendation->status= 'rejected';
    $recommendation->save();
    return redirect('/recommendations');
  }

  public function delete($id){
    $recommendation= Recommendation::findOrFail($id);
    $recommendation->delete();
    return redirect('/recommendations');
  }

}
