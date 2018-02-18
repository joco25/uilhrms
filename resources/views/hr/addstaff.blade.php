@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Staff</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addstaff') }}">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('surname') ? ' has-error' : '' }}">
                                             <input id="surname" name="surname" type="text" class="validate" value="{{ old('surname') }}" required>
                                             <label for="surname">Sur Name</label>
                                             @if ($errors->has('surname'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('surname') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('othernames') ? ' has-error' : '' }}">
                                             <input id="othernames" name="othernames" type="text" class="validate" value="{{ old('othernames') }}" required>
                                             <label for="othernames">Other Names</label>
                                             @if ($errors->has('othernames'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('othernames') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                           <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                                           <label for="email">E-mail Address</label>
                                             @if ($errors->has('email'))
                                                 <div class="col s12">
                                                     <span class="red-text">
                                                         <strong>{{ $errors->first('email') }}</strong>
                                                     </span>
                                                 </div>
                                             @endif
                                         </div>
                                          <div class="input-field col s12{{ $errors->has('staff_id') ? ' has-error' : '' }}">
                                                   <input id="staff_id" name="staff_id" type="text" class="validate" value="{{ old('staff_id') }}" required>
                                                   <label for="staff_id">Staff ID</label>
                                                   @if ($errors->has('staff_id'))
                                                       <span class="red-text">
                                                           <strong>{{ $errors->first('staff_id') }}</strong>
                                                       </span>
                                                   @endif
                                          </div>
                                         <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}" required>
                                             <input type="password" name="password" class="validate" min="8" id="password">
                                             <label for="password">Password</label>
                                             @if ($errors->has('password'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                             @endif
                                         </div>

                                         <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                             <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                                             <label>Confirm Password</label>
                                             @if ($errors->has('password_confirmation'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('role') ? ' has-error' : '' }}">
                                           <select name="role">
                                               <option value="" disabled selected>Choose your option</option>

                                                  <option value="staff">Staff</option>
                                                  <option value="hod">HOD</option>
                                                  <option value="dean">Dean</option>
                                                  <option value="hr">Hr</option>
                                              <label>Role</label>
                                           </select>
                                           <div class="input-field col s12{{ $errors->has('role') ? ' has-error' : '' }}">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="college_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      @foreach ($colleges as $college)
                                                    <option value="{{$college->id}}">{{$college->name}}</option>
                                                 @endforeach
                                                  </select>
                                                  <label for="icon_telephone">College</label>
                                              </div>
                                              <div class="input-field col s6{{ $errors->has('role') ? ' has-error' : '' }}">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="faculty_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      @foreach ($faculties as $faculty)
                                                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                                 @endforeach
                                                  </select>
                                                  <label for="icon_telephone">Faculty/School</label>
                                              </div>
                                              <div class="input-field col s6{{ $errors->has('role') ? ' has-error' : '' }}">
                                                  <i class="material-icons prefix">mode_edit</i>
                                                  <select name="department_id">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      @foreach ($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                                 @endforeach
                                                  </select>
                                                  <label for="icon_telephone">Department</label>
                                              </div>
                                         </div>
                                         <div class="col s12 right-align m-t-sm">

                                             <button type="submit" class="btn waves-effect waves-light teal">Add Staff</button>


                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
      </main>
  </div>


@stop
