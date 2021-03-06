@extends('layout.layout')

@section('title')
<title>Contact Us</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='contact']").addClass('active');
        @if (Session::has('message'))
            alert("{{ Session::get('message') }}");
        @endif
    });
</script>
@stop

@section('content')

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
                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Enter your name')) }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Email:</label>
                <div class="col-sm-10">
                    {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Enter your email')) }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2">Question:</label>
                <div class="col-sm-10">
                    {{ Form::textarea('question', Input::old('question'), array('class' => 'form-control', 'placeholder' => 'Enter your question', 'row' => '5')) }}
                </div>
            </div>
            <div class="col-sm-offset-2">
                {{ Form::submit('Send', array('class' => 'btn btn-lg btn-primary')) }}
            </div>

            {{ Form::close() }}
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop