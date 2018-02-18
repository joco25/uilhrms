@extends('layouts.user')

@section('content')

  <div class="row">
      <div class="col s12">
          <div class="page-title">My Profile</div>
      </div>
      <div class="col s12 m4 l3">
          <div class="card">
              <div class="card-content center-align">
                  <img src="{{url('assets/images/profile-image-1.png')}}" class="responsive-img circle" width="128px" alt="">
                  <p class="m-t-lg flow-text">{{$user->surname}} {{$user->othernames}}</p>
                  <div class="chip m-t-sm blue-grey white-text">UI Designer</div>
                  <div class="chip m-t-sm blue-grey white-text">Developer</div>
              </div>
          </div>
          <div class="card">
              <div class="card-content">
                  <span class="card-title">Circles</span>
                  <div class="chip m-t-sm">CIS</div>
                  <div class="chip m-t-sm">Developers</div>
                  <div class="chip m-t-sm">Family</div>
                  <div class="chip m-t-sm">Scholars</div>
                  <div class="chip m-t-sm">Researchers</div>
              </div>
          </div>
      </div>
      <div class="col s12 m4 l5">
          <div class="card">
              <div class="card-content ">
                <ul class="collection with-header">
                  <li class="collection-header"><h4>Personal Details</h4></li>
                  <li class="collection-item">Surname: {{$user->surname}}</li>
                  <li class="collection-item">Other names: {{$user->othernames}}</li>
                  <li class="collection-item">DOB: {{$user->dob}}</li>
                  <li class="collection-item">Gender:</li>
                  <li class="collection-item">Email:</li>
                  <li class="collection-item">Phone:</li>
                  <li class="collection-item">Contact Address:</li>
                  <li class="collection-item">Permanent Address:</li>
                </ul>

              </div>

          </div>
      </div>
      <div class="col s12 m4 l4">
          <div class="card">

            <div class="card-content ">
              <ul class="collection with-header">
                <li class="collection-header"><h4>University Details</h4></li>
                <li class="collection-item">Staff Number: {{$user->staff_id}}</li>
                <li class="collection-item">Designation:</li>
                <li class="collection-item">College:</li>
                <li class="collection-item">Faculty:</li>
                <li class="collection-item">Department:</li>
                <li class="collection-item">Date of Joining:</li>
                <li class="collection-item">Salary Level:</li>
              </ul>

            </div>
          </div>
      </div>
  </div>

@stop
