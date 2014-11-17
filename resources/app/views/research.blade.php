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

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Research Ideas
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
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