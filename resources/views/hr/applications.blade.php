@extends('layouts.admin')

@section('content')
              <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">

                                <span class="card-title">Total</span>
                                <span class="stats-counter"><span class="counter">{{count($applications)}}</span><small>This session</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                       
                </div>

                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Applications </span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Staff ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="category">Category</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="hod">hod</th>
                                            <th data-field="dean">dean</th>
                                            <th data-field="status">status</th>
                                            <th data-field="total">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($applications as $application)

                                        <tr>
                                            <td>{{$application->user->staff_id}}</td>
                                            <td><a href="/application/{{$application->id}}">{{$application->user->surname}} {{$application->user->othernames}}</a></td>
                                            <td>{{$application->category->name}}</td>
                                            <td>{{Carbon\Carbon::parse($application->created_at)->diffForHumans()}}</td>
                                            <td><div class="chip">
                                              {{$application->hodstatus}}
                                            </div></td>
                                            <td><div class="chip">
                                              {{$application->deanstatus}}
                                            </div></td>
                                            <td><div class="chip">
                                              {{$application->status}}
                                            </div></td>
                                            <td><a class="waves-effect waves-light waves-red btn" href="/application/delete/{{$application->id}}">delete</a></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                                <div class="divider"></div>
                                <ul class="pagination">
                                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop
