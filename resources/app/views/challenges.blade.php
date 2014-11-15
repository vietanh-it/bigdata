@extends('layout.layout')

@section('title')
<title>Challenges</title>
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
                Challenges and Issues
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>BHDI Website</span>
            </h3>
            <p><span class="drop-cap">H</span>ealth care is very expensive today.</p>
            <p>Re-hospitalization is great expense for end patients.</p>
            <p>Failures of Medicine trials</p>
            <p>Inefficient treatments</p>
            <p>Late diagnosis of lethel diseases</p>
            <p>Inefficient drugs</p>
            <p>Expensive and usused Health Insurances</p>
            <p>Expensive Healthcare system</p>
            <p>Inefficient use of Unstructured and natural language based clinical notes and blogs</p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop