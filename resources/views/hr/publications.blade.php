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
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addstaff') }}">
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
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="address" name="address" type="text" class="validate" value="{{ old('address') }}" required>
                                             <label for="address">Address</label>
                                             @if ($errors->has('address'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('address') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">today</i>
                                             <label for="date">Date</label>
                                             <input id="date" type="text" class="datepicker">
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="lastpost" name="lastpost" type="text" class="validate" value="{{ old('lastpost') }}" required>
                                             <label for="lastpost">Last Post Held</label>
                                             @if ($errors->has('lastpost'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('lastpost') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="lastsalary" name="lastsalary" type="text" class="validate" value="{{ old('lastsalary') }}" required>
                                             <label for="lastsalary">Last Salary</label>
                                             @if ($errors->has('lastsalary'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('lastsalary') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="reasonforleaving" name="reasonforleaving" type="text" class="validate" value="{{ old('reasonforleaving') }}" required>
                                             <label for="reasonforleaving">Reason For Leaving</label>
                                             @if ($errors->has('reasonforleaving'))
                                                 <span class="red-text">
                                                     <strong>{{ $errors->first('reasonforleaving') }}</strong>
                                                 </span>
                                             @endif
                                         </div>

                                         <input name="number" type="hidden" value="" required>

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
