@extends('layout.layout')

@section('title')
<title>Home</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='home']").addClass('active');
    });
</script>
@stop

@section('content')
<!-- About Us -->
<div id="content" class="b-about-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                The purpose of this website is to show information about Big Data.
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
                <span>Welcome to Big Data website</span>
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

</div> <!-- / .container -->

@stop