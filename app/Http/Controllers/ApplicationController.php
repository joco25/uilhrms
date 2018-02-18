<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicationcategory;
use App\Application;
use App\Http\Requests;
use DB;
use Auth;

class ApplicationController extends Controller
{
  public function index(){
    $applications= Application::all();
    return view('hr.applications',compact('applications'));
  }

  public function sindex(){

    $user= Auth::user();
    $dept_id= $user->department_id;
    $fac_id= $user->faculty_id;
    $staff_id= $user->staff_id;
    if($user->isHod()){   
      $applications= Application::where('department_id',$dept_id)->get();
      return view('hr.sapplications',compact('applications'));  
    }elseif ($user->isDean()) {

      $applications= Application::where('faculty_id',$fac_id)->where('hodstatus','approved')->get();
      return view('hr.sapplications',compact('applications'));  
    }

    $applications= Application::where('user_id',$user->id)->get();
    return view('hr.sapplications',compact('applications'));
  }

  public function show($id){
    $user= \Auth::user();
    $application = Application::where('id',$id)->first();
    if(!$user->isHr()){
      return view('hr.sapplicationshow',compact('application'));  
    }
    return view('hr.applicationshow',compact('application'));
  }

  public function happrove($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->hodstatus= 'approved';
    $application->save();
    return redirect('/applications');
  }

  public function dapprove($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->deanstatus= 'approved';
    $application->save();
    return redirect('/applications');
  }
  public function approve($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->status= 'approved';
    $application->save();
    return redirect('/applications');
  }

  public function reject($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->status= 'rejected';
    $application->save();
    return redirect('/applications');
  }

  public function hreject($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->hodstatus= 'rejected';
    $application->save();
    return redirect('/applications');
  }

  public function dreject($id){
    $application=Application::findOrFail($id);
    // $application= DB::table('applications')
    //             ->where('id', $id)->first();
    $application->deanstatus= 'rejected';
    $application->save();
    return redirect('/applications');
  }

  public function delete($id){
    $application= Application::findOrFail($id);
    $application->delete();
    return redirect('/applications');
  }

  public function addcategory(){
    $applicationcategory= Applicationcategory::all();
    return view('hr.addapplicationcategory',compact('applicationcategory'));
  }

  public function savecategory(Request $request){
    $category= $request->all();
   Applicationcategory::create($category);

    return redirect('/addcategories');
  }

  public function applicationreview(Request $request, $id)
    {
        $application= Application::findorFail($id);
        $input= $request->except(['_token','_method']);
      if($file= $request->file('review')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $input['review'] = $filename;
            }
        }
        $application->update($input);

        return redirect()->route('applicationshow', ['id' => $id]);
    }

  public function updatereview(Request $request, $id)
    {
        $application= Application::findorFail($id);
        $input= $request->except(['_token','_method']);
        
        if($file= $request->file('review')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $input['review'] = $filename;
            }
        }
        $application->update($input);

        return redirect()->route('applicationshow', ['id' => $id]);
    }

}
