<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">

        <title>Big Data - Home</title>

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
                        <li>
                            <a href="#">Home</a>
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

            <!-- About Us -->
            <div class="b-about-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit congue porta. Pellentesque ac elit a metus condimentum lobortis a eu odio.
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .container -->
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="headline-lg">
                            About Us
                        </h2>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="headline">
                            <span>Welcome to Paperclip</span>
                        </h3>
                        <p>
                            Morbi rhoncus eu tellus sit amet porta. Suspendisse augue nunc, pharetra auctor pretium quis, semper id justo. Praesent egestas blandit vehicula. Phasellus eget purus mi.
                        </p>
                        <ul class="ft-list">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Donec vel nisi sit amet mauris dapibus aliquam quis vel magna.</li>
                            <li>Donec vulputate tellus quis volutpat congue.</li>
                            <li>Sed ultrices eros eu euismod semper.</li>
                            <li>Donec vulputate tellus quis volutpat congue.</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="headline">
                            <span>Our Skills</span>
                        </h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-theme-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                HTML/CSS
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-theme-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                JavaScript
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-theme-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                PHP
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-theme-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                Photoshop
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="headline-lg">
                            Our Team
                        </h2>
                        <h4>Meet our team members</h4>
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="user-avatar shadow-effect text-center">
                            <img class="img-responsive center-block" src="img/photo-4.jpg" alt="...">
                            John Doe
                            <p class="text-muted">Founder</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="user-avatar shadow-effect text-center">
                            <img class="img-responsive center-block" src="img/photo-5.jpg" alt="...">
                            Jane Doe
                            <p class="text-muted">Engineer</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="user-avatar shadow-effect text-center">
                            <img class="img-responsive center-block" src="img/photo-6.jpg" alt="...">
                            John Doe
                            <p class="text-muted">Sales</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="user-avatar shadow-effect text-center">
                            <img class="img-responsive center-block" src="img/photo-4.jpg" alt="...">
                            John Doe
                            <p class="text-muted">Admin Team</p>
                        </div>
                    </div>
                </div>
            </div> <!-- / .container -->

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
                            Phone: (+84)966 948879<br />
                            Email: <a href="mailto:vietanh.sgu@gmail.com">vietanh.sgu@gmail.com</a>
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
                        Copyright 2014 &COPY; - <a target="_blank" href="http://techstorm-solution.com">TechStorm Solution</a> | All Rights Reserved
                    </div>
                </div>
            </div>  <!-- / .row -->
        </div> <!-- / .container -->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {{ HTML::script('assets/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/scrolltopcontrol.js') }}
        {{ HTML::script('assets/js/custom.js') }}
    </body>
</html>