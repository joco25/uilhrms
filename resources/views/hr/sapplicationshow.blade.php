@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Application Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     <li class="collection-item"><b>Staff Number:</b> {{$application->user->staff_id}} </li>
                                     <li class="collection-item"><b>Names: </b> {{$application->user->surname}} {{$application->user->othernames}}</li>
                                     <li class="collection-item"><b>Application Category:</b> {{$application->category->name}}</li>
                                     <li class="collection-item"><b>Application Details:</b> {{$application->details}}</li>
                                     @if(! $application->category->name == 'Promotion')
                                       <li class="collection-item"><b>Application duration:</b> {{$application->period}}</li>
                                       <li class="collection-item"><b>Applied:</b> {{Carbon\Carbon::parse($application->created_at)->diffForHumans()}}</li>
                                       <li class="collection-item"><b>StartDate:</b> {{Carbon\Carbon::parse($application->startdate)->diffForHumans()}}</li>
                                       <li class="collection-item"><b>EndDate:</b> {{Carbon\Carbon::parse($application->enddate)->diffForHumans()}}</li>
                                     @endif
                                     <li class="collection-item"><b>Supporting Document:</b> <a href="/documents/{{$application->document}}">Download</a></li>
                                     @if(auth()->user()->isHOD())
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-green btn-flat " href="/application/happrove/{{$application->id}}">Approve as HOD</a><a class="waves-effect waves-red btn-flat" href="/application/hreject/{{$application->id}}">Reject as HOD</a></li>
                                    @endif
                                    @if(auth()->user()->isDean())
                                    <li class="collection-item"><b>Action: </b><a class="waves-effect waves-green btn-flat " href="/application/dapprove/{{$application->id}}">Approve as Dean</a><a class="waves-effect waves-red btn-flat" href="/application/dreject/{{$application->id}}">Reject as Dean</a></li>
                                    @endif
                                   </ul>

                                </div>
                            </div>
                        </div>
                        @if($application->category->name == 'Promotion')
                            <div class="card white darken-1">
                                <div class="card-content ">
                                    <span class="card-title">Review Details</span>
                                     <div class="row">
                                       <ul class="collection with-header">

                                         <li class="collection-item"><b>Quality of Research:</b> {{$application->qoresearch}} </li>
                                         <li class="collection-item"><b>Quality of Publication: </b> {{$application->qopublication}}</li>
                                         <li class="collection-item"><b>General Recommendation:</b> {{$application->generalrecommendation}}</li>
                                         <li class="collection-item"><b>Percentage Score of Staff:</b> {{$application->percentagescore}}</li>
                                         <li class="collection-item"><b>Comment By Departmental Review Panel:</b> {{$application->commentbypanel}}</li>
                                         <li class="collection-item"><b>Full Review:</b> <a href="/documents/{{$application->review}}">Download Review</a></li>
                                       </ul>

                                    </div>
                                </div>
                            </div>
                        @endif
                        @if(auth()->user()->isHOD())
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Make Review</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{route('applicationreview',$application->id)}}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                       <input type="hidden" value="PATCH" name="_method" >
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qoteaching" name="qoteaching" type="text" class="validate" value="{{ old('qoteaching') }}" required>
                                           <label for="qoteaching">Quality of Teaching</label>
                                           @if ($errors->has('qoteaching'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qoteaching') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                        <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qoresearch" name="qoresearch" type="text" class="validate" value="{{ old('qoresearch') }}" required>
                                           <label for="qoresearch">Quality of Research</label>
                                           @if ($errors->has('qoresearch'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qoresearch') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qopublication" name="qopublication" type="text" class="validate" value="{{ old('qopublication') }}" required>
                                           <label for="qopublication">Quality of Publication</label>
                                           @if ($errors->has('qopublication'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qopublication') }}</strong>
                                               </span>
                                           @endif
                                         </div>

                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="textarea1" name="generalrecommendation" class="materialize-textarea" length="350"></textarea>
                                              <label for="textarea1">General Recommendation</label>
                                             @if ($errors->has('generalrecommendation'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('generalrecommendation') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="percentagescore" name="percentagescore" type="text" class="validate" value="{{ old('percentagescore') }}" required>
                                           <label for="percentagescore">Percentage Score of Staff</label>
                                           @if ($errors->has('percentagescore'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('percentagescore') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="commentbypanel" name="commentbypanel" type="text" class="validate" value="{{ old('commentbypanel') }}" required>
                                           <label for="commentbypanel">Comment By Departmental Review Panel</label>
                                           @if ($errors->has('commentbypanel'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('commentbypanel') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input_field col s12">
                                         <div class="file-field input-field">
                                                <div class="btn teal lighten-1">
                                                    <span>Upload Assessment File</span>
                                                    <input type="file" name="review">
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
                                             <button type="submit" class="btn waves-effect waves-light teal">Submit Review</button>
                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if(auth()->user()->isDean())
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Update Review</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{route('updatereview',$application->id)}}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                       <input type="hidden" value="PATCH" name="_method" >
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qoteaching" name="qoteaching" type="text" class="validate" value="{{$application->qoteaching}}" required>
                                           <label for="qoteaching">Quality of Teaching</label>
                                           @if ($errors->has('qoteaching'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qoteaching') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                        <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qoresearch" name="qoresearch" type="text" class="validate" value="{{$application->qoresearch}}" required>
                                           <label for="qoresearch">Quality of Research</label>
                                           @if ($errors->has('qoresearch'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qoresearch') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="qopublication" name="qopublication" type="text" class="validate" value="{{$application->qopublication}}" required>
                                           <label for="qopublication">Quality of Publication</label>
                                           @if ($errors->has('qopublication'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('qopublication') }}</strong>
                                               </span>
                                           @endif
                                         </div>

                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                              <i class="material-icons prefix">mode_edit</i>
                                              <textarea id="textarea1" name="generalrecommendation" class="materialize-textarea" value="{{$application->generalrecommendation}}" length="350"></textarea>
                                              <label for="textarea1">General Recommendation</label>
                                             @if ($errors->has('generalrecommendation'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('generalrecommendation') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="percentagescore" name="percentagescore" type="text" class="validate" value="{{$application->percentagescore}}" required>
                                           <label for="percentagescore">Percentage Score of Staff</label>
                                           @if ($errors->has('percentagescore'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('percentagescore') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                           <input id="commentbypanel" name="commentbypanel" type="text" class="validate" value="{{$application->commentbypanel}}" required>
                                           <label for="commentbypanel">Comment By Departmental Review Panel</label>
                                           @if ($errors->has('commentbypanel'))
                                               <span class="red-text">
                                                   <strong>{{ $errors->first('commentbypanel') }}</strong>
                                               </span>
                                           @endif
                                         </div>
                                         <div class="input_field col s12">
                                         <div class="file-field input-field">
                                                <div class="btn teal lighten-1">
                                                    <span>Upload Assessment File</span>
                                                    <input type="file" name="review">
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
                                             <button type="submit" class="btn waves-effect waves-light teal">Update Review</button>
                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
              </div>
          </div>
      </main>
  </div>


@stop
