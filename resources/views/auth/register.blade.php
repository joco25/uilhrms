<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Unilorin HRMS| Register</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="signup-page">
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
                <div class="spinner-layer spinner-red">
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
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container ">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Register</span>
                                       <div class="row">
                                           <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
                                             {{ csrf_field() }}
                                               <div class="input-field col s12{{ $errors->has('surname') ? ' has-error' : '' }}">
                                                   <input id="surname" name="surname" type="text" class="validate" value="{{ old('surname') }}" required>
                                                   <label for="surname">Surname</label>
                                                   @if ($errors->has('surname'))
                                                       <span class="red-text">
                                                           <strong>{{ $errors->first('surname') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>
                                               <div class="input-field col s12{{ $errors->has('othernames') ? ' has-error' : '' }}">
                                                   <input id="othernames" name="othernames" type="text" class="validate" value="{{ old('othernames') }}" required>
                                                   <label for="othernames">Other Names</label>
                                                   @if ($errors->has('othernames'))
                                                       <span class="red-text">
                                                           <strong>{{ $errors->first('othernames') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>
                                               <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                                 <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                                                 <label for="email">E-mail Address</label>
                                                   @if ($errors->has('email'))
                                                       <div class="col s12">
                                                           <span class="red-text">
                                                               <strong>{{ $errors->first('email') }}</strong>
                                                           </span>
                                                       </div>
                                                   @endif
                                               </div>
                                              <div class="input-field col s12{{ $errors->has('staff_id') ? ' has-error' : '' }}">
                                                   <input id="staff_id" name="staff_id" type="text" class="validate" value="{{ old('staff_id') }}" required>
                                                   <label for="staff_id">Staff ID</label>
                                                   @if ($errors->has('staff_id'))
                                                       <span class="red-text">
                                                           <strong>{{ $errors->first('staff_id') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>
                                               <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}" required>
                                                   <input type="password" name="password" class="validate" min="8" id="password">
                                                   <label for="password">Password</label>
                                                   @if ($errors->has('password'))
                                                       <span class="red-text">
                                                           <strong>{{ $errors->first('password') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>

                                               <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                   <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                                                   <label>Confirm Password</label>
                                                   @if ($errors->has('password_confirmation'))
                                                       <span class="help-block">
                                                           <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                       </span>
                                                   @endif
                                               </div>
                                               <div class="col s12 right-align m-t-sm">

                                                   <button type="submit" class="btn waves-effect waves-light teal">Register</button>
                                                   <p>
                                                       <a class="" href="{{ url('/login') }}">Have an account?</a>
                                                   </p>

                                               </div>
                                           </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>

    </body>
</html>
