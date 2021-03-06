@extends('layout.layout')

@section('title')
<title>Healthcare</title>
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
                Healthcare
            </h2>
        </div>
        <div class="col-sm-12 paragraph">
            <p>
                <span class="drop-cap">H</span>ealth care (or healthcare) is the diagnosis, treatment, and prevention of disease, illness, injury, and other physical and mental impairments in human beings. Health care is delivered by practitioners in allied health, dentistry, midwifery (obstetrics), medicine, nursing, optometry, pharmacy, psychology and other health professions. It refers to the work done in providing primary care, secondary care, and tertiary care, as well as in public health. 
            </p>
        </div>
    </div> <!-- / .row -->

</div> <!-- / .container -->
@stop