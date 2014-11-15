@extends('layout.layout')

@section('title')
<title>Why BHDI</title>
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
                Why BHDI
            </h2>
            <h2 class="headline-lg">
                Why not FB?
            </h2>
            <h2 class="headline-lg">
                Why not Twitter?
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>BHDI Website</span>
            </h3>
            <p>
                <span class="drop-cap">B</span>ecause, FB and Twitter are Ads driven. It is easier to get lost in such sites and lose focus. BDHIis free and Zero distractful. FB and Twitter are general purpose social networking. BDHI is highly focused on Big Data Discussion in relation with Health industry.
            </p>
            <p>
                <span class="drop-cap">T</span>hrough this open forum discussion, we will like to encourage the students, gradudates, researchers, industrialists and young scientists to share their ideas, thoughts and comments to promote solve health industry challenges and outstanding issues through the potential of Big Data.
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop