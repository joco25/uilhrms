@extends('layouts.user')

@section('content')
              <div class="middle-content">
                   

                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Messages</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Staff ID</th>
                                            <th data-field="name">Name</th>
                                            <th data-field="title">Title</th>
                                            <th data-field="date">Date</th>
                                            <th data-field="total">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($messages as $message)


                                        <tr>
                                            <td>{{$message->user->staff_id}}</td>
                                            <td><a href="/message/{{$message->id}}">{{$message->user->surname}} {{$message->user->othernames}}</a></td>
                                            <td>{{$message->title}}</td>
                                            <td>{{Carbon\Carbon::parse($message->created_at)->diffForHumans()}}</td>
                                            <td><a class="btn" href="/message/delete/{{$message->id}}">delete</a></td>
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
