<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>UNILORIN HRMS | HR ADMIN</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="UNILORIN HRMS" />
        <meta name="keywords" content="UNILORIN HRMS" />
        <meta name="author" content="SUSAN .O" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{url('assets/plugins/materialize/css/materialize.min.css')}}"/>
        {{-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
        <link href="{{url('assets/plugins/metrojs/MetroJs.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet')}}">
        <link href="{{url('assets/plugins/weather-icons-master/css/weather-icons.min.css')}}" rel="stylesheet">



        <!-- Theme Styles -->
        <link href="{{url('assets/css/alpha.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{url('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">
                            <span class="chapter-title">UNILORIN HRMS</span>
                        </div>
                        <form class="left search col s6 hide-on-small-and-down">
                            <div class="input-field">
                                <input id="search" type="search" placeholder="Search" autocomplete="off">
                                <label for="search"><i class="material-icons search-icon">search</i></label>
                            </div>
                            <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">{{$ncount}}</span></a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>

                        <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                            <li class="notificatoins-dropdown-container">
                                <ul>
                                    <li class="notification-drop-title">New</li>
                                    @foreach($notifications as $notification)
                                    <li>
                                        <a class="grey-text" href="/notification/show/{{$notification->id}}">
                                        <div class="notification">
                                            <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                            <div class="notification-text"><p>{{$notification->title}}</p><span>{{Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    @endforeach
                                    <li class="notification-drop-title">Default</li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                            <div class="notification-text"><p>Welcome to the new UnilorinHR</p><span>2017</span></div>
                                        </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                        <div class="notification">
                                            <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                            <div class="notification-text"><p>Account Logged Successfully</p><span>just now</span></div>
                                        </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="search-results">
                <div class="container search-container">
                    <div class="row">
                        <div class="col s12 search-head">
                            <div class="row">
                                <div class="col s12">
                                    <div class="left">
                                        <p class="search-results-title">Quick search results</p>
                                        <p class="search-filter left">
                                            <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                            <label for="filled-in-box">Google search</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="res-not-found">No results found</div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="{{url('assets/images/profile-image-1.png')}}" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="{{url('assets/images/profile-image-3.jpg')}}" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="{{url('assets/images/profile-image.png')}}" alt="" class="circle responsive-img z-depth-1">
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent ">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <span class="z-depth-1 circle search-circle red darken-1">G</span>
                                    </div>
                                    <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 search-result-container">
                            <div class="card card-transparent">
                                <div class="card-content first">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">Yesterday, 4:56 PM</span>
                                </div>
                            </div>
                            <div class="card card-transparent">
                                <div class="card-content">
                                    <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                                </div>
                                <div class="card-action">
                                    <span class="grey-text">27 January 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{url('assets/images/profile-image.png')}}" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>{{Auth::user()->surname}} {{Auth::user()->othernames}}</p>
                                <span>{{Auth::user()->email}}</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding {{ (Request::is('hr') ? ' active' : '') }}"><a class="waves-effect waves-grey active" href="{{url('/dashboard')}}"><i class="material-icons">apps</i>Dashboard</a></li>
                    <li class="no-padding {{ (Request::is('staff') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/staff')}}"><i class="material-icons">perm_contact_calendar</i>Staff</a>
                    </li>
                    <li class="no-padding {{ (Request::is('questionnaires') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/questionnaires')}}"><i class="material-icons">code</i>questionnaires</a>
                    </li>
                    <li class="no-padding {{ (Request::is('applications') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/applications')}}"><i class="material-icons">mode_edit</i>Applications</a>
                    </li>
                    <li class="no-padding {{ (Request::is('queries') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/queries')}}"><i class="material-icons">live_help</i>Queries</a>
                    </li>
                    <li class="no-padding {{ (Request::is('recommendations') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/recommendations')}}"><i class="material-icons">done_all</i>Recommendations</a>
                    </li>
                    <li class="no-padding {{ (Request::is('sanctions') ? ' active' : '') }}"><a class="waves-effect waves-grey" href="{{url('/sanctions')}}"><i class="material-icons">assignment_late</i>Sanctions</a>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey" href="/logout"><i class="material-icons">power_settings_new</i>Logout</a>
                    </li>
                </ul>
                <div class="footer">
                    <p class="copyright">SusannO ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <main class="mn-inner inner-active-sidebar">
                @yield('content')

            </main>
            <div class="page-footer">
                <div class="footer-grid container">

                </div>
            </div>
        </div>
        <div class="left-sidebar-hover"></div>


        <!-- Javascripts -->
        <script src="{{url('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{url('assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{url('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{url('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{url('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('assets/plugins/counter-up-master/jquery.counterup.min.js')}}"></script>
        <script src="{{url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{url('assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{url('assets/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('assets/plugins/curvedlines/curvedLines.js')}}"></script>
        <script src="{{url('assets/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{url('assets/js/pages/form_elements.js')}}"></script>
        <script src="{{url('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>
        <script src="{{url('assets/plugins/google-code-prettify/prettify.js')}}"></script>
        <script src="{{url('assets/js/pages/form-input-mask.js')}}"></script>

        <script src="{{url('assets/js/alpha.min.js')}}"></script>
        <script src="{{url('assets/js/pages/dashboard.js')}}"></script>


    </body>
</html>
