@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Child</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addchildren') }}">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" required>
                                             <label for="name">Name</label>
                                             @if ($errors->has('name'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">today</i>
                                             <label for="birthdate">Date of Birth</label>
                                             <input id="birthdate" name="dob" type="text" class="datepicker">
                                         </div>

                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">person_pin</i>
                                             <select name="sex">
                                                 <option value="" disabled selected>Choose your option</option>
                                                 <option value="1">Male</option>
                                                 <option value="2">Female</option>
                                             </select>
                                             <label for="icon_telephone">Gender</label>
                                         </div>

                                         <input name="profile_id" type="hidden" value="{{$profile->id}}" required>

                                         <div class="col s12 right-align m-t-sm">
                                             <button type="submit" class="btn waves-effect waves-light teal">Add Child</button>
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
