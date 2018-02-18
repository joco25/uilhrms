<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Query;
use App\Recommendation;
use App\Application;
use App\Applicationcategory;
use App\Http\Requests;
use DB;

class UserController extends Controller
{
    public function index(){
      $user = \Auth::user();
      $dept_id= $user->department_id;
      $fac_id= $user->faculty_id;

      if ($user->isHOD()) {
        $staff= DB::table('users')
                     ->where('role', 'staff')->where('department_id',$dept_id)->get();
        return view('staff.index',compact('user','staff'));
      }elseif ($user->isDean()) {
        $staff= DB::table('users')
                     ->where('role', 'staff')->where('faculty_id',$fac_id)->get();
        $hods= DB::table('users')
                     ->where('role', 'hod')->where('faculty_id',$fac_id)->get();
        return view('staff.index',compact('hods','staff','user'));
      }else {
        return view('staff.index',compact('user'));
      }

    }

    public function profile($id){
      $user= User::findOrFail($id);
      return view('staff.profile',compact('user'));
    }

    public function apply(){
      $user = \Auth::user();

      $applicationcategory= Applicationcategory::all();

      return view('staff.makeapplication',compact('user','applicationcategory'));
    }

    public function papply(){
      $user = \Auth::user();

      $applicationcategory= Applicationcategory::where('id',12)->first();

      return view('staff.makepapplication',compact('user','applicationcategory'));
    }

    public function saveapplication(Request $request){
      $input= $request->all();
      if($file= $request->file('document')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $input['document'] = $filename;
            }
        }
      Application::create($input);
      return redirect('/user');
    }


    public function recommend($id){
      $user = User::findOrFail($id);
      return view('staff.makerecommendation',compact('user'));
    }

    public function saverecommendation(Request $request){
      $user= \Auth::user();
      $input= $request->all();
      if($file= $request->file('document')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $input['document'] = $filename;
            }
        }
    
      $user->recommendations()->create($input);
      return redirect('/user');
    }

    public function query($id){
      $user = User::findOrFail($id);
      return view('staff.makequery',compact('user'));
    }

    public function savequery(Request $request){
      $user= \Auth::user();
      $input= $request->all();
      if($file= $request->file('document')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $input['document'] = $filename;
            }
        }
      $user->queries()->create($input);
      return redirect('/user');
    }

}
