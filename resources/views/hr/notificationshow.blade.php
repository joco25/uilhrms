@extends('layouts.survey')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Notification Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     
                                     <li class="collection-item"><b>Title: </b> {{$notification->title}}</li>
                                     <li class="collection-item"><b>Message:</b> {{$notification->message}}</li>
                                     
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
