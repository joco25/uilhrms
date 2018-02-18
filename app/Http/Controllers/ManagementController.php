<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Faculty;
use App\Department;
use App\Children;
use App\Institutionattended;
use App\Nextofkin;
use App\Passport;
use App\Previousemployment;
use App\Publication;
use App\Publicservicerendered;
use App\Research;
use App\Http\Requests;
use App\Profile;

class ManagementController extends Controller
{
  public function addcollege(){
    $colleges= College::all();
    return view('hr.addcollege',compact('colleges'));
  }

  public function savecollege(Request $request){
    $input= $request->all();
    College::create($input);
    return redirect('/addcollege');
  }

  public function addfaculty(){
    $faculties= Faculty::all();
    return view('hr.addfaculty',compact('faculties'));
  }

  public function savefaculty(Request $request){
    $input= $request->all();
    Faculty::create($input);
    return redirect('/addfaculty');
  }

  public function adddepartment(){
    $faculties= Faculty::all();
    $departments= Department::all();
    return view('hr.adddepartment',compact('faculties','departments'));
  }

  public function savedepartment(Request $request){
    $input= $request->all();
    Department::create($input);
    return redirect('/adddepartment');
  }

  public function addchildren($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addprofile',compact('profile'));
  }
  public function savechildren(Request $request){
    $input= $request->all();
    Children::create($input);
    return redirect('/staff');
  }

  public function addinstitution($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addinstitution',compact('profile'));
  }
  public function saveinstitution(Request $request){
    $input= $request->all();
    Institutionattended::create($input);
    return redirect('/staff');
  }

  public function addnextofkin($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addnextofkin',compact('profile'));
  }
  public function savenextofkin(Request $request){
    $input= $request->all();
    Nextofkin::create($input);
    return redirect('/staff');
  }

  public function addpassport($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addpassport',compact('profile'));
  }
  public function savepassport(Request $request){
    $input= $request->all();
    Passport::create($input);
    return redirect('/staff');
  }

  public function addpreviousemployment($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addpreviousemployment',compact('profile'));
  }
  public function savepreviousemployment(Request $request){
    $input= $request->all();
    Previousemployment::create($input);
    return redirect('/staff');
  }

  public function addpublication($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addpublication',compact('profile'));
  }
  public function savepublication(Request $request){
    $input= $request->all();
    Publication::create($input);
    return redirect('/staff');
  }

  public function addpublicservice($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addpublicservice',compact('profile'));
  }
  public function savepublicservice(Request $request){
    $input= $request->all();
    Publicservicerendered::create($input);
    return redirect('/staff');
  }

  public function addresearch($id){
    $profile= Profile::findOrFail($id);
    return view('hr.addresearch',compact('profile'));
  }
  public function saveresearch(Request $request){
    $input= $request->all();
    Research::create($input);
    return redirect('/staff');
  }

}
