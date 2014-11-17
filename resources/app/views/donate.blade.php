@extends('layout.layout')

@section('title')
<title>Donate</title>
@stop

@section('custom-script')
<script type="text/javascript">
    $(document).ready(function () {
        $("[data-menu]").removeClass('active');
        $("[data-menu='donate']").addClass('active');
    });
</script>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="headline-lg">
                Donate
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <p>
                COMING SOON in 2015 
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop