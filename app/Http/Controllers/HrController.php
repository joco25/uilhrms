<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\College;
use App\Department;
use App\Faculty;
use App\Http\Requests;

class HrController extends Controller
{
    public function index(){
      

      $departmentcount= Department::count();
      $facultycount= Faculty::count();
      $collegecount = College::count();



      return view('hr.index',compact('departmentcount','collegecount','facultycount'));
    }

    public function add(Request $request){
      $input = $request->all();
      Notification::create($input);
      return redirect('/hr');
    }

    public function show($id){
      
      $notification= Notification::findOrFail($id);

      return view('hr.notificationshow',compact('notification'));
    }

    public function delete($id){
      $notification= Notification::findOrFail($id);
      $notification->delete();
      return redirect('/hr');
    }

}
