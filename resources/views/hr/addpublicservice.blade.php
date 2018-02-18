@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Public Service Rendered</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addpublicservice') }}">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="typeofservice" name="typeofservice" type="text" class="validate" value="{{ old('typeofservice') }}" required>
                                             <label for="typeofservice">Type of Service</label>
                                             @if ($errors->has('typeofservice'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                 </span>
                                             @endif
                                         </div>

                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="details" name="details" type="text" class="validate" value="{{ old('details') }}" required>
                                             <label for="details">Details</label>
                                             @if ($errors->has('details'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('details') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="placeofservice" name="placeofservice" type="text" class="validate" value="{{ old('placeofservice') }}" required>
                                             <label for="placeofservice">Place of Service</label>
                                             @if ($errors->has('placeofservice'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('placeofservice') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="periodofservice" name="periodofservice" type="text" class="validate" value="{{ old('periodofservice') }}" required>
                                             <label for="periodofservice">Period of Service</label>
                                             @if ($errors->has('periodofservice'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('periodofservice') }}</strong>
                                                 </span>
                                             @endif
                                         </div>

                                         <input name="profile_id" type="hidden" value="{{$profile->id}}" required>

                                         <div class="col s12 right-align m-t-sm">
                                             <button type="submit" class="btn waves-effect waves-light teal">Add Public Service</button>
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
