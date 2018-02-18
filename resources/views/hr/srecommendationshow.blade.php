@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Recommendation Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     <li class="collection-item"><b>Staff Number:</b> {{$recommendation->staff_id}} </li>
                                     <li class="collection-item"><b>by: </b> {{$recommendation->user->surname}} {{$recommendation->user->othernames}}</li>
                                     <li class="collection-item"><b>Recommendation For:</b> {{$recommendation->title}}</li>
                                     <li class="collection-item"><b>Recommendation Details:</b> {{$recommendation->details}}</li>
                                     <li class="collection-item"><b>File:</b> <a href="{{url('/documents/').$recommendation->document}}">{{$recommendation->document}}</a></li>
                                     @if(Auth::user()->staff_id == $recommendation->staff_id)
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-green btn-flat " href="/apply">Apply</a></li>
                                     
                                     @endIf
                                     
                                   </ul>

                                </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
      </main>
  </div>


@stop
