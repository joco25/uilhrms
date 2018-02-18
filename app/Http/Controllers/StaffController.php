<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\User;
use App\College;
use App\Faculty;
use App\Department;
use App\Profile;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $users= User::with('profiles')->get();
        $users=  User::latest();

        if($role=request('role')){
            $users->where('role',$role);
        }
        $users= $users->get();
        return view('hr.staff',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function addstaff(){
        $colleges= College::all();
        $faculties= Faculty::all();
        $departments= Department::all();
      return view('hr.addstaff',compact('colleges','faculties','departments'));
    }

    public function storestaff(Request $request){
      $this->validate(request(),[
        'surname'=> 'required',
        'othernames'=>'required',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
        'role'=>'required',
        'staff_id'=>'required|unique:users',
      ]);
      $user= User::create([
          'surname' => $request['surname'],
          'othernames'=>$request['othernames'],
          'email' => $request['email'],
          'role'=> $request['role'],
          'password' => bcrypt($request['password']),
          'staff_id'=>$request['staff_id'],
          'college_id'=>$request['college_id'],
          'faculty_id'=>$request['faculty_id'],
          'department_id'=>$request['department_id'],
      ]);

      $profile= new Profile(['user_id'=>$user->id]);

      $user->profile()->save($profile);

      return redirect('/staff');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('hr.staffprofile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::findorFail($id);
        $profile= $request->except(['_token','_method','surname','othernames','email','staff_id']);
        if($file= $request->file('photoname')){
          
          $path = public_path().'/documents';
          $filename = time().'.'.$file->getClientOriginalName();

          if($file->move('documents', $filename))
            {
              $profile['photoname'] = $filename;
            }
        }
        $user->profile()->update($profile);
        
        $user->surname= $request['surname'];
        $user->othernames= $request['othernames'];
        $user->email= $request['email'];
        $user->staff_id=$request['staff_id'];
        $user->save();

        Session::flash('updated_user', 'The user has been Updated');
        return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
