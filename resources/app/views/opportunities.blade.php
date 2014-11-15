@extends('layout.layout')

@section('title')
<title>Opportunities</title>
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
                Opportunities
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>BHDI Website</span>
            </h3>
            <p>
                There are lot of opportunities and room in world of Big Data with respect to healthcare industry. We outline few of them below to give our visitors some ideas.
            </p>
            <p>
                1. Research Funding available: There are 1000's of companies who are taking initiatives towards Big Data Healthcare and provides grants for qualified research proposals. For example, White House Big Data Initiative is from U.S Govt
            </p>
            <p>
                2. Healthcare is outstanding area to be improved, not inly in U.S but around the world.
            </p>
            <p>
                3. PhD research is needed to bring new results and better ideas and algorithms to solve challenges.
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop