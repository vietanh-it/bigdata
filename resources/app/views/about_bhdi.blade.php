@extends('layout.layout')

@section('title')
<title>About BHDI</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='information']").addClass('active');
    });
</script>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                About BHDI
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <p>
                <span class='drop-cap'>T</span>his website is open forum to share thoughts and ideas for BDHI so every one's voice can be heard.
            </p>
            <p>
                <span class='drop-cap'>W</span>e are Graduates students and are working in Big Data Health research. 
            </p>
            <p>
                <span class='drop-cap'>W</span>e believe, Big Data has raw ingredients to invent future invincibile machines.
            </p>
            <p>
                <span class='drop-cap'>W</span>e believe, Big Data has lot of information. However, to be able use such information, we need to do research to extract value out of it. In other words, We need to seperate Signal from Noise.
            </p>
            <p>
                <span class='drop-cap'>T</span>his website will help every one to share their ideas and add their drop of water to contribute to this ocean.
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop