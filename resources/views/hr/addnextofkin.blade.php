@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Next of Kin</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addnextofkin') }}">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="name" name="name" type="text" class="validate" value="{{ old('name') }}" required>
                                             <label for="name">Full Name</label>
                                             @if ($errors->has('name'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="relationship" name="relationship" type="text" class="validate" value="{{ old('relationship') }}" required>
                                             <label for="relationship">Relationship</label>

                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="address" name="address" type="text" class="validate" value="{{ old('address') }}" required>
                                             <label for="address">Address</label>
                                             @if ($errors->has('address'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('address') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="telephone" name="telephone" type="text" class="validate" value="{{ old('telephone') }}" required>
                                             <label for="telephone">Telephone</label>
                                             @if ($errors->has('telephone'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('telephone') }}</strong>
                                                 </span>
                                             @endif
                                         </div>

                                         <input name="profile_id" type="hidden" value="{{$profile->id}}" required>

                                         <div class="col s12 right-align m-t-sm">

                                             <button type="submit" class="btn waves-effect waves-light teal">Add Next of Kin</button>


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
