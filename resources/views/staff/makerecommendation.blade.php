@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Make Recommendation</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/serve/recommendation') }}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                       <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="title" name="title" type="text" class="validate" value="{{ old('title') }}" required>
                                           <label for="title">Title</label>
                                           @if ($errors->has('title'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('title') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">

                                              <textarea id="textarea1" name="details" class="materialize-textarea" length="120"></textarea>
                                              <label for="textarea1">Details</label>
                                             @if ($errors->has('details'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('details') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input_field col s12">
                                         <div class="file-field input-field">
                                                <div class="btn teal lighten-1">
                                                    <span>File</span>
                                                    <input type="file" name="document">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                        </div>
                                        </div>
                                        <input name="college_id" type="hidden" value="{{$user->college_id}}" required>
                                        <input name="faculty_id" type="hidden" value="{{$user->faculty_id}}" required>
                                        <input name="department_id" type="hidden" value="{{$user->department_id}}" required>
                                         <input name="staff_id" type="hidden" value="{{$user->staff_id}}" required>

                                         <div class="col s12 right-align m-t-sm">
                                             <button type="submit" class="btn waves-effect waves-light teal">Recommend</button>
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
