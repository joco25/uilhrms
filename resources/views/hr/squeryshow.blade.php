@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Query Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     <li class="collection-item"><b>Staff Number:</b> {{$query->staff_id}} </li>
                                     <li class="collection-item"><b>By: </b> {{$query->user->surname}} {{$query->user->othernames}}</li>
                                     <li class="collection-item"><b>Query Title:</b> {{$query->title}}</li>
                                     <li class="collection-item"><b>Query Details:</b> {{$query->details}}</li>
                                     <li class="collection-item"><b>Date:</b> {{Carbon\Carbon::parse($query->created_at)->diffForHumans()}}</li>
                                     @if(Auth::user()->staff_id==$query->staff_id)
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-green btn-flat " href="/respond/{{$query->id}}">Respond</a></li>
                                     @endif
                                     @if(Auth::user()->isHod())
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-red btn-flat " href="/hpass/{{$query->id}}">pass</a><a class="waves-effect waves-green btn-flat " href="/drop/{{$query->id}}">drop</a></li>
                                     @endif
                                     @if(Auth::user()->isDean())
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-red btn-flat " href="/dpass/{{$query->id}}">pass</a><a class="waves-effect waves-green btn-flat " href="/drop/{{$query->id}}">drop</a></li>
                                     @endif
                                   </ul>

                                </div>
                            </div>
                        </div>
                        @if($query->reason !=null)
                          <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Response</span>
                                 <div class="row">
                                   <ul class="collection with-header">
                                     <li class="collection-item"><b>Response Details:</b> {{$query->reason->details}}</li>
                                     <li class="collection-item"><b>Supporting Document:</b> <a href="/documents/{{$query->reason->document}}">Download</a></li>
                                     <li class="collection-item"><b>Submitted on:</b> {{Carbon\Carbon::parse($query->reason->created_at)->diffForHumans()}}</li>
                                   </ul>
                                    
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
