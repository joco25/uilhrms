@extends('layouts.user')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Sanction Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     <li class="collection-item"><b>Staff Number:</b> {{$sanction->staff_id}} </li>
                                     <li class="collection-item"><b>by: </b> {{$sanction->user->surname}} {{$sanction->user->othernames}}</li>
                                     <li class="collection-item"><b>Sanction For:</b> {{$sanction->title}}</li>
                                     <li class="collection-item"><b>Sanction Details:</b> {{$sanction->details}}</li>
                                     
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
