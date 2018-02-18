@extends('layouts.admin')

@section('content')
  <div class="mn-content valign-wrapper">
      <main class="container " style="padding-top:2em;">
          <div class="valign">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white darken-1">
                            <div class="card-content ">
                                <span class="card-title">Application Details</span>
                                 <div class="row">
                                   <ul class="collection with-header">

                                     <li class="collection-item"><b>Staff Number:</b> {{$application->user->staff_id}} </li>
                                     <li class="collection-item"><b>Names: </b> {{$application->user->surname}} {{$application->user->othernames}}</li>
                                     <li class="collection-item"><b>Application Category:</b> {{$application->category->name}}</li>
                                     <li class="collection-item"><b>Application Details:</b> {{$application->details}}</li>
                                     @if(! $application->category->name == 'Promotion')
                                       <li class="collection-item"><b>Application duration:</b> {{$application->period}}</li>
                                       <li class="collection-item"><b>Applied:</b> {{Carbon\Carbon::parse($application->created_at)->diffForHumans()}}</li>
                                       <li class="collection-item"><b>StartDate:</b> {{Carbon\Carbon::parse($application->startdate)->diffForHumans()}}</li>
                                       <li class="collection-item"><b>EndDate:</b> {{Carbon\Carbon::parse($application->enddate)->diffForHumans()}}</li>
                                     @endif
                                     <li class="collection-item"><b>Supporting Document:</b> <a href="/documents/{{$application->document}}">Download</a></li>
                                    @if(auth()->user()->isHr())
                                    <li class="collection-item"><b>Action: </b><a class="waves-effect waves-green btn-flat " href="/application/approve/{{$application->id}}">Approve</a><a class="waves-effect waves-red btn-flat" href="/application/reject/{{$application->id}}">Reject</a></li>
                                    @endif
                                   </ul>
          
                                </div>
                            </div>
                        </div>
                        @if($application->category->name == 'Promotion')
                            <div class="card white darken-1">
                                <div class="card-content ">
                                    <span class="card-title">Review Details</span>
                                     <div class="row">
                                       <ul class="collection with-header">

                                         <li class="collection-item"><b>Quality of Research:</b> {{$application->qoresearch}} </li>
                                         <li class="collection-item"><b>Quality of Publication: </b> {{$application->qopublication}}</li>
                                         <li class="collection-item"><b>General Recommendation:</b> {{$application->generalrecommendation}}</li>
                                         <li class="collection-item"><b>Percentage Score of Staff:</b> {{$application->percentagescore}}</li>
                                         <li class="collection-item"><b>Comment By Departmental Review Panel:</b> {{$application->commentbypanel}}</li>
                                         <li class="collection-item"><b>Full Review:</b> <a href="/documents/{{$application->review}}">Download Review</a></li>
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
