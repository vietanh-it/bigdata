<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">

        @yield('title')

        <!-- Custom styles for this template -->
        {{ HTML::style('assets/css/style.css') }}

        <!-- Resources -->
        {{ HTML::style('assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}
        {{ HTML::style('assets/css/animate.css') }}
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- Navigation -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="..."></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li data-menu='home'>
                            <a href="{{ URL::action('HomeController@getIndex') }}#content">Home</a>
                        </li>
                        <li data-menu='information' class="dropdown">
                            <a href="#" data-toggle="dropdown">Information <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::action('HomeController@getAboutBhdi') }}#content">About BDHI</a>
                                </li>
                                <li>
                                    <a href="{{ URL::action('HomeController@getWhyBhdi') }}#content">Why BDHI</a>
                                </li>
                                <li>
                                    <a href="{{ URL::action('HomeController@getBigData') }}#content">Big Data?</a>
                                </li>
                                <li>
                                    <a href="{{ URL::action('HomeController@getHealthCare') }}#content">Healthcare?</a>
                                </li>
                                <li>
                                    <a href="{{ URL::action('HomeController@getChallenges') }}#content">Challenges?</a>
                                </li>
                                <li>
                                    <a href="{{ URL::action('HomeController@getOpporunities') }}#content">Opportunities</a>
                                </li>
                            </ul>
                        </li>
                        <li data-menu='donate'>
                            <a href="{{ URL::action('HomeController@getDonate') }}#content">Donate</a>
                        </li>
                        <li data-menu='comment' class="dropdown">
                            <a href="#" data-toggle="dropdown">Comments <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::action('HomeController@getShowComment') }}">Show Comments</a>
                                </li>
                                <li>
                                    @if(!Auth::check())
                                    <a href="#" onclick="alert('You must sign in first to post comments.')">Post Comments</a>
                                    @else
                                    <a href="{{ URL::action('HomeController@getComment') }}">Post Comments</a>
                                    @endif
                                </li>
                                <li>
                                    @if(!Auth::check())
                                    <a href="#" onclick="alert('You must sign in first to post comments.')">Manage Your Comments</a>
                                    @else
                                    <a href="{{ URL::action('HomeController@getManageComment') }}">Manage Your Comments</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                        <li data-menu='research'>
                            <a href="{{ URL::action('HomeController@getResearch') }}#content">Research</a>
                        </li>
                        <li data-menu='contact'>
                            <a href="{{ URL::action('HomeController@getContactUs') }}#content">Contact us</a>
                        </li>

                        <li data-menu='account' class="dropdown">
                            @if(!Auth::check())
                            <a href="#" data-toggle="dropdown">Account <b class="caret"></b></a>
                            @else
                            <a href="#" data-toggle="dropdown">{{ Auth::user()->email }} <b class="caret"></b></a>
                            @endif
                            <ul class="dropdown-menu">
                                @if(!Auth::check())
                                <li>
                                    <a href="#" data-toggle='modal' data-target='#signupModal'>Sign up</a>
                                </li>
                                <li>
                                    <a href="#" data-toggle='modal' data-target='#loginModal'>Sign in</a>
                                </li>
                                @else
                                <li>
                                    <a href="{{ action('HomeController@getSignOut') }}">Sign out</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> <!-- / .navigation -->

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Team Picture -->
            <div class="b-team-photo">
            </div>

            <div id='content' class="error-message">
                {{ HTML::ul($errors->all()) }}
            </div>
            @yield('content')

        </div> <!-- / .wrapper -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Contact Us -->
                    <div class="col-sm-6">
                        <h4><i class="fa fa-map-marker text-theme-primary"></i> Contact Us</h4>
                        <p>Do not hesitate to contact us if you have any questions or feature requests:</p>
                        <p>
                            Phone: 858-205-9437<br />
                            Email: <a href="mailto:moalgham@my.bridgeport.edu">Mostafa Al Ghamdi</a>
                        </p>
                    </div>
                    <!-- Newsletter -->
                    <div class="col-sm-6">
                        <h4><i class="fa fa-envelope text-theme-primary"></i> Newsletter</h4>
                        <p>
                            Enter your e-mail below to subscribe to our free newsletter.
                            <br>
                            We promise not to bother you often!
                        </p>
                        <form class="form" role="form">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <label class="sr-only" for="subscribe-email">Email address</label>
                                        <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">OK</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright">
                        Copyright 2014 &COPY; - <a target="_blank" href="mailto:moalgham@my.bridgeport.edu">Mostafa Al Ghamdi</a> | All Rights Reserved
                    </div>
                </div>
            </div>  <!-- / .row -->
        </div> <!-- / .container -->

        <?php
        $currentUrl = Route::currentRouteAction();
        if ($currentUrl === '' || $currentUrl === NULL) {
            $currentUrl = 'HomeController@getIndex';
        }
        ?>

        <!-- Modal Login -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{ Form::open(array('url' => 'home/sign-in')) }}
                    <input type='hidden' name="currentUrl" value="{{ $currentUrl }}" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="loginLabel">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email address</label>
                            {{ Form::email('emailSignin', Input::old('emailSignin'), array('class' => 'form-control', 'placeholder' => 'Enter your email')) }}
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            {{ Form::password('passwordSignin', array('class' => 'form-control', 'placeholder' => 'Enter your password')) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {{ Form::submit('Sign in', array('class' => 'btn btn-primary')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <!-- Modal Login -->
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    {{ Form::open(array('url' => 'home/sign-up')) }}
                    <input type='hidden' name="currentUrl" value="{{ $currentUrl }}" />
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="signupLabel">Sign up</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username (Email)</label>
                            {{ Form::email('emailSignup', Input::old('emailSignup'), array('class' => 'form-control', 'placeholder' => 'Enter your email')) }}
                        </div>
                        <div class="form-group">
                            <label>Your Name</label>
                            {{ Form::text('nameSignup', Input::old('nameSignup'), array('class' => 'form-control', 'placeholder' => 'Enter your name')) }}
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            {{ Form::password('passwordSignup', array('class' => 'form-control', 'placeholder' => 'Enter your password')) }}
                        </div>
                        <div class="form-group">
                            <label>Retype Password</label>
                            {{ Form::password('rePasswordSignup', array('class' => 'form-control', 'placeholder' => 'Retype your password')) }}
                        </div>
                        <div class="form-group">
                            <label>Password Recovery Hint</label>
                            {{ Form::select('recoverQuestion', array(
                                        '0' => 'Your Childhood best friend?',
                                        '1' => 'Your father middle name?',
                                        '2' => 'Your favorite singer name?',
                                        '3' => 'Your favorite high school teacher name?',
                                        '4' => 'Your favorite game?',
                                        '5' => 'Your first car model?'), null,
                                array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            {{ Form::text('answerSignup', Input::old('answerSignup'), array('class' => 'form-control', 'placeholder' => 'Enter your answer')) }}
                        </div>
                        <div class="form-group">
                            <label>How did you hear about BDHI?</label>
                            {{ Form::text('referenceSignup', Input::old('referenceSignup'), array('class' => 'form-control', 'placeholder' => 'Enter your answer')) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {{ Form::submit('Sign up', array('class' => 'btn btn-primary')) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        @yield('modal')

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {{ HTML::script('assets/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/scrolltopcontrol.js') }}
        {{ HTML::script('assets/js/custom.js') }}
        <script type="text/javascript">
                                        $(document).ready(function () {
                                @if (Session::has('flashMessage'))
                                        alert("{{ Session::get('flashMessage') }}");
                                        window.location.hash = "#content";
                                        @endif
                                });
        </script>
        @yield('custom-script')
    </body>
</html>