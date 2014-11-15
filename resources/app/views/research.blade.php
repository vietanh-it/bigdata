@extends('layout.layout')

@section('title')
<title>Research</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='research']").addClass('active');
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
                Research Ideas
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>BHDI Website</span>
            </h3>
            <p>
                1. Researching/studying DNA to understand one's genetic pattern to develop certain diseases.
            </p>
            <p>
                2. Study population of sick people to learn development of epidemics and diseases.
            </p>
            <p>
                3. Study patients medical history and all related data to finally help doctors to understand patient, not only medicines.
            </p>
            <p>
                4. To develop Personalized, Preditive and Preventive treatmetns and medicines to improve outcomes and reduce cost.
            </p>
            <p>
                5. To Develop AI based alogrithms to speed processing and search of unstructured data.
            </p>
            <p>
                6. To seperate good info(signal) from redundantant/irrelevant/useless (Noise) data. 
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop