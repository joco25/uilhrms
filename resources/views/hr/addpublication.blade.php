@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Add Publication</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/addpublication') }}" enctype="multipart/form-data">
                                       {{ csrf_field() }}
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="title" name="title" type="text" class="validate" value="{{ old('natitleme') }}" required>
                                             <label for="title">Title</label>

                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">today</i>
                                             <label for="date">Date</label>
                                             <input id="date" type="text" name="date" class="datepicker">
                                         </div>
                                         <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                             <input id="publisher" name="publisher" type="text" class="validate" value="{{ old('napublisherme') }}" required>
                                             <label for="publisher">Publisher</label>

                                         </div>
                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">playlist_add</i>
                                             <select>
                                                 <option value="" disabled selected>Choose your option</option>
                                                 <option value="codeA">codeA</option>
                                                 <option value="codeB">codeB</option>
                                                 <option value="codeC">codeC</option>
                                                 <option value="codeB">codeD</option>
                                                 <option value="codeB">codeE</option>
                                                 <option value="codeB">codeF</option>
                                             </select>
                                             <label for="icon_telephone">Category</label>
                                         </div>

                                         <div class="input-field col s12">
                                             <i class="material-icons prefix">queue</i>
                                             <select>
                                                 <option value="" disabled selected>Choose your option</option>
                                                 <option value="inprogress">in progress</option>
                                                 <option value="completed">completed</option>
                                             </select>
                                             <label for="icon_telephone">Status</label>
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
                                             <button type="submit" class="btn waves-effect waves-light teal">Add Publication</button>
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
