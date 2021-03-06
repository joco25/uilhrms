@extends('layouts.survey')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Application Category</span>
                                 <div class="row">
                                     <form class="col s12" role="form" method="POST" action="{{ url('/savecategory') }}">
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
                                         <div class="col s12 right-align m-t-sm">
                                             <button type="submit" class="btn waves-effect waves-light teal">Add Category</button>
                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <ul class="collection with-header">
                              <li class="collection-header"><h4>Available Categories</h4></li>
                              @foreach ($applicationcategory as $category)
                                  <li class="collection-item">{{$category->name}}</li>
                              @endforeach

                          </ul>
                          </div>

                        </div>
                    </div>
              </div>
          </div>
      </main>
  </div>


@stop
