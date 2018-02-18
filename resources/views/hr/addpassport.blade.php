@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Passport</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addpassport') }}">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="number" name="number" type="text" class="validate" value="{{ old('number') }}" required>
                                             <label for="number">Passport Number</label>
                                             @if ($errors->has('number'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('number') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">today</i>
                                             <label for="issuedate">Date of issue</label>
                                             <input id="issuedate" type="text" name="dateofissue" class="datepicker">
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('place') ? ' has-error' : '' }}">
                                             <input id="place" name="placeofissue" type="text" class="validate" value="{{ old('number') }}" required>
                                             <label for="place">Place of Issue</label>
                                             @if ($errors->has('place'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('place') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <input name="profile_id" type="hidden" value="{{$profile->id}}" required>

                                         <div class="col s12 right-align m-t-sm">

                                             <button type="submit" class="btn waves-effect waves-light teal">Add Passport</button>


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
