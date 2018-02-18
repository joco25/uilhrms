@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Research</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addresearch') }}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="name" name="topic" type="text" class="validate" value="{{ old('name') }}" required>
                                             <label for="name">Topic</label>
                                         </div>



                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="status" name="status" type="text" class="validate" value="{{ old('status') }}" required>
                                             <label for="status">Status</label>

                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="status" name="fundingsource" type="text" class="validate" value="{{ old('status') }}" required>
                                             <label for="status">Funding Source</label>

                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="status" name="value" type="text" class="validate" value="{{ old('status') }}" required>
                                             <label for="status">Value</label>

                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">today</i>
                                             <label for="startdate">Start Date</label>
                                             <input id="startdate" type="text"
                                             name="startdate"
                                              class="datepicker">
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="amountexpended" name="amountexpended" type="text" class="validate" value="{{ old('amountexpended') }}" required>
                                             <label for="amountexpended">Amount Spent</label>

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
                                         <input name="profile_id" type="hidden" value="{{$profile->id}}" required>

                                         <div class="col s12 right-align m-t-sm">

                                             <button type="submit" class="btn waves-effect waves-light teal">Add Research</button>


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
