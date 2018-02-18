@extends('layouts.user')

@section('content')

    <div class="row">
        <div class="col s12">
            <div class="page-title">My Profile</div>
        </div>
        <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-content center-align">
                    <img src="assets/images/profile-image-1.png" class="responsive-img circle" width="128px" alt="">
                    <p class="m-t-lg flow-text"><a href="/profile/{{$user->id}}">{{$user->surname}} {{$user->othernames}}</a></p>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-content">
                    <span class="card-title">Circles</span>
                    <div class="chip m-t-sm">CIS</div>
                    <div class="chip m-t-sm">Developers</div>
                    <div class="chip m-t-sm">Family</div>
                    <div class="chip m-t-sm">Scholars</div>
                    <div class="chip m-t-sm">Researchers</div>
                </div>
            </div> --}}
        </div>
    </div>
      @if ($user->isDean())
        <div class="row">
          <div class="col s12">
              <div class="page-title">Head of Departments</div>
          </div>
          @foreach ($hods as $hod)
          <div class="col s12 m4 l3">
            <div class="card">
                <div class="card-content center-align">
                  <span></span>
                    <img src="assets/images/profile-image-1.png" class="responsive-img circle" width="128px" alt="">
                    <p class="m-t-lg flow-text"><a href="/profile/{{$hod->id}}">{{$hod->surname}} {{$hod->othernames}}</a></p>
                    <div class="chip m-t-sm teal white-text"><a class="white-text" href="/serve/recommendation/{{$hod->id}}">Recommend</a></div>
                    <div class="chip m-t-sm deep-orange white-text"><a class="white-text" href="/serve/query/{{$hod->id}}">Query</a></div>
                </div>
            </div>
          </div>
          @endforeach

    </div>
    @endif
    @if ($user->isDean() || $user->isHOD())
    <div class="row">
      <div class="col s12">
          <div class="page-title">Staff</div>
      </div>
      @foreach ($staff as $staff)
      <div class="col s12 m4 l3">
        <div class="card">
            <div class="card-content center-align">
              <span></span>
                <img src="assets/images/profile-image-1.png" class="responsive-img circle" width="128px" alt="">
                <p class="m-t-lg flow-text"><a href="/profile/{{$staff->id}}">{{$staff->surname}} {{$staff->othernames}}</a></p>
                <div class="chip m-t-sm teal white-text"><a class="white-text" href="/serve/recommendation/{{$staff->id}}">Recommend</a></div>
                <div class="chip m-t-sm deep-orange white-text"><a class="white-text" href="/serve/query/{{$staff->id}}">Query</a></div>
            </div>
        </div>
      </div>
      @endforeach
    </div>
@endif

@stop
