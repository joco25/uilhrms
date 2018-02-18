@extends('layouts.admin')

@section('content')
              <div class="middle-content">
                <div class="search-header">
                <div class="card card-transparent no-m">
                    <div class="card-content no-s">
                        <div class="z-depth-1 search-tabs">
                            <div class="search-tabs-container">
                                <div class="col s12 m12 l12">
                                    <div class="row search-tabs-row search-tabs-header">
                                        <div class="input-field col s12 m12 l2">
                                            
                                        </div>
                                        <div class="col s12 m12 l10 right">
                                            <a class="waves-effect waves-teal btn search-tabs-button right" href="{{url('/addstaff')}}"><i class="material-icons">contacts</i>Add Staff</a>
                                        </div>
                                    </div>
                                    <div class="row search-tabs-row search-tabs-container grey lighten-4">
                                        <div class="col s12 m6 l6">
                                            <ul>
                                                <li class="tab col s3"><a href="/staff/?role=staff">Staff</a></li>
                                                <li class="tab col s3"><a href="/staff/?role=hod">HOD's</a></li>
                                                <li class="tab col s3"><a href="/staff/?role=dean">Dean's</a></li>
                                                <li class="tab col s3"><a href="/staff/?role=hr">HR</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.alerts')
                    <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                    <div class="card-options">
                                        <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                                    </div>
                                    <span class="card-title">Staff</span>
                                <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Staff ID</th>
                                            <th data-field="number">Name</th>
                                            <th data-field="date">Date Added</th>
                                            <th data-field="progress">Progress</th>
                                            <th data-field="total">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->staff_id}}</td>
                                            <td><div class="chip">
                                                <a href="/staffprofile/ {{$user->id}}"><img src="{{url('assets/images/profile-image-1.png')}}" alt="Contact Person">
                                                {{$user->surname.' '.$user->othernames}}</a>
                                            </div></td>
                                            <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                                            <td><span class="pie">3/8</span></td>
                                            <td>{{$user->status}}</td>
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
