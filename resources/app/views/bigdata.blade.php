@extends('layout.layout')

@section('title')
<title>Big Data</title>
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
                Big Data
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <h3 class="headline">
                <span>BHDI Website</span>
            </h3>
            <p>
                <span class="drop-cap">B</span>ig Data refers to data stream that is beyond the capability/processing power of current/traditional database systems.
            </p>
            <p>
                Big Data contains special parameters as 7 Vs of it. For example, Velocity, Vareity, Veracity, etc.
            </p>
            <p>
                Big Data is being generated every minute by various sources including but not limited to web, social networking, emails, blogs, marketing, research, articles, publication, FDA trials, clinical notes, patient data, satellites, insurance claims, etc.
            </p>
            <p>
                Most of such data is in unstructured form.
            </p>
            <p>
                However, Big Data contains lot of knowledge. We need to understand it though to put it to useful real world use.
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop