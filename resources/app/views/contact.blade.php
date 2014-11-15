@extends('layout.layout')

@section('title')
<title>Contact Us</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='contact']").addClass('active');
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
                Contact Us
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>Please fill in the form below to contact us</span>
            </h3>
            {{ Form::open(array('url' => 'home/contact-us', 'class' => 'form-horizontal col-sm-offset-2 col-sm-8')) }}

            <div class="form-group">
                <label class="col-sm-2">Name:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" placeholder="Enter your name" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Email:</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" placeholder="Enter your email" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Question:</label>
                <div class="col-sm-10">
                    <textarea name="question" class="form-control" row="5" placeholder="Enter your question"></textarea>
                </div>
            </div>
            <div class="col-sm-offset-2">
                <button type="submit" class="btn btn-lg btn-primary">Send</button>
            </div>
            
            {{ Form::close() }}
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop