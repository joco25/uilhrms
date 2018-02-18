@extends('layouts.admin')

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
                                     <li class="collection-item"><b>Applied:</b> {{Carbon\Carbon::parse($query->created_at)->diffForHumans()}}</li>
                                   </ul>
                                    @if(Auth::user()->isHr())
                                     <li class="collection-item"><b>Action: </b><a class="waves-effect waves-red btn-flat " href="/sanction/{{$query->staff_id}}">sanction</a><a class="waves-effect waves-green btn-flat " href="/drop/{{$query->id}}">drop</a></li>
                                    @endif
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
