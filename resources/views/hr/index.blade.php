@extends('layouts.admin')

@section('content')
              <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                      <li class="red-text"><a href="/addcollege"><span class="badge cyan lighten-1">add</span></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">Colleges</span>
                                <span class="stats-counter"><span class="counter">{{$collegecount}}</span><small>colleges</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                              <div class="card-options">
                                  <ul>
                                    <li class="red-text"><a href="/addfaculty"><span class="badge cyan lighten-1">add</span></a></li>
                                  </ul>
                              </div>
                                <span class="card-title">Faculties</span>
                                <span class="stats-counter"><span class="counter">{{$facultycount}}</span><small>Faculties</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                              <div class="card-options">
                                  <ul>
                                    <li class="red-text"><a href="/adddepartment"><span class="badge cyan lighten-1">add</span></a></li>
                                  </ul>
                              </div>
                                <span class="card-title">Departments</span>
                                <span class="stats-counter"><span class="counter">{{$departmentcount}}</span><small>Departments</small></span>

                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">

                                <span class="card-title">Send Notification</span>
                                <div class="row">

                                <form class="col s12" role="form" method="POST" action="{{ url('/notification') }}">
                                  {{ csrf_field() }}
                                  <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">
                                      <input id="title" name="title" type="text" class="validate" value="{{ old('title') }}" required>
                                      <label for="title">Title</label>
                                      @if ($errors->has('title'))
                                          <span class="red-text">
                                              <strong>{{ $errors->first('title') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                                    <div class="input-field col s12{{ $errors->has('number') ? ' has-error' : '' }}">

                                         <textarea id="textarea1" name="message" class="materialize-textarea" length="120"></textarea>
                                         <label for="textarea1">Message</label>
                                        @if ($errors->has('message'))
                                            <span class="red-text">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <input name="status" type="hidden" value="pending" required>

                                    <div class="col s12 right-align m-t-sm">
                                        <button type="submit" class="btn waves-effect waves-light teal">Send</button>
                                    </div>
                                </form>

                              </div>
                            </div>
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
                                    <span class="card-title">Notifications</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="title">Title</th>
                                            <th data-field="number">Message</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="delete">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($notifications as $notification)
                                        <tr>
                                            <td>{{$notification->id}}</td>
                                            <td>{{$notification->title}}</td>
                                            <td>{{$notification->message}}</td>
                                            <td>{{Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</td>
                                            <td><a class="btn" href="/notification/delete/{{$notification->id}}">delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
@stop
