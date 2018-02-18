@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Make Application</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/apply') }}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">star</i>
                                             <select name="category_id">
                                                 
                                                    <option value="{{$applicationcategory->id}}" selected>{{$applicationcategory->name}}</option>
                                                 
                                             </select>
                                             <label for="icon_telephone">Category</label>
                                         </div>
                                         
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="textarea1" name="details" class="materialize-textarea" length="350"></textarea>
                                              <label for="textarea1">Details</label>
                                             @if ($errors->has('details'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('details') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <span>Upload CV</span>
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
                                        <input name="college_id" type="hidden" value="{{auth()->user()->college_id}}" required>
                                        <input name="faculty_id" type="hidden" value="{{auth()->user()->faculty_id}}" required>
                                        <input name="department_id" type="hidden" value="{{auth()->user()->department_id}}" required>
                                         <input name="user_id" type="hidden" value="{{auth()->user()->id}}" required>
                                         <input name="status" type="hidden" value="pending" required>
                                         <div class="col s12 right-align m-t-sm">
                                             <button type="submit" class="btn waves-effect waves-light teal">Apply</button>
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
