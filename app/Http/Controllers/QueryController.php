<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reason;
use App\Http\Requests;
use App\Query;
use App\User;
use Auth;

class QueryController extends Controller
{


      public function index(){
        $queries= Query::where('status','deanPassed')->get();
        return view('hr.queries',compact('queries'));
      }

      public function sindex(){
        $user= Auth::user();
        $dept_id= $user->department_id;
        $fac_id= $user->faculty_id;
        $staff_id= $user->staff_id;
        if($user->isHod()){
          $queries= Query::where('department_id',$dept_id)->get();
            return view('hr.squeries',compact('queries'));  
        }elseif ($user->isDean()) {
          $queries= Query::where('faculty_id',$fac_id)->where('status','hodPassed')->get();
          return view('hr.squeries',compact('queries'));  
        }

        $queries= Query::where('staff_id',$staff_id)->get();
        return view('hr.squeries',compact('queries'));
      }

      public function show($id){
        $user= \Auth::user();

        $query = Query::findOrFail($id);
        //$response = Reason::where('query_id',$query->id)->first();
        if(!$user->isHr()){
        return view('hr.squeryshow',compact('query'));
        }
        return view('hr.queryshow',compact('query'));
      }

      public function sshow($id){
        $query = Query::findOrFail($id);
        
        return view('hr.squeryshow',compact('query'));
      }

      public function hpass($id){
        $query=Query::findOrFail($id);
        // $query= DB::table('queries')
        //             ->where('id', $id)->first();
        $query->status= 'hodPassed';
        $query->save();
        return redirect('/queries');
      }

      public function dpass($id){
        $query=Query::findOrFail($id);
        $query->status= 'deanPassed';
        $query->save();
        return redirect('/queries');
      }

      public function drop($id){
        $query=Query::findOrFail($id);
        // $query= DB::table('queries')
        //             ->where('id', $id)->first();
        $query->status= 'dropped';
        $query->save();
        return redirect('/queries');
      }

      public function sanction($staff_id){
        $user= User::where('staff_id',$staff_id)->first();
        return view('staff.makesanction',compact('user'));
      }

      public function respond($id){
        $query= Query::findOrFail($id);
        return view('staff.makeresponse',compact('query'));
      }

      public function savesanction(Request $request){
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
      
      $user->sanctions()->create($input);
        return redirect('/dashboard');
      }

      public function saveresponse(Request $request,$id){
        $input= $request->all();
        $query= Query::where('id',$id)->first();
        $query->reason()->create($input);
        $query->status= 'answered';
        $query->save();
        return redirect('/dashboard');
      }

      

      public function delete($id){
        $query= Query::findOrFail($id);
        $query->delete();
        return redirect('/queries');
      }

}
